<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth_Admin\AuthenticatedSessionController;



// Rutas de autenticación para administradores
Route::middleware('guest:admin')->group(function () {
    Route::get('admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin/login');
    Route::post('admin/login', [AuthenticatedSessionController::class, 'store']);
});

// Rutas de autenticación para administradores autenticados
Route::middleware('auth:admin')->group(function () {
    Route::post('admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
});
