<?php

use App\Http\Controllers\AdminAuth\AuthenticatedSessionController;
use App\Http\Controllers\AdminAuth\EmailVerificationNotificationController;
use App\Http\Controllers\AdminAuth\NewPasswordController;
use App\Http\Controllers\AdminAuth\PasswordResetLinkController;
use App\Http\Controllers\AdminAuth\RegisteredUserController;
use App\Http\Controllers\AdminAuth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

// Route::post('/register', [RegisteredUserController::class, 'store'])
//                 ->middleware('guest')
//                 ->name('register');

Route::post('/admin/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest')
                ->name('admin.login');

// Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
//                 ->middleware('guest')
//                 ->name('password.email');

// Route::post('/reset-password', [NewPasswordController::class, 'store'])
//                 ->middleware('guest')
//                 ->name('password.update');

// Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
//                 ->middleware(['auth:web', 'signed', 'throttle:6,1'])
//                 ->name('verification.verify');

// Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
//                 ->middleware(['auth:web', 'throttle:6,1'])
//                 ->name('verification.send');

Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth:admin')
                ->name('admin.logout');
