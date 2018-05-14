@extends('layout')

@section('content')
    <h2>List of Users</h2>
    <li style="list-style-type: none;">
        @foreach ($users as $user)
            <a href="/users/{{$user->id}}" class="btn btn-primary btn-block">
                {{$user->username}}
            </a>
            <br>
        @endforeach
    </li>
    <li style="list-style-type: none;">
        <a href="/users/create" class="btn btn-success btn-block">
                Add a new user
        </a>
    </li>
@endsection