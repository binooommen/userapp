<?php

namespace App\Http\Controllers;

use App\Users;

class ApiUsersController extends Controller
{
    //API to list all users in json
    public function index()
    {
        return Users::all();
    }

    //API to show just one user
    public function show($id)
    {
        return Users::find($id);
    }

    //API to create one user
    public function store(Request $request)
    {
        return Users::create($request->all());
    }

    //API to update one user
    public function update(Request $request, $id)
    {
        $user = Users::findOrFail($id);
        $user->update($request->all());
        return $user;
    }

    //API to delete one user
    public function delete(Request $request, $id)
    {
        $user = Users::findOrFail($id);
        $user->delete();
        return 204;
    }
}
