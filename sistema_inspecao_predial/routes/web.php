<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    // editar Usurio Cadastrado
    Route::get('/perfil/usuario/{id}', 'Engenheiro\UserController@edit')->name('user.edit');
    Route::put('/perfil/usuario/{id}/editar', 'Engenheiro\UserController@update')->name('user.update');

    // cadastrar edificio
    Route::get('/edificio', 'Edificio\EdificioController@create')->name('edificio.create');
    Route::post('/edificio/novo', 'Edificio\EdificioController@store')->name('edificio.store');
    // historico de edificios cadastrados
    Route::get('/edificio/historico', 'Edificio\EdificioController@index')->name('edificio.index');
    // verificar edifico
    Route::get('/edificio/verificar/{edificio_id}', 'Edificio\EdificioController@show')->name('edificio.show');
    // Editar edificio
    Route::get('/edificio/editar/{edificio_id}', 'Edificio\EdificioController@edit')->name('edificio.edit');
    Route::put('/edificio/editar/{edificio_id}/novo', 'Edificio\EdificioController@update')->name('edificio.update');
    // excluir edificio
    Route::delete('/edificio/excluir/{edificio_id}', 'Edificio\EdificioController@destroy')->name('edificio.destroy');

    // Check list
    Route::get('/edificio/check-list/{edificio_id}', 'Sistemas\SistemaController@create')->name('sistema.create');
    Route::post('/edificio/check-list/{edificio_id}/novo', 'Sistemas\SistemaController@store')->name('sistema.store');
    // historico de inspecoes
    Route::get('/edificio/{edificio_id}/historico/inspecao', 'Sistemas\SistemaController@index')->name('sistema.index');
    // deletando dado coletado 
    Route::delete('/edificio/inspecao/{elemento_id}/excluir', 'Sistemas\SistemaController@destroy')->name('sistema.destroy');


    // documentacao fotografica
    Route::get('/edificio/{edificio_id}/inspecao/elemento/{elemento_id}/documento_fotografico', 'Sistemas\DocumentacaoFotografica@create')->name('documentacao.create');
    Route::post('/edificio/{edificio_id}/inspecionar/elemento/{elemento_id}/documento_fotografico/novo', 'Sistemas\DocumentacaoFotografica@store')->name('documentacao.store');
    // listar todos os documentos fotograficos
    Route::get('/edificio/{edificio_id}/inspecao/documento_fotografico/historico', 'Sistemas\DocumentacaoFotografica@index')->name('documentacao.index');
    // deletar documento 
    Route::delete('/excluir/documento_fotografico/{documento_id}', 'Sistemas\DocumentacaoFotografica@destroy')->name('documentacao.destroy');

    // google Maps API
});
