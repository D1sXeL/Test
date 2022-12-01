<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FleshController extends Controller
{
	public function flesh1(Request $req)
	{
		$req->session()->flash('key', 'abra-kada123bra');
		return redirect('fleshKey');
	}

	public function flesh2(Request $req)
	{
		if($req->session()->get('key') != null)
		{
			return $req->session()->get('key');
		}
		else
		{
			return 'error';
		}
	}

	public function fleshTest(Request $req)
	{
		if($req->has('num1'))
		{
			$req->flash();
		}

		return view('test.flesh');
	}
	
	public function fleshTest2(Request $req)
	{
		return $req->old('num1')+$req->old('num2')+$req->old('num3')+$req->old('num4')+$req->old('num5');
	}
}