<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:web'])->get('/user', function (Request $request) {
    \Log::debug('auth:web' . print_r( $request->all(), true));
    return $request->user();
});

Route::middleware(['auth:web'])->get('/users', function () {
    return \App\Models\User::all();
});

Route::middleware(['auth:admin'])->get('/admin', function (Request $request) {
    \Log::debug('auth:admin' . print_r( $request->all(), true));
    return $request->user();
});


