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


Route::prefix('/app')->group(function () {

    Route::get('/clientes-cadastro', 'ClienteController@index')->name('app.clientes-cadastro');
    Route::post('/clientes-cadastro', 'ClienteController@salvar')->name('app.clientes-cadastro');
});

Route::fallback('ErroController@index')->name('app.error404');

Route::get('/login', 'LoginController@index')->name('app.login');
Route::post('/login', 'LoginController@index')->name('app.login');

