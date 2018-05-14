@extends('layout')

@section('content')
<h4>Create a new user<h4>
<form id="user-form" method="POST" action="/users">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="user_roles_id">Role Id</label>
        <input type="number" id="user_roles_id" name="user_roles_id" required>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection