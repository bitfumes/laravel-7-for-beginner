<?php

Route::get('/todos', 'TodoController@index');
Route::get('/todos/create', 'TodoController@create');
Route::post('/todos/create', 'TodoController@store');
Route::get('/todos/edit', 'TodoController@edit');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', 'UserController@index');

Route::post('/upload', 'UserController@uploadAvatar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
