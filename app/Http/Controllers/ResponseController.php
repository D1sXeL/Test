<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ResponseController extends Controller
{
	public function responseTest()
	{
		return response('error', 200)->header('X-Header-One', 'Header Value')->header('Content-Type', 'text/plain')->header('X-Header-Two', 'Header Value');
	}

	public function responseBlade()
	{
		return response()->view('test.response')->header('Content-Type', 'text/plain');
	}
}