<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredAdminController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;

// Rutas de autenticación para administradores
Route::middleware('guest:admin')->group(function () {
    Route::get('admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');
    Route::post('admin/login', [AuthenticatedSessionController::class, 'store']);
    
    // Agregar más rutas de autenticación según sea necesario (por ejemplo, registro)
    
    // Rutas de restablecimiento de contraseña
    Route::get('admin/forgot-password', [PasswordResetLinkController::class, 'create'])->name('admin.password.request');
    Route::post('admin/forgot-password', [PasswordResetLinkController::class, 'store'])->name('admin.password.email');
    Route::get('admin/reset-password/{token}', [NewPasswordController::class, 'create'])->name('admin.password.reset');
    Route::post('admin/reset-password', [NewPasswordController::class, 'store'])->name('admin.password.update');
    
    // Rutas de verificación de correo electrónico
    Route::get('admin/verify-email', [EmailVerificationPromptController::class])->name('admin.verification.notice');
    Route::get('admin/verify-email/{id}/{hash}', [VerifyEmailController::class])->middleware(['signed', 'throttle:6,1'])->name('admin.verification.verify');
    Route::post('admin/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('admin.verification.send');
});

// Rutas de autenticación para administradores autenticados
Route::middleware('auth:admin')->group(function () {
    Route::post('admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
    
    // Agregar más rutas protegidas para administradores autenticados según sea necesario
    
    // Ruta para cambiar la contraseña
    Route::get('admin/change-password', [PasswordController::class, 'show'])->name('admin.password.show');
    Route::post('admin/change-password', [PasswordController::class, 'update'])->name('admin.password.update');
});
