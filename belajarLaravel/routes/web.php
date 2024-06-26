<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;

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

Route::get('/', [HomeController::class,'home']);

Route::get('/register', [AuthController::class,'register']);

Route::get('/welcome', [AuthController::class,'welcome']);

Route::get('/master',function() {
   return view('layouts.master');
});

Route::get('/data-table',function() {
   return view('page.data-table');
});

Route::get('/table',function() {
   return view('page.table');
});

Route::resource('nama_cast',CastController::class);