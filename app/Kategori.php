<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    
	protected $table = 'kategoris';

	public function artikel()
	{
		return $this->hasMany('App\Artikel');
	}

}
