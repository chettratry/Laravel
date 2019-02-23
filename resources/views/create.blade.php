<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ url('/post') }}" method="post">
		@csrf
		<input type="text" name="name">
		<button type="submit">Save</button>
		<br><input type="text"id="id">
		<button type="submit">Save</button>
	</form>
</body>
</html>