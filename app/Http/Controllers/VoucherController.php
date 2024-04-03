<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voucher;


class VoucherController extends Controller
{
    public function index() {
        $vouchers = Voucher::all();
        return response()->json($vouchers);
    }
    

    public function store(Request $request){
        $voucher = Voucher::create([
            'loan_date'=>$request->loan_date,
            'return_date'=>$request->return_date,
            'book_id'=>$request->book_id,
            'user_id'=>$request->user_id,
            'librarian_id'=>$request->librarian_id
        ]);
        return response()->json($voucher);
    }
}