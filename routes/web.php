<?php

Route::get('/', 'UsersController@index');
Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');
Route::get('/users/{user}', 'UsersController@show');
//Using Get method for delete because of Form Method Spoofing limitations in laravel
//We can pass a hidden method if needed
Route::get('/users/delete/{id}', 'UsersController@delete');
Route::post('/users', 'UsersController@store');
//Using POST method for PUT because of Form Method Spoofing limitations in laravel
//We can pass a hidden method if needed
Route::post('/users/{id}', 'UsersController@update');