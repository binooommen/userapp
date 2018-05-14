<?php

namespace App\Http\Controllers;

use App\Users;

class UsersController extends Controller
{
    // Returns all the users
    public function index() {
        $users = Users::all();
        return view('users', compact('users'));
    }
    //shows just the one user
    public function show(Users $user) {
        return view('showuser', compact('user'));
    }
    // api list of users
    public function list() {
        $users = Users::all();
        return $users;
    }
    // api load user
    public function load(Users $user) {
        return $user;
    }
}
