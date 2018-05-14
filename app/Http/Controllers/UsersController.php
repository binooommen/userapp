<?php

namespace App\Http\Controllers;

use App\Users;

class UsersController extends Controller
{
    // Returns all the users
    public function index() {
        $users = Users::all();
        return view('user.index', compact('users'));
    }

    //shows just the one user
    public function show(Users $user) {
        return view('user.show', compact('user'));
    }

    // create new user view
    public function create() {
        return view('user.create');
    }

    // store new user view
    public function store() {
        $post = new Users;
        $post->user_roles_id = request('user_roles_id');
        $post->username = request('username');
        $post->email = request('email');
        $post->save();
        return redirect('/');
    }

    // update user
    public function update($id) {
        $post = Users::find($id);
        $post->user_roles_id = request('user_roles_id');
        $post->username = request('username');
        $post->email = request('email');
        $post->save();
        return redirect('/');
    }

    // delete user
    public function delete($id) {
        $post = Users::find($id);
        $post->delete();
        return redirect('/');
    }
}
