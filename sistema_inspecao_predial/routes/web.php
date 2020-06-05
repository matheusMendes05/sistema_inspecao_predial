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

    // Coletar Dados de sistemas de edificacao
    // Route::get('/edifiio/{edificio_id}/coletar-dados-sistemas/novo', '')
});
