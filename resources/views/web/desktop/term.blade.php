@extends('layout.desktop')
@section('title')
	<title>{{ $data['term']->term_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_term',['data'=>$data])
@endsection('keyword')
@section('css')
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-pagination.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-term.css') }}">
@endsection('css')
@section('content')
<div class="baner">
	<div><img src="{{ asset('public/images/desktop/banner-nho.png') }}" alt="" class="center-block"></div>
</div>
<main class="container benhchinh">
	<div class="crub">
		<i></i><a href="{{ url('/') }}">Trang chủ ></a><a href="#">{{ $data['term']->term_name }}</a>
	</div>
	<div class="flex flex1 justify-content-between">
		<div class="flex1col1">
			@php 
				$term_childs = $data['term']->children;
			@endphp
			@foreach($term_childs as $term_child)
			<div class="benhprimary">
				<div>
					<h3 class="clearfix">
						<a href="{{ MyAPI::getUrlTermObj($term_child) }}" class="pull-left">{{ $term_child->term_name }}</a>
						<a href="{{ MyAPI::getUrlTermObj($term_child) }}" class="pull-right">+ Xem thêm</a>
					</h3>
					<div class="flex flex3">
						@php 
							$posts = $term_child->post()->limit(4)->get();
						@endphp
						@if(count($posts)>0)
						<div class="flex3col1">
							<a href="{{ MyAPI::getUrlPostObj($posts[0]) }}">
								<img src="{{ asset('public/img/'.$posts[0]->post_avatar) }}" class="">
							</a>
						</div>
						<div class="flex3col2">
							<ul>
								@foreach($posts as $post)
								<li><a href="{{ MyAPI::getUrlPostObj($post) }}" title="{{ $post->post_name }}">{{ $post->post_name }}</a></li>
								@endforeach
							</ul>
						</div>
						@endif
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="flex1col2">
			@include('web.desktop.slidebar',['data'=>$data])
		</div>
	</div>
</main>
@endsection('content')