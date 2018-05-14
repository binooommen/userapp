<?php

use Illuminate\Http\Request;

use App\Users;

Route::get('users', 'ApiUsersController@index');
Route::get('users/{id}', 'ApiUsersController@show');
Route::post('users', 'ApiUsersController@store');
Route::put('users/{id}', 'ApiUsersController@update');
Route::delete('users/{id}', 'ApiUsersController@delete');