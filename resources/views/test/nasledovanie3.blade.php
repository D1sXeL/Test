@extends('layouts.test')

@section('main')
@parent
	{{ $main.' s'.$text }}
@endsection

@section('aside')
@parent
	{{$aside}}
@endsection

@section('title')
@parent
	{{ $title }}
@endsection



