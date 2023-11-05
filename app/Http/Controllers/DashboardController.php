<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Producto;

class DashboardController extends Controller
{
    public function dashboard(){

        $totalUsers = User::count(); // Cuenta todos los registros en la tabla "users"
        $totalProducts = Producto::count();
        return view('admin.dashboard',compact('totalUsers','totalProducts'));
    }
  public function  about(){
      return view('about.about');
  }

  public function  checkout(){

    return view('shop.checkout.index');
  }

}
