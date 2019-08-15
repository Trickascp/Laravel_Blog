<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    

	protected $table = 'artikels';

	public function kategori()
	{
		return $this->belongsTo('App\Kategori', 'id_kategori');
	}


	public function komen()
	{
		return $this->hasMany('App\Comment');
	}

	public function tag()
	{
		return $this->belongsToMany('App\Tag');
	}



}
