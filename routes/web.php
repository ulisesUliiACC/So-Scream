<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RolController;

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
Route::get('/ulises', function () {
    return view('ulises');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* rutas de productos para la area adminitrativa */
Route::middleware('auth')->group(function(){
Route::get('/admin/productos',[ProductoController::class,'index'])->name('productos.index');
Route::get('/admin/productos/create',[ProductoController::class,'create'])->name('productos.create');
Route::post('/admin/productos/create',[ProductoController::class,'store'])->name('productos.store');
});

/* vista de roles */
Route::get('/admin/roles',[RolController::class,'index'])->name('admin_roles.index');
Route::get('/admin/roeles',[RolController::class,'create'])->name('admin_roles.create');






require __DIR__.'/auth.php';
require __DIR__.'/authAdmin.php';


