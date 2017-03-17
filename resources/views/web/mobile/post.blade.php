@extends('layout.mobile')
@section('title')
	<title>{{ $data['post']->post_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
@if($data['post']->post_avatar)
<meta property="og:image" content="{{ asset('public/img/'.$data['post']->post_avatar) }}">
@else
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
@endif
<meta id="metaDescription" name="description" content="{{ $data['post']->post_description }}">
<meta id="metaKeywords" name="keywords" content="{{ $data['post']->post_keyword }}">
@endsection('keyword')
@section('css')
<link rel="stylesheet" href="{{ asset('public/font/post-detail-css.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-post.css') }}">
@endsection('css')
@section('content')
<main>
	<div class="container">
		<ol class="breadcrumb">
		  	<li><a href="{{ url('/') }}"><span class="fa fa-home"></span></a></li>
		  	@php $term = $data['post']->term @endphp
		  	<li><a href="{{ MyAPI::getUrlTerm($term->id) }}">{{ $term->term_name }}</a></li>
		</ol>
		<h1 class="post-name">{{ $data['post']->post_name }}</h1>
		<div class="content-post post-detail post-{{ $data['post']->id }}">
			{!! $data['post']->post_detail !!}
		</div>
		<p class="nhacnho" style="padding:10px;line-height: 20px;"><span style="color: red;"><strong>Nhắc nhở:</strong></span> Phần lớn bệnh nhân không coi trọng việc điều trị, việc xem nhẹ rất có thể gây ra những nguy hại dẫn tới tình trạng bệnh ngày một nặng thêm. Nếu bạn có bất kể điều gì nghi vấn, hoan nghênh bạn click để <a  style="color: red;font-weight: bold;" href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">tư vấn giao lưu trực tuyến</a>. hoặc gọi điện đường dây nóng <a href="tel:0436.241.999" style="color: red;font-weight: bold;">0436.241.999</a> - <a href="tel:0911 501 709"  style="color: red;font-weight: bold;">0911 501 709</a> để được tư vấn.</p>
		<div class="row tuvan">
			<div class="col-xs-6">
				<div class="box">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Tư vấn qua điện thoại</a>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="box" style="background-color: #F49700;">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đặt hẹn trực tuyến</a>
				</div>
			</div>
		</div>
	</div>
	@php
		$term = $data['post']->term;
		$posts = $term->post()->where('id','<>',$data['post']->id)->limit(5)->get();
	@endphp
	@if(count($posts)>0)
	<div class="container">
		<div style="background-color: #fff;height: 10px;margin: 20px auto; "></div>
		<div class="bai-lien-quan">
			<h4>Người bệnh lên quan tâm</h4>
			<ul>
				@foreach($posts as $post)
				<li class=""><a title="{{ $post->post_name }}" href="{{ MyAPI::getUrlPost($post->id) }}">{{ $post->post_name }}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
	@endif
</main>
@endsection('content')