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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/disponiveis', function(){
    return view('disponiveis');
})->middleware(['auth'])->name('disponiveis');

// Route::get('/anuncios/create', [AnunciosController::class, 'create'])->middleware('auth');

Route::get('/anuncios/create', function () {
    return view('anuncios/create');
})->middleware(['auth'])->name('anuncios/create');

Route::post('/anuncios', 'AnunciosController@store');

Route::post('/disponiveis', 'ReservasController@verificacao');


Route::get('/anuncios/{id}','AnunciosController@show');
Route::delete('/anuncios/{id}', 'AnunciosController@destroy')->middleware('auth');

Route::get('/anuncios/edit/{id}', 'AnunciosController@edit')->middleware('auth');
Route::put('/anuncios/update/{id}', 'AnunciosController@update')->middleware('auth');

Route::get('/logout', '\App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');

Route::post('/index', 'ReservasController@index')->middleware('auth');
Route::get('/index', 'AnunciosController@index')->middleware('auth');


Route::get('/dashboard','AnunciosController@dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




require __DIR__.'/auth.php';
