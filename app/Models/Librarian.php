<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Librarian extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rol_id',
    ];

    public function rol (){
        return $this->belongsTo(Rol::class);
    }
}
