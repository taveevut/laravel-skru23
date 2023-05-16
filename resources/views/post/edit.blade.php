@extends ('post.layout.main')

@section('content')
		<div class="row justify-content-center">
				<div class="col-md-8">
						<form method="POST" action="{{ route('post.update', $post->id) }}">
								<div class="row row g-3 justify-content-center">
										@csrf
										@method('PUT')
										<div class="col-md-12 mb-3">
												<label class="form-label">หัวข้อ</label>
												<input type="text" name="title" class="form-control" value="{{ $post->title }}" placeholder="ระบุหัว">
										</div>
										<div class="col-md-12 mb-3">
												<label class="form-label">รายละเอียด</label>
												<textarea name="detail" cols="30" class="form-control" rows="10" placeholder="ระบุรายละเอียด">{{ $post->detail }}</textarea>
										</div>
										<div class="col-12">
												<button class="btn btn-primary" type="submit">บันทึกข้อมูล</button>
										</div>
								</div>
						</form>
				</div>
		</div>
@endsection
