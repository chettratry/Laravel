<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="/todo"> Back</a>
	<a href="https://fb.com"> Facebook</a>
	<table>
		<tr>
			<td>ID</td><td>|</td><td>{{$t->id}}</td>
		</tr>
		<tr>
			<td>name</td><td>|</td><td>{{$t->name}}</td>
		</tr>
		<tr>
			<td>sex</td><td>|</td><td>{{$t->sex}}</td>
		</tr>
		<tr>
			<td>Phone</td><td>|</td><td>{{$t->phone_number}}</td>
		</tr>
	</table>
</body>
</html>