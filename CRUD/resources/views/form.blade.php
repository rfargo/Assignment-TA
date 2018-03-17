<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="/register">
	{{ csrf_field() }}
	<input type="text" name="name" placeholder="Name" required><br>
	<input type="text" name="email" placeholder="Email" required><br>
	<input type="password" name="password" placeholder="Password" required><br>	
	<button type="submit">Submit</button>
	</form>

</body>
</html>