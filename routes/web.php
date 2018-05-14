<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user');
});

// REST API to return a list of users in JSON
Route::get('/api/users', function () {
    $users = DB::table('users')->get();
    return $users;
});

// REST API to return one users in JSON
Route::get('/api/users/{id}', function ($id) {
    $users = DB::table('users')->find($id);
    dd($users);
});