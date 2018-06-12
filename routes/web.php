<?php


Route::get('/caes', 'CaesController@caes');
Route::get('/caes/formulario', 'CaesController@formulario');
Route::post('/caes/cadastro', 'CaesController@cadastro');
Route::get('/', 'CaesController@index');
Route::get('/caes/deletar/{id}', 'Caescontroller@deletar');

