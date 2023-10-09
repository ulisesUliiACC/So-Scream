<?php

use App\Http\Controllers\AuthAdmin\AuthenticatedSessionController;
use App\Models\User;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DashboardController;
use App\Models\Admin;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/So_Scream', function () {
    return view('dashboard');
})->middleware(['guest', 'verified'])->name('dashboard');





/* ---------------------------------------------------------------------------------------*/

/* rutas de usuarios */





    Route::middleware('auth:admin')->group(function (){

   

     Route::get('/admin/usuarios',[UsuarioController::class,'index'])->name('usuarios.index');

     /*---- rutas de productos */
     Route::get('/admin/productos',[ProductoController::class,'index'])->name('productos.index');
     Route::get('/admin/productos/create',[ProductoController::class,'create'])->name('productos.create');
     Route::post('/admin/productos/create',[ProductoController::class,'store'])->name('productos.store');
     Route::get('/admin/productos/{id}/edit',[ProductoController::class,'edit'])->name('productos.edit');
     Route::delete('/admin/productos/{id}/destroy',[ProductoController::class,'destroy'])-> name ('productos.destroy');

     Route::get('/admin/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashoard');

        /* vista de roles */
    Route::get('/admin/roles',[RolController::class,'index'])->name('roles.index');
    Route::get('/admin/roles/create',[RolController::class,'create'])->name('roles.create');
    Route::post('/admin/roles/create',[RolController::class,'store'])->name('roles.store');


    /* vista de  creacion de admins */

    Route::get('/admin/newAdmins',[UsuarioController::class,'newIndex'])->name('newAdmins.index');
    
  
    
    
    });

    Route::get('/shop',[ProductoController::class,'shop'])->name('shop.shop');
    Route::get('/carrito',[DashboardController::class,'carrito'])->name('shop.carrito');

Route::get('/About_us', function () {
    return view('shop.index');
})->name('about.index');

  

Route::fallback(function(){

    return view('errors.404');
});



require __DIR__.'/auth.php';
require __DIR__.'/authAdmin.php';


