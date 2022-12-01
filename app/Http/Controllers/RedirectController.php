<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
	public function test(Request $req)
    {
    	if ($req->isMethod('post'))
    	{
    		if ($req->input('number') >= 1 and $req->input('number') <= 9) 
    		{
	    		$text = $req->all();
	    		return redirect('redirect/test');
    		}
    		else
    		{
    			return view('test.redirect', ['error'=>1]);
    		}
    	}
    	else
    	{
    		return view('test.redirect');
    	}
    }

    public function test2()
    {
        return "win";
    }

    public function redirectEmail(Request $req)
    {
    	if ($req->isMethod('post')) 
    	{
    		return redirect('redirect/test');
    	}
    	else
    	{
    		return view('test.redirectEmail');
    	}
    }

	public function redirectName()
	{
		return redirect()->route('test');
	}

	public function redirectName2()
	{
		return "abra-kadabra";
	}

	public function redirectParam()
	{
		return redirect()->route('testParam', ['value1'=>1, 'value2'=>2]);	
	}

	public function redirectParamTest($value1, $value2)
	{
		return $value1.' '.$value2;
	}
}