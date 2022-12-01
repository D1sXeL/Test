<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
	public function DB()
	{   
        /*$delete = DB::delete('delete from users where id = ?', [8]);*/
        /*$update = DB::update('update users set name = "ОваБуин", surname = "бу" where id = ?', [5]);*/
        $select = DB::select('select * from users where age >= ?', [18]);
        /*$insert = DB::insert('insert into users (name, surname, age) values(?, ?, ?)', ['Кто-то', 'Кто-тович', 22]);
        $insert1 = DB::insert('insert into users (name, surname, age) values(?, ?, ?)', ['Иван', 'Иванов', 18]);*/
        return $select;
    }

    public function DBTest()
    {
        // $data = DB::table('employees')->select('name', 'salary')->get();
        // $data = DB::table('employees')->where('salary', '!=' , 500)->get();
        // $data = DB::table('employees')->where('salary', '>' , 400)->orWhere('id', '>', 4)->get();
        // $data = DB::table('employees')->pluck('name');
        // $data = DB::table('employees')->whereBetween('salary', [450, 1100])->get(); //whereNotBetween('salary', [450, 1100]); //whereIn, //whereNotIn
        // $data = DB::table('employees')->where('id', '<=', 3)->whereOr(function ($query){
        //     $query->whereBetween('salary', [400, 800]);
        // })->get();
        // $data = DB::table('employees')->where('salary', '=', 500)->orWhere('position', '=', 'программист')->get();
        // $data = DB::table('events')->whereColumn('start', '=', 'finish')->get();
        // $data = DB::table('employees')->orderBy('birthday', 'desc')->get();
        // $data = DB::table('employees')->max('salary');
        // $data = DB::table('employees')->select('position', DB::raw('MIN(salary)'))->groupBy('position')->get(); // Задача 21.24
        // $data = DB::table('employees')->select('position', DB::raw('SUM(salary)'))->groupBy('position')->get(); // Задача 21.25
        // DB::table(...)->union($data) Слияние запросов
        // $data = DB::table('employees')->whereDate('birthday', '1988-03-25')->get();
        // $data = DB::table('employees')->whereDay('birthday', '25')->get();
        // $data = DB::table('employees')->whereMonth('birthday', '3')->get();
        $data = DB::table('employees')->whereYear('birthday', '1990')->get();
        return view('test.database', ['data'=>$data]);
    }

    public function DBtest3()
    {
        // DB::table('users')->insert(['name'=>'a', 'password'=>'b', 'email'=>'c']);
        // DB::table('users')->where('id', 4)->update(['name'=>'b']);
        DB::table('users')->where('id', 4)->delete();
        // return view('test.database3', ['data'=>$data]);
    }

    public function DBtest4()
    {
        $data = DB::table('productCategory')->join('categories', 'categories.id', '=', 'category_id')->join('products', 'products.id', '=', 'product_id')->select('categories.name as CategoryName', 'products.name as ProductName')->get();
        return view('test.database4', ['data'=>$data]);
    }
}