<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tinderController;
use App\Http\Controllers\UserController;

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
Route::resource ('users',UserController::class);
Route::resource('tinder', App\Http\Controllers\tinderController::class);
