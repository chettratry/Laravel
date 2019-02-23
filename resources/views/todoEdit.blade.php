<!DOCTYPE html>
<html>
<head>
	<title>TodoCreate</title>
</head>
<body>
	<form action="/todo/update/{{$t->id}}" method="post" autocomplete="off">
		@csrf
		<input type="text" name="name" value="{{$t->name}}"><br>
		<input type="text" name="sex" value="{{$t->sex}}"><br>
		<input type="string" name="phone_number" value="{{$t->phone_number}}"><br>
		<button type="submit">Save</button>
	</form>
</body>
</html>