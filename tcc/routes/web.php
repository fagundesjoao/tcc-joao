<?php

use Illuminate\Support\Facades\Route;

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

//Home
Route::get('/', function () {
    return view('welcome');
});


//Imóveis disponíveis
Route::post('/disponiveis', function(){
    return view('disponiveis');
})->middleware(['auth'])->name('disponiveis');

//View de pagamento
Route::post('/pagar', function(){
    return view('pagar');
})->middleware(['auth'])->name('pagar');


//Pagamento

Route::any('/pagar', 'PaymentController@index');
Route::any('/confirmarPagamento', 'PaymentController@stripePost');

Route::get('/anuncios/create', function () {
    return view('anuncios/create');
})->middleware(['auth'])->name('anuncios/create');

//CRUD Anúncios
Route::post('/anuncios', 'AnunciosController@store');
Route::any('/anuncios/{id}','AnunciosController@show')->middleware('auth');
Route::delete('/anuncios/{id}', 'AnunciosController@destroy')->middleware('auth');

Route::get('/anuncios/edit/{id}', 'AnunciosController@edit')->middleware('auth');
Route::put('/anuncios/update/{id}', 'AnunciosController@update')->middleware('auth');

//Verificação de disponibilidade
Route::post('/disponiveis', 'ReservasController@verificacao')->middleware(['auth'])->name('/disponiveis');

//Reserva
Route::post('/pagar', 'ReservasController@store');
Route::get('/agenda', 'ReservasController@agenda');
Route::get('/reservas', 'ReservasController@minhasReservas');

//Encerrar sessão
Route::get('/logout', '\App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');

//Home
Route::post('/index', 'ReservasController@index')->middleware('auth');
Route::get('/index', 'AnunciosController@index')->middleware('auth');

//Dashboard
Route::get('/dashboard','AnunciosController@dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
