<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="{{ url('/user/update', array($users->id)) }}">
	{{ csrf_field() }}
	<input type="text" name="name" value="<?php echo $users->name ?>" placeholder="Name" required><br>
	<input type="text" name="email" value="<?php echo $users->email ?>" placeholder="Email" required><br>
	<input type="password" name="password" placeholder="Password" required><br>	
	<button type="submit">Update</button>
	</form>

</body>
</html>