@extends('layout.desktop')
@section('title')
	<title>{{ $data['post']->post_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_post',['data'=>$data])
@endsection('keyword')
@section('css')
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-pagination.css') }}">
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
		<a href="{{ MyAPI::getUrlTermObj($term) }}">{{ $term->term_name }}</a>
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
					<span>Nhắc nhở: </span>
					Nếu muốn chữa khỏi bệnh, trước tiên bệnh nhân cần có lòng tin rằng bệnh của mình có thể hồi phục. Để hiệu quả chữa trị được tốt, người bệnh hãy tích cực phối hợp và nghiêm ngặt tuân theo yêu cầu của bác sỹ điều trị thì bệnh sẽ được hồi phục nhanh chóng. Bệnh nhân khi thấy có vấn đề bất thường thì cần phải đến bệnh viện thăm khám và chữa trị kịp thời. Bệnh không thể tự khỏi khi bạn kéo dài thời gian, không kịp thời chữa trị sẽ làm cho bệnh phát triển nặng thêm. Vì vậy, bạn hãy kịp thời đi khám, kiểm tra, điều trị sớm mới là tốt.
				</p>
				<h4>Số điện thoại tư vấn : <a href="tel:0436.241.999">0436.241.999</a> - <a href="tel:0911 501 709">0911 501 709</a></h4>
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
				<h4>Người bệnh nên quan tâm</h4>
				<ul>
					@foreach($posts as $post)
					<li><a href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></li>
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