<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Copy;


class CopyController extends Controller
{
    public function index() {
        $copies = Copy::all();
        return response()->json($copies);
    }
    

    public function store(Request $request){
        $copies = Copy::create([
            'number_copies'=>$request->number_copies,
            'book_id'=>$request->book_id,
            'status_id'=>$request->status_id
        ]);
        return response()->json($copies);
    }
}