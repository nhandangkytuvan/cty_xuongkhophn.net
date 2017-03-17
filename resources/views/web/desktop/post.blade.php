@extends('layout.desktop')
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
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-post.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
@endsection('css')
@section('content')
<div class="baner">
	<div><img src="{{ asset('public/images/desktop/banner-nho.png') }}" alt="" class="center-block"></div>
</div>
<main class="container benhchinh">
	<div class="crub">
		<i></i><a href="{{ url('/') }}">Trang chủ ></a>
		@if($data['post']->term)
		@php $term = $data['post']->term @endphp
		<a href="{{ url($term->term_alias.'/'.$term->id) }}">{{ $term->term_name }}</a>
		@endif
	</div>
	<div class="flex flex1 justify-content-between">
		<div class="flex1col1">
			<h1 class="post-name">{{ $data['post']->post_name }}</h1>
			<div class="post-detail">
				{!! $data['post']->post_detail !!}
			</div>
			<div class="post-footer">
				<p>
					<span style="color: red;"><strong>Nhắc nhở:</strong></span> Phần lớn bệnh nhân không coi trọng việc điều trị, việc xem nhẹ rất có thể gây ra những nguy hại dẫn tới tình trạng bệnh ngày một nặng thêm. Nếu bạn có bất kể điều gì nghi vấn, hoan nghênh bạn click để <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&amp;lng=en"  style="color: red;"><strong>tư vấn giao lưu trực tuyến</strong></a>. hoặc gọi điện đường dây nóng <a href="tel:0436.241.999"  style="color: red;"><strong>0436.241.999</strong></a> - <a href="tel:0911.501.709"  style="color: red;"><strong>0911.501.709</strong></a> để được tư vấn.
				</p>
				<div class="datkhambenh flex justify-content-between">
					<div>
						<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&amp;lng=en" class="btn btn-primary">
							Tư vấn trực tuyến 
							<i class="fa fa-angle-double-right" aria-hidden="true"></i>
						</a>
					</div>
					<div>
						<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&amp;lng=en" class="btn btn-danger">
							Đặt mã số khám ưu tiên  
							<i class="fa fa-angle-double-right" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
			@php 
				$term = $data['post']->term;
				$posts = $term->post()->where('id','<>',$data['post']->id)->limit(5)->get();
			@endphp
			@if(count($posts))
			<div class="posts-lienquan">
				<h4>Người bệnh lên quan tâm</h4>
				<ul>
					@foreach($posts as $post)
					<li><a href="{{ MyAPI::getUrlPost($post->id) }}">{{ $post->post_name }}</a></li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
		<div class="flex1col2">
			@include('web.desktop.slidebar',['data'=>$data])
		</div>
	</div>
</main>
@endsection('content')