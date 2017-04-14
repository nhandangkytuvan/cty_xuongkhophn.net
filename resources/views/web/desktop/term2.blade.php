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
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-term2.css') }}">
@endsection('css')
@section('content')
<div class="baner">
	<div><img src="{{ asset('public/images/desktop/banner-nho.png') }}" alt="" class="center-block"></div>
</div>
<main class="container benhchinh">
	<div class="crub">
		<i></i>
		<a href="{{ url('/') }}">Trang chủ ></a>
		@php 
			$term_parent = $data['term']->parent;
		@endphp
		@if($term_parent)
		<a href="{{ MyAPI::getUrlTermObj($term_parent) }}">{{ $term_parent->term_name }} ></a>
		@endif
		<a href="#">{{ $data['term']->term_name }}</a>
	</div>
	<div class="flex flex1 justify-content-between">
		<div class="flex1col1">
			<div class="benhprimary">
				<div>
					<h3 class="clearfix">
						<a href="#" class="pull-left">{{ $data['term']->term_name }}</a>
						<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="pull-right"><i class="fa fa-comments" aria-hidden="true"></i> Tư vấn trực tuyến</a>
					</h3>
				</div>
			</div>
			@php 
				$posts = $data['term']->post()->paginate(6);
			@endphp
			@foreach($posts as $key => $post)
			<div class="benhnormal" {{ $key==0 ? 'style="border-top: none;padding-top: 0px;"' : '' }}>
				<div class="flex flex3">
					<div class="flex3col1">
						<a href="{{ MyAPI::getUrlPostObj($post) }}">
							<img src="{{ asset('public/img/'.$post->post_avatar) }}" class="">
						</a>
					</div>
					<div class="flex3col2">
						<h3><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></h3>
						<p>{{ MyAPI::getLimitWord($post->post_description,40) }}
						<a href="{{ MyAPI::getUrlPostObj($post) }}">【Xem thêm】</a></p>
						<p class="clearfix">
							<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="pull-right">Bác sĩ tư vấn <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="pull-right">Trả lời trực tuyến <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</p>
					</div>
				</div>
			</div>
			@endforeach
			<div class="my_pagination">
				{{ $posts->links() }}
			</div>
		</div>
		<div class="flex1col2">
			@include('web.desktop.slidebar',['data'=>$data])
		</div>
	</div>
</main>
@endsection('content')