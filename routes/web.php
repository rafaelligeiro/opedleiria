<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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


Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/message',[PageController::class,'message'])->name('message');
Route::get('/sobre',[PageController::class,'sobre'])->name('sobre');
Route::get('/eventos',[PageController::class,'eventos'])->name('eventos');
Route::get('/login',[PageController::class,'login'])->name('login');
Route::get('/register',[PageController::class,'register'])->name('register');

Route::group(['middleware' => ['auth', 'verified'], 'as' => 'admin.',
    'prefix' => 'admin'], function () {
    Route::get('/', [PageController::class, 'admindashboard'])->name('dashboard');

    Route::get('/users/{user}/send_reactivate_mail',
        [UserController::class, 'send_reactivate_email'])
        ->name('users.sendActivationEmail');
    Route::delete('/users/{user}/destroy_photo',
        [UserController::class, 'destroy_photo'])
        ->name('users.destroyPhoto');

    Route::resource('users', UserController::class);

});

//Auth::routes(['verify' => true]);

