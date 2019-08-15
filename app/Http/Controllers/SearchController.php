<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Artikel;
use App\Kategori;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    

	public function st(Request $req)
	{
		$tit = $req->search;
		$s = Artikel::where('title', 'LIKE', '%'.$req->search.'%')->orderBy('id', 'DESC')->paginate(5);
		$side = Artikel::orderBy('id', 'ASC')->get();
		return view('search.text')->withS($s)->withPost($side)->withTitle($tit);

	}

	public function show($slug)
	{
		$get = Kategori::where('nama', $slug)->first();
		$tit = $get->nama;
		$id  = $get->id;
		
		$s = Artikel::where('id_kategori', $id)->paginate(5);
		$side = Artikel::orderBy('id', 'ASC')->get();
		return view('search.kate')->withS($s)->withPost($side)->withTitle($tit);
	}

	public function tg($tag)
	{
		
		$fd  	 = Tag::where('nama', $tag)->first();
		$id 	 = $fd->id;
		$tit 	 = $fd->nama;

		$artikel = Artikel::with('tag')->whereHas('tag', function($q) use ($id){
           $q->where('id',$id);
      	   })->orderBy('id', 'DESC')->paginate(5);

		$side = Artikel::orderBy('id', 'ASC')->get();

		return view('search.tag')->withS($artikel)->withTitle($tit)->withPost($side);

	}


}
