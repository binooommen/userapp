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
    <body>
		<div class="container-fluid">
			<h1>User App</h1>
			<h2>List of Users</h2>
			<form id="user_list" method="post" action="user.php">
				<?php
				$result=getUsers();
				if($result){
					while($row = $result) { ?>
						<button type="submit" name="user_id" id="user_id" value="<?php echo $row["id"];?>" class="btn btn-warning btn-block">
							<?php echo $row["name"];?>
						</button>
						<br>
					<?php }?>
				<?php }?>
			</form>
			<form id="user_list" method="post" action="addUser.php">
				<button type="submit" name="add_user" id="add_user" class="btn btn-primary btn-block">Add New User</button>
			</form>
		</div>
	</body>
</html>
