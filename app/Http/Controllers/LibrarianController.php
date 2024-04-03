<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Librarian;


class LibrarianController extends Controller
{
    public function index() {
        $librarians = Librarian::all();
        return response()->json($librarians);
    }
    

    public function store(Request $request){
        $librarian = Librarian::create([
            'name'=>$request->name,
            'rol_id'=>$request->rol_id
        ]);
        return response()->json($librarian);
    }
}