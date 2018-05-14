<?php

Route::get('/', 'UsersController@index');
Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');
Route::get('/users/{user}', 'UsersController@show');
Route::get('/users/delete/{id}', 'UsersController@delete');
Route::post('/users', 'UsersController@store');
Route::post('/users/{id}', 'UsersController@update');

// RESTful api's
Route::get('/api/users', 'UsersController@list');
Route::get('/api/users/{user}', 'UsersController@load');