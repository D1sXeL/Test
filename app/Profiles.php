<?php

namespace App;

use Illuminate\Database\Eloquents\Model;

class Profiles extends Model
{
	protected $table = 'profiles';	
	public function profiles()
	{
		return $this->belongsTo('App\Users');
	}
}