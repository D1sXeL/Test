<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showOne($var1, $var2, $var3)
    {
        return view('test.show', ['name' => $var1, 'age' => $var2, 'salary' => $var3]);
    }

    public function showTwo($var1, $var2, $var3, $color)
    {
        return view('test.show', ['className' => $var1, 'style' => $var2, 'value' => $var3, 'color' => $color]);
    }

    public function showThree($city)
    {
        return view('test.show1', ["arr" => [1,2], "city" => $city]);
    }

    public function show1Three()
    {
        return view('test.show1', ["arr" => [1,2]]);
    }

    public function showFour($country, $city)
    {
        return view('test.showCountry', ["arr" => ["country" => $country, "city" => $city]]);
    }

    public function showCityFour($city)
    {
        return view('test.showCountry', ["arr" => ["city" => $city]]);
    }

    public function showCountryFour($country)
    {
        return view('test.showCountry', ["arr" => ["country" => $country]]);
    }

    public function showCountryCityFour()
    {
        return view('test.showCountry');
    }
    
    public function showBlade($text)
    {
        return view('test.show2', ["text" => $text]);
    }

    public function showIf($text)
    {
        return view('test.showIf', ["text" => $text]);
    }

    public function showIfArr($text)
    {
        return view('test.showIf', ["text" => $text]);
    }

    public function for1()
    {
        return view('test.for1', ["text" => [1, 2 ,3 ,4 ,5 ,6 ,7]]);
    }

    public function for2($text)
    {
        return view('test.for1', ["text" => $text]);
    }

    public function for3()
    {
        return view('test.for3', ["text" => [1 => 1, 2 => 2, 3 => 3]]);
    }

    public function for4($text)
    {
        return view('test.for4', ["data" => explode(",", $text)]);
    }

    public function forfor()
    {
        return view('test.forfor', ["data" => [[1,2,3,4,5],[6,7,8,9,10],[11,12,13,14,15],[16,17,18,19,20],[21,22,23,24,25]]]);
    }
    public function forEmployees()
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
    ];

        return view('test.forEmployees', ["data" => $employees]);
    }

    public function forRemaining()
    {
        return view('test.forRemaining', ["data" => [1,2,3,4,5,6,7,8,9,11,12,13,14,15,16,17,18,19,20]]);
    }
    public function nasledovanie()
    {
        return view('test.nasledovanie');
    }
    
    public function nasledovanie2($text1, $text2, $text3, $aside)
    {
        return view('test.nasledovanie', ['title' => $text1, 'main' => $text2, 'text' => $text3, 'aside' => $aside]);
    }

    public function nasledovanie3($text1, $text2, $text3, $aside)
    {
        return view('test.nasledovanie3', ['title' => $text1, 'main' => $text2, 'text' => $text3, 'aside' => $aside]);
    }

    public function form(Request $req)
    {


        if ($req->has('text')) {
            // Проверка на отправление формы
            $text = $req->text;
            return view('test.form', ['text'=>$text]);
        }
        else
        {
            return view('test.form', ['text'=>'error']);
        }
    }

    public function form2(Request $req)
    {
        if ($req->has('var1') and $req->has('var2')) {
            $var1 = $req->var1;
            $var2 = $req->var2;
            return view('test.form2', ['var1'=>$var1, 'var2'=>$var2]);
        }
        else
        {
            return view('test.form2', ['text'=>null]);
        }
    }

    public function formAction()
    {
        return view('test.formAction');
    }

    public function formActionAdd(Request $req)
    {
        return view('test.formActionAdd', ['var1'=>$req->var1, 'var2'=>$req->var2, 'var3'=>$req->var3]);
    }

    public function formActionPost()
    {
        return view('test.formActionPost');
    }

    public function formActionAddPost(Request $req)
    {
        if($req->isMethod('post')){
            return view('test.formActionAddPost', ['var1'=>$req->var1]);
        }
    }

    public function formPost(Request $req)
    {
        return view('test.formPost', ['all'=>$req->all()]);
    }

    public function formPostReg(Request $req)
    {
        return view('test.formPostReg', ['arr'=>$req->only('name', 'login')]);
    }
}