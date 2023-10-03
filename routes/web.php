<?php

use App\Models\User;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['guest', 'verified'])->name('dashboard');



/* vista de roles */
Route::get('/admin/roles',[RolController::class,'index'])->name('roles.index');
Route::get('/admin/roles',[RolController::class,'create'])->name('roles.create');

/* ---------------------------------------------------------------------------------------*/

/* rutas de usuarios */





Route::middleware('auth:admin')->group(function (){

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/usuarios',[UsuarioController::class,'index'])->name('usuarios.index');

    /*---- rutas de productos */
    Route::get('/admin/productos',[ProductoController::class,'index'])->name('productos.index');
    Route::get('/admin/productos/create',[ProductoController::class,'create'])->name('productos.create');
    Route::post('/admin/productos/create',[ProductoController::class,'store'])->name('productos.store');
    Route::get('/admin/productos/{id}/edit',[ProductoController::class,'edit'])->name('productos.edit');
    Route::delete('/admin/productos/{id}/destroy',[ProductoController::class,'destroy'])-> name ('productos.destroy');
    
});

Route::get('/shops', function () {
    return view('shop.index');
})->name('shops.index');

Route::get('/shops', function () {
    return view('shop.index');
})->name('about.index');

Route::get('/login_admin',function() {
    return view('admin.auth.login_admin');
});



require __DIR__.'/auth.php';
require __DIR__.'/authAdmin.php';


