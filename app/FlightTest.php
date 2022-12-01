<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlightTest extends Model
{
	use SoftDeletes;
    protected $table = 'posts';
    protected $dates = ['deleted_at'];
    public $timestamps = false;
    
}