<!DOCTYPE html>
<html>
<head>
	<title>Laravel exercise</title>
</head>
<body>
	<table>
		<th>
			<td>Name</td>
			<td>Email</td>
		</th>
		
		@foreach($users as $user)
		<tr>
			<td>{{ $user->name}}</td>
			<td>{{ $user->email}}</td>
			<td><a href="/user/{{ $user->id }}">Detail</a></td>
			<td><a href="/user/{{ $user->id }}/edit">Edit</a></td>
			<td><a href="/user/{{ $user->id }}/delete">Delete</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>