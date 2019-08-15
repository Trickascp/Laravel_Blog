@extends('layouts.dash')

@section('content')

<div class="container-fluid p-0	">
	<div class="row">
		<div class="col-md-12 mb-1">
			<p class="h3 ml-3 border-bottom mr-2">Your List Article </p>
		</div>
		<div class="col-md-12 text-center">
			<span ><a href="{{ route('create.artikel') }}" class="btn btn-success"><i class="fa fa-plus mr-2"></i>Create Article</a></span>
		</div>
	</div>
	<div class="row mt-3 equal-height-col">
		@forelse($list as $d)
		<div class="col-6 col-md-4 mb-2">
			
				<div class="card equal-content" style="border-radius: 0;">
					<div class="card-body p-2">
						<img src="{{ asset('poster/'.$d->poster) }}" style="width: 100%; height: 130px; border-radius: 5%;">
						<div class="detail mt-1 border-top text-center">
							<p class="title mt-2">{{ $d->title }}</p>
						</div>
						<div class="text-center mb-2">
							<a href="{{ route('read.artikel', $d->title) }}" class="btn btn-primary btn-sm" title="Preview"><i class="fa fa-eye"></i></a>
							<a href="{{ route('edit.artikel',$d->id) }}" class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
							<a href="{{ route('del.artikel', $d->id) }}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
						</div>
					</div>
				</div>	
			
		</div>
		@empty
		<div class="col-12 col-md-12">
			<p class="text-secondary text-center h3 mt-3">You have not created an article</p>
		</div>
		@endforelse

	</div>
</div>



@endsection

<!-- Testing Packages on Composer with Specific Commit Before Creating New Tag -->