@extends('layouts.dash')


@guest

@include('layouts.valid')

@else

@section('content')

<div class="container mb-3">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card shadow" style="border-radius: 0;">
				<div class="card-body">
					<h3 class="border-bottom ">Create Article</h3>
					<form class="mt-3" action="{{ route('input.artikel') }}" method="POST" enctype="multipart/form-data">
						@csrf
						@if ($errors->any())
				            <div class="alert alert-danger">
				                <ul>
				                    @foreach ($errors->all() as $error)
				                        <li>{{ $error }}</li>
				                    @endforeach
				                </ul>
				            </div>
				        @endif
						<div class="form-group">
							<input type="text" name="title" class="form-control" placeholder="Title" required>
						</div>
						<div class="form-group">
							<select class="form-control" name="kategori" required>
								<option value=""><-- Kategori --></option>
								@foreach($kate as $k)
								<option value="{{ $k->id }}">{{ $k->nama }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<select class="form-control select2" name="tag[]" multiple="multiple">
								@foreach($tg as $t)
									<option value="{{ $t->id }}">{{ $t->nama }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="description" placeholder="Write Your Story Here"></textarea>
						</div>
						<div class="form-group">
							<label>Thumbnail</label>
							<input type="file" name="poster" class="form-control p-1" required>
						</div>
						<div class="text-right">
							<button class="btn btn-success">Create</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<script src="{{ asset('js/tinymce.js') }}"></script>
<script>
	tinymce.init({
		selector:'textarea',
		height: 300,
	});

</script>

@endsection

@endguest