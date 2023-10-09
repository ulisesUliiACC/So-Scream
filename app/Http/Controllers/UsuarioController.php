<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class UsuarioController extends Controller
{
    public function index(){
        $users = User::paginate(10);
        return view('usuarios.index',compact('users'));
    }

    public function countUser()
    {
        $totalUsers = User::count(); // Cuenta todos los registros en la tabla "users"
        return $totalUsers;

    }

    
    public function newIndex()
    {
        $newAdmin = Admin::paginate(10);
        return view('New_Admins.index',compact('newAdmin'));
    }

}
