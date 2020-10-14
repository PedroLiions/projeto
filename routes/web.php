<?php

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

    $produtos = \App\Produto::orderBy('price', 'asc')->get();

    "select * from produtos order by id asc";

    dd($produtos);

});


Route::get('/teste', function () {
    return view('teste');
});

Route::get('/produtos', 'ProdutoController@listaProdutos')->name('lista-produtos');
Route::post('/produtos/criar', 'ProdutoController@criar');
Route::get('/produtos/editar/{id}', 'ProdutoController@pegarUnicoProduto');
Route::post('/produtos/editar/save', 'ProdutoController@saveEditacaoProduto');
Route::get('/produtos/delete/{id}', 'ProdutoController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
