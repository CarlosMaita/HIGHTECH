<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
    	return view('cms.crear_usuarios');
    }

    public function crearUsuario(Request $request){
    	$user = new User;
    	$user->name = $request->name;
    	$user->email= $request->email;
    	$user->password = Hash::make($request->password);
    	$user->save();

    	return back()->with('message','Creado con éxito');
    }
}