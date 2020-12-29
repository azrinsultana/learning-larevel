<!DOCTYPE html>
<html>
<head>
	<title>User list page</title>
</head>
<body>

	<h3>All User</h3>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>

	<table border="1">
		<tr>
			<td>Username</td>
			<td>Passwrd</td>
			<td>COntact no</td>
			<td>employee name</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($users); $i++)
		<tr>
			<td>{{$users[$i]['username']}}</td>
			<td>{{$users[$i]['password']}}</td>
			<td>{{$users[$i]['contactno']}}</td>
			<td>{{$users[$i]['empname']}}</td>
			<td>
				<a href="/details/{{$users[$i]['id']}}">Details</a> |
				<a href="{{route('home.edit', $users[$i]['id'])}}">Edit</a> |
				<a href="{{route('home.delete', $users[$i]['id'])}}">Delete</a> 
			</td>
		</tr>
		@endfor
	</table>

</body>
</html>