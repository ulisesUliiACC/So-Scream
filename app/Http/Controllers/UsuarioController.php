<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $users = User::paginate(10);
        return view('usuarios.index',compact('users'));
    }
}
