<!DOCTYPE html>
<html>
<head>
	<title>TodoCreate</title>
</head>
<body>
	<form action="/todo" method="post" autocomplete="off">
		@csrf
		<input type="text" name="name"><br>
		<input type="text" name="sex"><br>
		<input type="string" name="phone_number"><br>
		<button type="submit">Save</button>
	</form>
</body>
</html>