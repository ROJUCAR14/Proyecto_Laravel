<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;


class RolController extends Controller
{
    protected $table = 'roles';

    public function index() {
        $roles = Rol::all();
        return response()->json($roles);
    }
    

    public function store(Request $request){
        $rol = Rol::create([

            'rol'=>$request->rol,
        ]);
        return response()->json($rol);
    }
}