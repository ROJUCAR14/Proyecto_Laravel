<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;


class StatusController extends Controller
{
    protected $table = 'status';
    
    public function index() {
        $statuses = Status::all();
        return response()->json($statuses);
    }
    

    public function store(Request $request){
        $status = Status::create([
            'status'=>$request->status
        ]);
        return response()->json($status);
    }
}