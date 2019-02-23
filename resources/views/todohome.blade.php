<!DOCTYPE html>
<html>
<head>
	<title>TodoHome</title>
</head>
<body>
	<a href="/todo/create">Create</a>
<br>


	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Sex</th>
				<th>Phone</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach( $todos as $t )
			<tr>
				<td>{{$t->id}}</td>
				<td>{{$t->name}}</td>
				<td>{{$t->sex}}</td>
				<td>{{$t->phone_number}}</td>
				<td>
					<a href="/todo/show/{{$t->id}}">Show</a>
					<a href="/todo/edit/{{$t->id}}">Edit</a>
					<a href="/todo/delete/{{$t->id}}">delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>