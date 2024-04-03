<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;


class GenreController extends Controller
{
    public function index() {
        $genres = Genre::all();
        return response()->json($genres);
    }
    

    public function store(Request $request){
        $genre = Genre::create([

            'name'=>$request->name,
        ]);
        return response()->json($genre);
    }
}