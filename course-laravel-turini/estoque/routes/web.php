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
    return redirect('/produtos');
});
Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@auth');

Route::get('/produtos', [
    'middleware' => 'nosso-middleware',
    'uses' => 'ProdutoController@lista'
]);

Route::middleware('nosso-middleware')->group(function () {
    Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
    Route::get('/produtos/novo', 'ProdutoController@novo');
    Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
    Route::get('/produtos/json', 'ProdutoController@listaJson');
    Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
    Route::get('/produtos/preenche/{id}', 'ProdutoController@preenche');
    Route::post('/produtos/atualiza', 'ProdutoController@atualiza');
});
