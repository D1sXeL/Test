<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
	public function methodGet(Request $req)
	{
		$count = $req->session()->get('count', 1);

		$req->session()->put('count', $count+1);

		return $req->session()->get('count');
	}

	public function pushEx(Request $req)
	{
		$req->session()->push('arr','aa');

		$arr = ['asd'=>'aaaaaaaaa'];

		$req->session()->push('arr', $arr);

		$req->session()->forget('arr'); // Удаляет все данные сессии с именем arr

		return $req->session()->get('arr');
	}

	public function pullExSend(Request $req)
	{
		$req->session()->put('data', "dasdasd");
	}

	public function pullEx(Request $req)
	{
		$req->session()->flush();
		return view('test.session', ['sessionData'=>$req->session()->all()]);
	}

	public function hasEx(Request $req){
		if($req->session()->has('test'))
		{
			$req->session()->put('test', 'asdasd');
		}

		$value = session('test');

		return $value." 123 ";
	}
}