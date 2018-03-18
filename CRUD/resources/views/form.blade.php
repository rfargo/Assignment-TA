<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="/register">
	{{ csrf_field() }}
	<input type="text" name="name" placeholder="Name" value={{$users->name}}><br>
	<input type="text" name="email" placeholder="Email" value={{$users->email}}><br>
	<input type="password" name="password" placeholder="Password" required><br>	
	<button type="submit">Submit</button>
	</form>

</body>
</html>