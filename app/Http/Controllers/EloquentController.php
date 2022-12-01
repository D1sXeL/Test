<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FlightTest;
use App\Http\Controllers\Controller;
use App\User;

class EloquentController extends Controller
{
	public function eloquentTest1()
	{
        $test = FlightTest::all();
        return $test;
    }

    public function eloquentTest2(Request $req)
	{
        $test = FlightTest::all();
        $editPost = $req->session()->get('editPost');
        $delPost = $req->session()->get('delPost');
        return view('test.eloquent',['data'=>$test, 'editPost'=>$editPost, 'delPost'=>$delPost]);
    }

    public function eloquentTest3($id)
    {
    	$test = FlightTest::find($id);

        $model = \App\FlightTest::findOrFail($id);

    	if($test == null)
    	{
    		return 'error';
    	}
    	else
    	{
    		return view('test.eloquent2', ['data'=>$test]);
    	}
    }

    public function eloquentTest4($order)
	{
        $test = FlightTest::orderBy($order)->get();
        return view('test.eloquent',['data'=>$test]);
    }

    public function eloquentTest5($order, $dir)
	{
        $test = FlightTest::orderBy($order, $dir)->get();
        return view('test.eloquent',['data'=>$test]);
    }

    public function newPost(Request $req)
    {
        // $data = $req->only(['title', 'desc', 'text', 'date']);
        // FlightTest::insert(['title'=>$data['title'], 'descC'=>$data['desc'], 'text'=>$data['text'], 'date'=>$data['date']]);
        if($req->isMethod('post'))
        {
            $flight = new FlightTest;
            $flight->title = $req->title;
            $flight->descC = $req->desc;
            $flight->text = $req->text;
            $flight->date = $req->date;
            $flight->save();
            return redirect('/eloquent/test/2');
        }
        else
        {
        return view('test.eloquentForm');
        }
    }
    public function editPost(Request $req)
    {
        // $data = $req->only(['title', 'desc', 'text', 'date']);
        // FlightTest::insert(['title'=>$data['title'], 'descC'=>$data['desc'], 'text'=>$data['text'], 'date'=>$data['date']]);
        if($req->isMethod('post'))
        {
            $flight = new FlightTest;
            $flight = FlightTest::find(1);
            $flight->title = $req->title;
            $flight->descC = $req->desc;
            $flight->text = $req->text;
            $flight->date = $req->date;
            $flight->save();
            return redirect('/eloquent/test/2');
        }
        else
        {
        return view('test.eloquentForm');
        }
    }
    public function editPostId(Request $req, $id)
    {
        // $data = $req->only(['title', 'desc', 'text', 'date']);
        // FlightTest::insert(['title'=>$data['title'], 'descC'=>$data['desc'], 'text'=>$data['text'], 'date'=>$data['date']]);
        $flight = new FlightTest;
        $flight = FlightTest::find($id);
        if($req->isMethod('post'))
        {
            $flight->title = $req->title;
            $flight->descC = $req->desc;
            $flight->text = $req->text;
            $flight->date = $req->date;
            $flight->save();
            $req->session()->flash('editPost', [$flight->id, $flight->title]);
            return redirect('/eloquent/test/2');
        }
        else
        {
        return view('test.eloquentEditForm', ['data'=>$flight]);
        }
    }

    public function delPostId(Request $req, $id)
    {
        $flight = new FlightTest;
        $flight = FlightTest::find($id);
        $req->session()->flash('delPost', $flight->id);
        $flight->delete();
        return redirect('/eloquent/test/2');
    }

    public function midlDel()
    {
        $posts = new FlightTest;
        $posts = FlightTest::find(4)->delete();
    }

    public function getDeletedPost()
    {
        $posts = FlightTest::onlyTrashed()->where('id', '>', '0')->get(); //onlyTrashed() withTrashed()- в запросах нет удаленных моделей //restore() восстановление удаленной статьи
        return $posts;
    }

    public function getDataUserProfiles()
    {
        null;
    }
}