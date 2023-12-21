<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class LandingPageController extends Controller
{
    public function home() {
        $user_id = session()->get('user_id');
        $predicts = collect([]);

        $url = "localhost:8000/predict/{$user_id}";
        $response = Http::get($url);

        if ($response->ok()) {
            $predicts = $response->json();
            $predicts = collect($predicts);
        }

        $url = "localhost:8000/top-book";
        $response = Http::get($url);

        if ($response->ok()) {
            $top_book = $response->json();
            $top_book = collect($top_book);
        }


        return view('landing-page.home', [
            'title' => 'TellTale - Books Review and Recommendation',
            'predicts' => $predicts,
            'top_book' => $top_book,
        ]);
    }

    public function detail($isbn) { 
        $book = collect([]);

        $url = "localhost:8000/book/{$isbn}";
        $response = Http::get($url);

        if ($response->ok()) {
            $book = $response->json();
            $book = collect($book);
        }

        $user_id = session()->get('user_id');
        $predicts = collect([]);

        $url = "localhost:8000/predict/{$user_id}";
        $response = Http::get($url);

        if ($response->ok()) {
            $predicts = $response->json();
            $predicts = collect($predicts);
        }

        return view('landing-page.book-detail', [
            'title' => $book->get('Book-Title') . ' by ' . $book->get('Book-Author') . ' | TellTale ',
            'book' => $book,
            'predicts' => $predicts,
            'average' => $book->get('rating'),
            'count' => $book->get('count_rating')
        ]);
    }
 }
