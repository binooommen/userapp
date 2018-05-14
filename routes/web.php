<?php

Route::get('/', 'UsersController@index');
Route::get('/users', 'UsersController@index');
Route::get('/users/{user}', 'UsersController@show');
Route::get('/api/users', 'UsersController@list');
Route::get('/api/users/{user}', 'UsersController@load');