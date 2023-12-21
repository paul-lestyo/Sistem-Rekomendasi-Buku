from tensorflow.keras.models import load_model
from recommender_model import RecommenderNet
import numpy as np
import pandas as pd

def get_model():
  return load_model("model/", compile=False, custom_objects={'RecommenderNet': RecommenderNet})


def get_predictions(user_id, df, book):
	loaded_model = get_model()

	book_ids = df['ISBN'].unique().tolist()
	book_to_book_encoded = {x: i for i, x in enumerate(book_ids)}

	user_ids = df['User-ID'].unique().tolist()
	user_to_user_encoded = {x: i for i, x in enumerate(user_ids)}

	df = pd.merge(df,book[['ISBN','Book-Title']], on='ISBN')
	df['user'] = df['User-ID'].map(user_to_user_encoded)
	df['book'] = df['ISBN'].map(book_to_book_encoded)

	book_watched_by_user = df[df['User-ID'] == user_id]
	book_not_watched = book[~book['ISBN'].isin(book_watched_by_user['ISBN'].values)]['ISBN']
	book_not_watched = list(
		set(book_not_watched)
		.intersection(set(book_to_book_encoded.keys()))
	)

	book_not_watched = [[book_to_book_encoded.get(x)] for x in book_not_watched]
	user_encoder = user_to_user_encoded.get(user_id)
	if(user_encoder == None):
		return False
	
	user_book_array = np.hstack(
		([[user_encoder]] * len(book_not_watched), book_not_watched)
	)
	user_book_array = user_book_array[np.random.choice(user_book_array.shape[0], 100, replace=False)]
	predictions = loaded_model.predict(user_book_array)
	
	new_df = df.drop_duplicates(subset="ISBN")[['book','ISBN']]
	new_df.rename(columns={'book': 'book_id'}, inplace=True)
	book_df = pd.DataFrame(user_book_array, columns=['user_id', 'book_id'])
	book_df['prediction'] = predictions
	sorted_books = book_df.sort_values(by='prediction', ascending=False)
	merged_books = sorted_books.merge(new_df, on='book_id', how='left')
	return merged_books[:8]