<?php

use App\Http\Controllers\Auth\LoginWebController;
use App\Http\Controllers\Auth\LogoutWebController;
use App\Http\Controllers\Auth\RegisterWebController;
use Illuminate\Support\Facades\Route;

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
Route::prefix('auth')->group(function () {
    Route::post('/login', LoginWebController::class)->middleware('guest');
    Route::post('/logout', LogoutWebController::class)->middleware('guest');
    Route::post('/register', RegisterWebController::class)->middleware('guest');
});