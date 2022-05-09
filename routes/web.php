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

Route::match(['get','post'], '/', 'LoginController@login')->name('login');

Route::match(['get','post'], '/alterar-senha', 'AlterarSenhaController@alterarsenha')->name('alterarsenha');

Route::match(['get','post'], '/pagina-inicial', 'PaginaInicialController@home')->name('paginainicial');

Route::match(['get','post'], '/cadastrar-usuario', 'CadastrarUsuarioController@cadastrarusuario')->name('cad.usuario');

Route::match(['get','post'], '/cadastrar-divida', 'CadastrarDividaController@cadastrardivida')->name('cad.divida');

Route::match(['get','post'], '/vincular-divida', 'VincularDividaController@vinculardivida')->name('vinc.divida');

Route::match(['get','post'], '/listar-divida', 'ListarDividaController@listardivida')->name('listar.divida');

Route::match(['get','post'], '/pesquisar-cliente', 'PesquisaClienteController@pesquisarCliente')->name('pesquisa.cdv');
 /*cdv=cliente devedor*/

// Route::match(['get','post'], '/listar-cliente', 'ListarClienteController@listarcliente')->name('listar.cliente');


Route::prefix('/app')->group(function () {

    Route::get('/clientes-cadastro', 'ClienteController@index')->name('app.clientes-cadastro');
    Route::post('/clientes-cadastro', 'ClienteController@salvar')->name('app.clientes-cadastro');
});

Route::fallback(function () {
    echo 'Endereço acessado inexistente. <a href="' . route('app.clientes-cadastro') . '">Clique Aqui</a> Para ir para página incial';
});
