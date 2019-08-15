@extends('layouts.dash')

@section('content')

<div class="container mb-3">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card shadow" style="border-radius: 0;">
				<div class="card-body">
					<h3 class="border-bottom ">Create Article</h3>
					<form class="mt-3" action="{{ route('update.artikel') }}" method="POST" enctype="multipart/form-data">
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
							<input type="text" name="title" class="form-control" placeholder="Title" value="{{ $get->title }}" required >
						</div>
						<div class="form-group">
							<select class="form-control" name="kategori" required>
								<option value="{{ $get->kategori['id'] }}">{{ $get->kategori['nama'] }}</option>
								<option value=""><-- Kategori --></option>
								@foreach($kate as $k)
								<option value="{{ $k->id }}">{{ $k->nama }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<select class="form-control select2" name="tag[]" multiple="multiple">
								@foreach($tg as $t => $tg)
									<option value="{{ $t }}">{{ $tg }}</option>
								@endforeach
							</select>
						</div>
						<input type="hidden" name="id" value="{{ $get->id }}" readonly>
						<div class="form-group">
							<textarea class="form-control" name="description" placeholder="Write Your Story Here">{{ $get->description }}</textarea>
						</div>
						<div class="form-group">
							<label>Thumbnail</label>
							<input type="file" name="poster" class="form-control p-1">
						</div>
						<div class="text-right">
							<button class="btn btn-success">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
  $(document).ready(function() {
      
      var genre = 
      
      $('.select2').select2().val({!! json_encode($get->tag()->allRelatedIds()) !!}).trigger('change');


  });
</script>
<script src="{{ asset('js/tinymce.js') }}"></script>
<script>
	tinymce.init({
		selector:'textarea',
		height: 300,
	});

</script>

@endsection