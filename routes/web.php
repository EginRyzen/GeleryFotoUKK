<?php

use App\Http\Controllers\GaleryController;
use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('/', UserController::class);
Route::post('postlogin', [UserController::class, 'postLogin']);

Route::resource('galery', GaleryController::class);
