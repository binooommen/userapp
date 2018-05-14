@extends('layout')

@section('content')
    <h2>User</h2>
    <div id="view-mode">
        <h4>User Role Id : {{$user->user_roles_id}}</h4>
        <h4>Username : {{$user->username}}</h4>
        <h4>Email : {{$user->email}}</h4>
        <button id="edit-users" class="btn btn-warning">Edit</button>
        <form id="user-delete" method="GET" action="/users/delete/{{$user->id}}">
            {{ csrf_field() }}
            <button type="submit"class="btn btn-danger">Delete</button>
        </form>
    </div>
    <div id="edit-mode" style="display: none">
        <form id="user-update-form" method="POST" action="/users/{{$user->id}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="user_roles_id">Role Id</label>
                <input type="number" id="user_roles_id" name="user_roles_id" value="{{$user->user_roles_id}}" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{$user->username}}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="{{$user->email}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <button id="cancel" class="btn btn-warning">Cancel</button>
        </form>
    <div>
    <script>
        $('#edit-users').click(function() {
            $('#view-mode').hide();
            $('#edit-mode').show();
        });
        $('#cancel').click(function() {
            $('#view-mode').show();
            $('#edit-mode').hide();
        });
    </script>
@endsection