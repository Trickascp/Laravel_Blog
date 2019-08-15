<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Kategori;
use App\Comment;
use App\Tag;
use Auth;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $all = Artikel::orderBy('id', 'DESC')->paginate(5);        

        $side = Artikel::orderBy('id', 'ASC')->get();
        return view('homeblog')->withAll($all)->withPost($side);
    }

    public function show($slug)
    {

        $artikel  = Artikel::where('title', $slug)->first();


        $id   = $artikel->id;
        $side = Artikel::orderBy('id', 'ASC')->get();
        $com  = Comment::where('id_artikel', $id)->get();
        return view('read')->withAll($artikel)->withPost($side)->withCom($com);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $tag  = Tag::orderBy('nama', 'ASC')->get();
        $kate = Kategori::all();
        return view('admin.artikel.create')->withKate($kate)->withTg($tag);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $this->validate($req, [
            'title'  => 'required|max:30',
            'description' => 'required',
            'poster' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);
        
        $create                 = new Artikel;
        $create->title          = $req->title;
        $create->author         = Auth::user()->name;
        $create->description    = $req->description;
        $create->id_kategori    = $req->kategori;
        $create->id_user        = Auth::user()->id;


        // Upload Gambar
        $file = $req->file('poster');

        $filename = $file->getClientOriginalName();
        $req->file('poster')->move('poster/','blogger'.$filename);
        $create->poster = 'blogger'.$filename;

        $create->save();

        
        $create->tag()->sync($req->tag, false);
        return redirect()->route('home');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $get  = Artikel::find($id);
        $kate = Kategori::all();
        $tg  = Tag::pluck('nama','id')->all();
        return view('admin.artikel.edit')->withGet($get)->withKate($kate)->withTg($tg);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $this->validate($req, [
            'title'  => 'required|max:30',
            'description' => 'required',
            'poster' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);

        $update                 = Artikel::find($req->id);
        $update->title          = $req->title;
        $update->author         = Auth::user()->name;
        $update->description    = $req->description;
        $update->id_kategori    = $req->kategori;

        $file = $req->file('poster');
        if(!$file)
        {
            $update->update();
            $update->tag()->sync($req->tag);
            return redirect()->route('home');    

        }else{

            $filename = $file->getClientOriginalName();
            $req->file('poster')->move('poster/','blogger'.$filename);
            $update->poster = 'blogger'.$filename;

            $update->update();
            $update->tag()->sync($req->tag);
            return redirect()->route('home');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        
        $del = Artikel::find($id);
        $del->delete();
        return back();

    }


    public function ujiLevel()
    {
        
        $nama = array('Kevin','Trickas','Zirac');

        $index = array(

                    array('Kevin','Indonesian'),
                    array('Trickas','Japan'),
                    array('Zirac','Canada'),

                 );



        sort($nama);
        $count = count($nama);

        echo "Sorting Array";
        echo "<br>";
        for($i = 0; $i<$count; $i++){
            echo $nama[$i];
            echo "<br>";
        }
        echo "<br>";

        echo "Array 1 Dimensi";
        echo "<br>";
        echo $nama[0];
        echo "<br>";
        echo "Array 2 Dimensi";
        echo "<br>";
        echo $index[0][1];

        
    }



}
