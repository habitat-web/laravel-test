<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileController;
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

Route::group(['prefix' => 'auth'], function () {
    Route::post('signup', [AuthController::class, 'signUp']);
    Route::post('login', [AuthController::class, 'login'])->name('login');

    Route::get('logout', [AuthController::class, 'logout'])
        ->middleware('auth:api');
});

Route::group(['prefix' => 'profile', 'middleware' => 'auth:api'], function () {
    Route::get('', [ProfileController::class, 'showProfile']);
    Route::get('products', [ProfileController::class, 'showProducts']);
    Route::post('products', [ProfileController::class, 'storeProducts']);
});
