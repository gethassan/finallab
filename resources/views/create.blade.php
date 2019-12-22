<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="store" method="post">
		<label>
			name
		</label>
		<input type="text" name="name"><br>
		<label>email</label>
		<input type="email" name="email"><br>
		<label>password</label>
		<input type="password" name="password"><br>
		<input type="submit" name="submit" value="submit">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	</form>

</body>
</html>