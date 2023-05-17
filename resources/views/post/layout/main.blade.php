<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">
						<a class="navbar-brand" href="#">[POST]</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
						</button>
						<div class="navbar-collapse collapse" id="navbarSupportedContent">
								<ul class="navbar-nav me-auto mb-lg-0 mb-2">
										<li class="nav-item">
												<a class="nav-link active" aria-current="page" href="{{ route('post.index') }}">หน้าแรก</a>
										</li>
										<li class="nav-item">
												<a class="nav-link" target="_blank" href="https://github.com/taveevut/laravel-skru23">APIs</a>
										</li>
								</ul>

								@if (!Auth::check())
										<form class="navbar-nav mb-lg-0 mr-auto mb-2" method="POST" action="{{ route('login') }}">
												@csrf
												<input class="form-control me-2" type="text" name="username" placeholder="ระบุชื่อผู้ใช้งาน" required autofocus>
												<input class="form-control me-2" type="password" name="password" placeholder="ระบุรหัสผ่าน" required>
												<button class="btn btn-outline-success text-nowrap" type="submit">เข้าสู่ระบบ</button>
										</form>
										<ul class="navbar-nav me-e mb-lg-0 mb-2">
												<li class="nav-item">
														<a class="nav-link" href="{{ route('register') }}">
																สมัครสมาชิก
														</a>
												</li>
										</ul>
								@else
										<ul class="navbar-nav me-e mb-lg-0 mb-2">
												<li class="nav-item">
														<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
																ออกจากระบบ
														</a>

														<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
																@csrf
														</form>
												</li>
										</ul>
								@endif

						</div>
				</div>
		</nav>

		<div class="container">
				@yield('content')
		</div>
</body>

</html>
