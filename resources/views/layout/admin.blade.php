@extends('layout.main')
@section('menu')
	@include($data['menu'],['data' => $data])
@endsection('menu')

@section('content')
	@include($data['blade'],['data' => $data])
@endsection('content') 

@section('menuNavLeft')
	@include($data['menu'])
@endsection('menuNavLeft')