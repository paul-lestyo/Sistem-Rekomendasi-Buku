from fastapi import FastAPI
from model import get_predictions
import pandas as pd

book = pd.read_csv('datasets/books.csv')
df = pd.read_csv('datasets/ratings.csv')
user = pd.read_csv('datasets/users.csv')

app = FastAPI()

@app.get('/book/{isbn}')
async def get_book(isbn: str):
	bookData = book[book['ISBN'] == isbn]
	ratings_for_isbn = df[(df['ISBN'] == isbn) & (df['Book-Rating'] > 0)]['Book-Rating']  # Mendapatkan rating untuk ISBN tertentu

	if not ratings_for_isbn.empty:
		average_rating = ratings_for_isbn.mean()
		count_rating = ratings_for_isbn.count()
	else:
		average_rating = 0 
		count_rating = 0

	bookData["rating"] = average_rating
	bookData["count_rating"] = count_rating
	return bookData.to_dict(orient="records")[0] if not bookData.empty else {"message": "Book not found"}

@app.get("/top-book")
async def top_book():
	bookData = book[:100]
	for index, row in bookData.iterrows():
		ISBN_filter = row['ISBN']
		ratings_for_isbn = df[(df['ISBN'] == ISBN_filter) & (df['Book-Rating'] > 0)]['Book-Rating']
		if not ratings_for_isbn.empty:
			average_rating = ratings_for_isbn.mean()
			count_rating = ratings_for_isbn.count()
		else:
			average_rating = 0
			count_rating = 0
		# Assign the average rating to the corresponding book in filtered_books DataFrame
		bookData.loc[index, "rating"] = average_rating
		bookData.loc[index, "count_rating"] = count_rating
	sorted_books = bookData.sort_values(by='rating', ascending=False)
	return sorted_books[:8].to_dict(orient="records")

@app.get('/users')
async def get_users():
	users_df = df['User-ID']
	usersData = user.fillna('')
	usersData = usersData[usersData['User-ID'].isin(users_df)]
	return usersData[:10].to_dict(orient='records')

@app.get("/predict/{user_id}")
async def get_recom(user_id: int):
	data_prediction = get_predictions(user_id, df[df['Book-Rating'] > 0], book)
	if(type(data_prediction) == bool ):
		return {"error": "User tidak ditemukan"}

	ISBN_prediction = data_prediction['ISBN']
	filtered_books = book[book['ISBN'].isin(ISBN_prediction)]
	for index, row in filtered_books.iterrows():
		ISBN_filter = row['ISBN']
		ratings_for_isbn = df[(df['ISBN'] == ISBN_filter) & (df['Book-Rating'] > 0)]['Book-Rating']
		if not ratings_for_isbn.empty:
			average_rating = ratings_for_isbn.mean()
			count_rating = ratings_for_isbn.count()
		else:
			average_rating = 0
			count_rating = 0
		filtered_books.loc[index, "rating"] = average_rating
		filtered_books.loc[index, "count_rating"] = count_rating


	return filtered_books.to_dict(orient="records")


