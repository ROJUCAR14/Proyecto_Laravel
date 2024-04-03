<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return response()->json($books);
    }
    

    public function store(Request $request){
        $book = Book::create([
            'title'=>$request->title,
            'year_publication'=>$request->year_publication,
            'author_id'=>$request->author_id,
            'genre_id'=>$request->genre_id
        ]);
        return response()->json($book);
    }
}