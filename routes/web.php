<?php

// Route::middleware('auth')->group(function () {
    Route::resource('/todo', 'TodoController');
    Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');
    Route::delete('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');
// });

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', 'UserController@index');

Route::post('/upload', 'UserController@uploadAvatar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
