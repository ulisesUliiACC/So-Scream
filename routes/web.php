<?php

use App\Http\Controllers\AuthAdmin\AuthenticatedSessionController;
use App\Models\User;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Carrito\CarritoController;
use App\Http\Controllers\Carrito\ProductosCController;
use App\Http\Controllers\Gateways\PaypalController;
use App\Models\Admin;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\NewAdmins\NewAdminsController;

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
});

Route::get('about',[DashboardController::class,'about'])->name('about');
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

    Route::get('/admin/newAdmins',[UsuarioController::class,'newIndex'])->name('newAdmins.index');
    Route::get('/admin/newAdmins/create',[NewAdminsController::class,'create'])->name('newAdmins.create');
    Route::post('/admin/newAdmins/create',[NewAdminsController::class,'store'])->name('newAdmins.store');

  });

    /* ruta de usuarios clientes */
    Route::middleware('auth')->group(function () {
      Route::get('/carrito', [CarritoController::class, 'carrito'])->name('cart.carrito');

        /* paypal config*/
      Route::post('paypal/payment',[PaypalController::class,'payment'])->name('paypal.payment');
      Route::get('paypal/succes',[PaypalController::class,'success'])->name('paypal.success');
      Route::get('paypal/cancel',[PaypalController::class,'cancel'])->name('paypal.cancel');


      /* */

      Route::post('add-to-cart/{id}', [CarritoController::class, 'addToCart'])->name('add-to-cart');

    Route::get('qty-increment/{rowId}',[CarritoController::class,'qtyIncrement'])->name('qty-increment');
    Route::get('qty-decrement/{rowId}',[CarritoController::class,'qtyDecrement'])->name('qty-decrement');
    Route::get('remove-product/{rowId}',[CarritoController::class,'removeProduct'])->name('remove-product');


    Route::get('/checkout',[DashboardController::class,'checkout'])->name('checkout');
    });
    /* ruta fin de usuario */




    Route::get('/productos',[CarritoController::class,'index'])->name('shop.shop');










require __DIR__.'/auth.php';
require __DIR__.'/authAdmin.php';


