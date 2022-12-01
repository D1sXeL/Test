<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WebController extends Controller
{
	public function web()
	{
        return view('website.test');
    }
}