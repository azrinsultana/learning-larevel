<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>
	
		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Create EMployee</legend>
			<table>
				<tr>
					<td>name</td>
					<td><input type="text" name="username" value="{{old('username')}}"></td>
				</tr>
				<tr>
					<td>Quantity</td>
					<td><input type="text" name="password" value="{{old('password')}}"></td>
				</tr>
				<tr>
					<td>price</td>
					<td><input type="text" name="empname" value="{{old('name')}}"></td>
				</tr>
				

			</table>
			</fieldset>
		</form>

		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
</body>
</html>