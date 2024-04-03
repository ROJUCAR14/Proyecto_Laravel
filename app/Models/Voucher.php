<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_date',
        'return_date',
        'book_id',
        'user_id',
        'librarian_id',
    ];

    public function user (){
        return $this->belongsTo(User::class);
    }

    public function librarian (){
        return $this->belongsTo(Librarian::class);
    }

    public function book (){
        return $this->belongsTo(Book::class);
    }
}
