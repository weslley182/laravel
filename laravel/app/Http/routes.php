<?php

Route::get('/', function(){
    return '<h1>Primeira l�gica com Laravel</h1>';
});

Route::get('/','ProdutoController@lista');
Route::get('/produtos','ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/novo','ProdutoController@novo');
Route::post('/produtos/adiciona','ProdutoController@adiciona');
Route::get('/produtos/listaJson','ProdutoController@listaJson');
