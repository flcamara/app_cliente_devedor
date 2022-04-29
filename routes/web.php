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


Route::prefix('/app')->group(function(){

    Route::get('/clientes', 'ClienteController@index')->name('app.clientes');
    Route::post('/clientes', 'ClienteController@salvar')->name('app.clientes');
    
});


Route::fallback(function(){
    echo 'Endereço acessado inexistente. <a href="'.route('app.clientes').'">Clique Aqui</a> Para ir para página incial';
});

