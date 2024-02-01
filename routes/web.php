<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoacaoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\InscricaoController;
use App\Http\Controllers\makeDonationController;

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
Route::get('/donate',[PageController::class,'donate'])->name('donate');
Route::get('/MyDonations', [makeDonationController::class, 'MyDonations'])->name('MyDonations.show');
Route::get('/sobre',[PageController::class,'sobre'])->name('sobre');
Route::get('/eventos',[PageController::class,'eventos'])->name('eventos');
Route::get('/patrocinios',[PageController::class,'patrocinios'])->name('patrocinios');
Route::get('/noticias',[PageController::class,'noticias'])->name('noticias');
Route::get('/perfil',[PageController::class,'perfil'])->name('perfil');
Route::put('/perfil',[PageController::class,'updatePerfil'])->name('updatePerfil');
Route::group(['middleware' => ['auth', 'verified'], 'as' => 'admin.','prefix' => 'admin'], function () {
    Route::get('/', [PageController::class, 'admindashboard'])->name('dashboard');
    Route::get('/users/{user}/send_reactivate_mail',[UserController::class, 'send_reactivate_email'])->name('users.sendActivationEmail');
    Route::delete('/users/{user}/destroy_photo',[UserController::class, 'destroy_photo'])->name('users.destroyPhoto');
    Route::resource('users', UserController::class);
    Route::resource('/eventos', EventoController::class);
    Route::resource('/patrocinios', EventoController::class);
    Route::resource('/noticias', NoticiaController::class);
    Route::resource('/doacoes', DoacaoController::class);
    Route::resource('/mensagens', MensagemController::class);
    Route::resource('/inscricoes', InscricaoController::class)->parameters(['inscricoes'=>'inscricao']);
});
Route::get('evento/{evento}/inscricoes',[InscricaoController::class,'create'])->name('inscricoes.create')->middleware(['auth', 'verified']);
Route::post('evento/{evento}/inscricoes',[InscricaoController::class,'store'])->name('inscricoes.store')->middleware(['auth', 'verified']);
Route::post('mensagens',[MensagemController::class,'store'])->name('mensagens.store');

Route::post('makeDonation',[makeDonationController::class,'store'])->name('makeDonation.store');
Route::get('MyDonationsEdit/{id}', [makeDonationController::class, 'MyDonationsEdit']);
Route::post('MyDonationsEdit', [makeDonationController::class, 'update']);
Auth::routes(['verify' => true]);
