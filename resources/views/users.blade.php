<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <title>Users</title>
    </head>
    <body class="jumbotron">
		<div>
            <h1>User App</h1>
            <h2>List of Users</h2>
            <li style="list-style-type: none;">
                @foreach ($users as $user)
                    <a href="users/{{$user->id}}" class="btn btn-primary btn-block">
                        {{$user->username}}
                    </a>
                    <br>
                @endforeach
			</li>
			<li style="list-style-type: none;">
                <a href="users/{{$user->id}}" class="btn btn-success btn-block">
                        Add a new user
                </a>
			</li>
		</div>
	</body>
</html>
