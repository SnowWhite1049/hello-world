<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Student Records</title>
</head>
<body>
	<table border = 1>
		<tr>
			<td>ID</td>
			<td>NAME</td>
		</tr>
		@foreach ($users as $user)
		<tr>
			<td>{{ $user->Id }}</td>
			<td>{{ $user->Name }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>