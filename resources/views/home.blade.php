@extends('layouts.awal')

@section('title')
Home
@endsection

@section('cover')
<div class="jumbotron jumbotron-fluid mb-0" style="background-image: url({{ asset('img/gurun.png') }});background-size: 100% 100%; height: 30rem;">
    <p class="text-center text-light mt-5" style="font-size: 40px;">Welcome To My Blog</p>
</div>
@endsection

@section('content')

    <div class="card mb-3 shadow-sm" style="border-radius: 0;">
        <div class="card-body">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-3 mb-2">
                        <img src="{{ asset('img/gurun.png') }}" style="width: 100%; height: 100%; border-radius: 5%;">
                    </div>
                    <div class="col-md-9">
                        <a href="{{ url('/read') }}" class="read">Pengertian Composer</a>
                        <p class="singkat" id="lol">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad magna aliqua. Ut enim ad magna aliqua. Ut enim ad</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 209 -->

@endsection
