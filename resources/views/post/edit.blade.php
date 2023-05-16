<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
</head>

<body>
		<form method="POST" action="{{ route('post.update', $post->id) }}">
				@csrf
        @method('PUT')
				<table>
						<tr>
								<td>หัวข้อ</td>
								<td>
										<input type="text" name="title" value="{{ $post->title }}">
								</td>
						</tr>
						<tr>
								<td>รายละเอียด</td>
								<td>
										<textarea name="detail" cols="30" rows="10">{{ $post->detail }}</textarea>
								</td>
						</tr>
						<tr>
								<td>

								</td>
								<td>
										<button type="submit">บันทึกข้อมูล</button>
								</td>
						</tr>
				</table>
		</form>
</body>

</html>
