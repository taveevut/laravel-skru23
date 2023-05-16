<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
</head>

<body>
		<h1>[POST] Index page</h1>
		<table>
				<tr>
						<th>หัวข้อ</th>
						<th>#</th>
				</tr>
				@foreach ($posts as $value)
						<tr>
								<td>{{ $value->title }}</td>
								<td>#</td>
						</tr>
				@endforeach
		</table>
</body>

</html>
