<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\SaungController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/viewm',[PesanController::class,'index'])->name('viewm');
Route::get('/views',[SaungController::class,'index'])->name('views');
Route::get('/viewb',[BookingController::class,'index'])->name('viewb');
