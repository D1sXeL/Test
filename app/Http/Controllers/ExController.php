<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExController extends Controller
{

	public function ex()
	{
		$employees = [
				[
					'name' => 'user1',
					'surname' => 'surname1',
					'salary' => 1000,
				],
				[
					'name' => 'user2',
					'surname' => 'surname2',
					'salary' => 2000,
				],
				[
					'name' => 'user3',
					'surname' => 'surname3',
					'salary' => 3000,
				],
				[
					'name' => 'user4',
					'surname' => 'surname4',
					'salary' => 4000,
				],
				[
					'name' => 'user5',
					'surname' => 'surname5',
					'salary' => 5000,
				],
			];

			$users = [
				[
					'name' => 'user1',
					'surname' => 'surname1',
					'banned' => true,
				],
				[
					'name' => 'user2',
					'surname' => 'surname2',
					'banned' => false,
				],
				[
					'name' => 'user3',
					'surname' => 'surname3',
					'banned' => true,
				],
				[
					'name' => 'user4',
					'surname' => 'surname4',
					'banned' => false,
				],
				[
					'name' => 'user5',
					'surname' => 'surname5',
					'banned' => false,
				],
			];

			$str = ["asd", "fgh", "jkl"];

		return view('test.ex', ['links'=>['text1'=>'text1', 'href1'=>'href1', 'text2'=>'text2', 'href2'=>'href2', 'text3'=>'text3', 'href3'=>'href3'], 'employees'=>$employees, 'users'=>$users, 'str'=>$str]);	
	}

	public function ex2($string)
	{
		$days = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30];
		$currentDay = 26;

		$string = explode(',', $string);
		return view('test.ex2', ['string'=>$string, 'days'=>$days, 'currentDay'=>$currentDay]);
	}

}