<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\MensagemController;

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
Route::post('mensagens',[MensagemController::class,'store'])->name('mensagens.store');
Route::get('/eventos', [EventoController::class, 'index']);
Auth::routes(['verify' => true]);

