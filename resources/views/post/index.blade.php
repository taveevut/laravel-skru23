@extends ('post.layout.main')

@section('content')
		<div class="row justify-content-center">
				<div class="col-md-8">
						<div class="my-3">
								<a class="btn btn-sm btn-outline-primary" href="{{ route('post.create') }}">+ สร้างรายการ</a>
						</div>

						<div class="table-responsive">
								<table class="table-condensed table-hover table">
										<tr>
												<th>#</th>
												<th>หัวข้อ</th>
												<th>#</th>
										</tr>
										@foreach ($posts as $index => $value)
												<tr>
														<td>{{ $posts->firstItem() + $index }}</td>
														<td>{{ $value->title }}</td>
														<td width="1" class="text-nowrap">
																<a class="btn btn-sm btn-info" href="{{ route('post.edit', $value->id) }}">แก้ไข</a>
																<form method="POST" action="{{ route('post.destroy', $value->id) }}" onsubmit="return confirm('คุณต้องการลบรายนี้ใช่หรือไม่ ?')" style="display: contents;">
																		@csrf
																		{{ method_field('DELETE') }}
																		<button class="btn btn-sm btn-danger" type="submit">ลบ</button>
																</form>
														</td>
												</tr>
										@endforeach
								</table>

                {!! $posts->links() !!}
						</div>
				</div>
		</div>
@endsection
