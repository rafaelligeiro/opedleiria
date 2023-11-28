<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/index',[PageController::class,'index'])->name('index');
Route::get('/message',[PageController::class,'message'])->name('message');
Route::get('/sobre',[PageController::class,'sobre'])->name('sobre');
Route::get('/eventos',[PageController::class,'eventos'])->name('eventos');
Route::get('/login',[PageController::class,'login'])->name('login');
Route::get('/register',[PageController::class,'register'])->name('register');
