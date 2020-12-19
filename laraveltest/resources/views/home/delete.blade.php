<!DOCTYPE html>
<html>
<head>
	<title>Delete employee</title>
</head>
<body>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>
	
		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit User</legend>
			<table>
			<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{$username}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password" value="{{$password}}"></td>
				</tr>
				<tr>
					<td>Employee Name</td>
					<td><input type="text" name="empname" value="{{$empname}}"></td>
				</tr>
				
				<tr>
					<td>contact no</td>
					<td><input type="text" name="contactno" value="{{$contactno}}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Delete"></td>
				</tr>
			</table>
			</fieldset>
		</form>

		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
</body>
</html>