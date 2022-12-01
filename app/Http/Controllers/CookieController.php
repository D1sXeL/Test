<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie;

class CookieController extends Controller
{
	public function cookieTest(Request $req)
	{
		$currentDate = getdate();

		$formatDate = $currentDate['hours'].$currentDate['minutes'].$currentDate['seconds'];

		if($formatDate != $req->cookie('date'))
		{
			return $formatDate-$req->cookie('date');
		}
		else
		{
			Cookie::Queue('date', $formatDate);
			return 'Первый заход на сайт';
		}
	}

	public function refreshCookie(Request $req)
	{
		if($req->cookie('refresh') != 0)
		{
			$value = $req->cookie('refresh');
			$value++;
			Cookie::Queue('refresh', $value);
			return $req->cookie('refresh');
		}
		else
		{
			Cookie::Queue('refresh', 1);
			return $req->cookie('refresh');
		}
	}
}