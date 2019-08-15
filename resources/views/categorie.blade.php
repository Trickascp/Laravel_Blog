@extends('layouts.awal')

@section('title')
Categorie
@endsection

@section('cover')
<div class="jumbotron jumbotron-fluid mb-0" style="background-image: url({{ asset('img/gurun.png') }});background-size: 100% 100%; height: 30rem;">
    <p class="text-center text-light mt-5" style="font-size: 40px;">Welcome To My Blog</p>
</div>
@endsection

@section('content')

    <div class="card mb-3 shadow-sm" style="border-radius: 0;">
        <div class="card-body">
            <p class="h3 text-center">All Categorie</p>
            <div class="text-center">
                @forelse($all as $a)
                
                <a href="{{ route('search.categorie', $a->nama) }}" class="btn btn-info text-light">{{ $a->nama }}</a>
                @empty
                <p class="text-secondary text-center h5" style="font-weight: bold;">There's No Categorie</p>
                @endforelse
            </div>
        </div>
    </div>

    <!-- 209 -->

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