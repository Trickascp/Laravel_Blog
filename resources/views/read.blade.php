@extends('layouts.awal')

@section('title')
{{ $all->title }}
@endsection

@section('content')

<div class="card mb-2" style="border-radius: 0;">
	<div class="card-body p-2">
		<img src="{{ asset('poster/'.$all->poster) }}" style="width: 100%; height: 300px;">
		<div class="desc p-2 text-justify">
			<p class="h3 mt-3 read">{{ $all->title }}</p>
			<p class="text-secondary">{{ $all->created_at->format('M d, Y') }} / <span class="text-primary">{{ $all->author }}</span></p>
			@foreach($all->tag as $t)
			<a href="{{ route('search.tag',$t->nama) }}" class="btn btn-info text-light btn-sm">{{ $t->nama }}</a>
			@endforeach
			<p>{!! $all->description !!}</p>
		</div>
	</div>
</div>

<div class="card" style="border-radius: 0;">
	<div class="card-body">
		<form action="{{ route('input.comment') }}" method="POST">
			@csrf
			<input type="hidden" name="id_artikel" value="{{ $all->id }}" readonly>
			<div class="row">
				<div class="col-md-6 mb-2">
					<input type="text" name="username" class="form-control" placeholder="Username" style="border-radius: 0;" required>
				</div>
				<div class="col-md-6 mb-2">
					<input type="emai" name="email" class="form-control" placeholder="Email" style="border-radius: 0;" required>
				</div>
				<div class="col-md-12 mb-2">
					<textarea class="form-control" name="comment" placeholder="Write Your Comment Here" style="border-radius: 0;" rows="3" required></textarea>
				</div>
				<div class="col-md-12 text-right">
					<button class="btn btn-primary mt-2">Post Your Comment</button>
				</div>
			</div>
		</form>
		<h3 class="mt-4 border-bottom mb-4">Comment's</h3>
		<div class="container-fluid">
			@forelse($com as $c)
			<div class="row mb-2">
				<div class="col-2 col-md-2">
					<div style="background: url({{ asset('img/gurun.png') }}); background-size: 100% 100%; width: auto; height: 75px;border-radius: 100%;">
						
					</div>
				</div>
				<div class="col-10 col-md-10">
					<span style="font-size: 20px;" class="text-primary">{{ $c->username }}</span>
					<p style="font-size: 14px;">{{ $c->comment }}</p>
				</div>
				<div class="col-12 col-md-12 mt-1 text-right">
					<hr>
				</div>
			</div>
			@empty
			<p class="text-secondary text-center h5" style="font-weight: bold;">There's No Comment</p>
			@endforelse
		</div>
	</div>
</div>

@endsection

@section('sidepost')

<div class="card mb-3" style="border-radius: 0;">
    <div class="card-body">
        <form action="{{ route('search.artikel') }}" method="POST">
            @csrf
            <div class="input-group">
            <input type="text" class="form-control" id="s" placeholder="Search" name="search" autocomplete="off" style="border-radius: 0;">
            <div>
               <button class="btn text-light" type="submit" style="
               background-color: #FFCC99; 
               border-radius: 0px 5px 5px 0px;">

                    <i class="fa fa-search"></i>

               </button>
            </div>
          </div>
        </form>

        <p class="h3 mt-4 border-bottom">Old Post</p>
        <ul>
            @forelse($post->slice(0,5) as $p)
            <li><a href="{{ route('read.artikel', $p->title) }}" class="read" style="font-size: 14px;">{{ $p->title }}</a></li>
            @empty
            <p class="text-secondary text-center h5" style="font-weight: bold;">There's No Post</p>
            @endforelse
        </ul>

    </div>
</div>

@endsection