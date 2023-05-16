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
		<a href="{{ route('post.create') }}">สร้างรายการ</a>
		<table>
				<tr>
						<th>หัวข้อ</th>
						<th>#</th>
				</tr>
				@foreach ($posts as $value)
						<tr>
								<td>{{ $value->title }}</td>
								<td class="text-wrap">
										<a href="{{ route('post.edit', $value->id) }}">แก้ไข</a>
										<form method="POST" action="{{ route('post.destroy', $value->id) }}" onsubmit="return confirm('คุณต้องการลบรายนี้ใช่หรือไม่ ?')" style="display: contents;">
												@csrf
												{{ method_field('DELETE') }}
												<button type="submit">ลบ</button>
										</form>
								</td>
						</tr>
				@endforeach
		</table>
</body>

</html>
