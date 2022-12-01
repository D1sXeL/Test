<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function exampleOne(Request $req)
    {
        return view('practice.exampleOne');
    }
}