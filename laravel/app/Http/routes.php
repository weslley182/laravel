<?php

Route::get('/', function(){
    return '<h1>Primeira l�gica com Laravel</h1>';
});


Route::get('/produtos','ProdutoController@lista');
