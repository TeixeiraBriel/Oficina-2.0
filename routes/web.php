<?php

use Illuminate\Support\Facades\Route;


Route::get('/','orcamentoController@index')->name('index');
Route :: post('/', 'orcamentoController@find')->name('resultado');;
Route::get('/orcamento/resultado','orcamentoController@index')->name('resultado');
Route::get('/orcamento/create','orcamentoController@Create')->name('createOrcamento');
Route :: post('/orcamento/create', 'orcamentoController@store');
