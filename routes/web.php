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

Route::get('/', 'PrincipalController@index')->name('site.index');

Route::get('/sobre-nos','SobreNosController@index')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@index')->name('site.contato');

Route::post('/contato', 'ContatoController@index')->name('site.contato');

Route::get('/login', 'ContatoController@index')->name('site.login');

Route::prefix('/app')->group (function ()
{
    Route::get('/clientes', 'ContatoController@index')->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', 'ContatoController@index')->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.rota1');



Route::fallback(function(){
    return 'A página solicitada não existe<br> <a href="'.route('site.index').'">Clique aqui</a> para ir a página inicial';
});