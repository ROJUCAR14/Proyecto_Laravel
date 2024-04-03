<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return response()->json($users);
    }
    

    public function create(Request $request){
        $user = User::create([

            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
//       dd($user);

        return response()->json($user);
    }

    public function delete($id) {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'Usuario eliminado correctamente'], 200);
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
    
        $user->firstname = $request->input('firstname', $user->firstname);
        $user->lastname = $request->input('lastname', $user->lastname);
        $user->email = $request->input('email', $user->email);
        $user->password = $request->input('password', $user->password);
        $user->save();
    
        return response()->json($user);
    }
    
}
