@extends('layouts.test')

@section('main')
@parent
	{{ $main.'-'.$text }}
@endsection

@section('aside')
@parent
	{{$aside}}
@endsection

@section('title')
@parent
	{{ $title }}
@endsection



@section('header2')
@endsection

@section('footer2')
@endsection
