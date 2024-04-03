<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;


class AuthorController extends Controller
{
    public function index() {
        $Authors = Author::all();
        return response()->json($Authors);
    }
    

    public function store(Request $request){
        $Author = Author::create([
            'name'=>$request->name
        ]);
        return response()->json($Author);
    }
}