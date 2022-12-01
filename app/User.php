<?php

namespace App;

use Illuminate\Database\Eloquents\Model;

class Users extends Model
{
	protected $table = 'Users';
	public function users()
	{
		return $this->hasOne('App\Profiles');
	}
}