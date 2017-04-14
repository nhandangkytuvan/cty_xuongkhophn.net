@extends('layout.mobile')
@section('title')
	<title>{{ $data['post']->post_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_post',['data'=>$data])
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
		  	<li><a href="{{ MyAPI::getUrlTermObj($term) }}">{{ $term->term_name }}</a></li>
		</ol>
		<h1 class="post-name">{{ $data['post']->post_name }}</h1>
		<div class="content-post post-detail post-{{ $data['post']->id }}">
			{!! $data['post']->post_detail !!}
		</div>
		<div class="post-footer">
			<p>
				<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">
					<img src="{{ asset('public/images/mobile/nhacnho.png') }}" class="center-block img-responsive">
				</a>
			</p>
			<p>
				<span>Nhắc nhở: </span>
				Nếu muốn chữa khỏi bệnh, trước tiên bệnh nhân cần có lòng tin rằng bệnh của mình có thể hồi phục. Để hiệu quả chữa trị được tốt, người bệnh hãy tích cực phối hợp và nghiêm ngặt tuân theo yêu cầu của bác sỹ điều trị thì bệnh sẽ được hồi phục nhanh chóng. Bệnh nhân khi thấy có vấn đề bất thường thì cần phải đến bệnh viện thăm khám và chữa trị kịp thời. Bệnh không thể tự khỏi khi bạn kéo dài thời gian, không kịp thời chữa trị sẽ làm cho bệnh phát triển nặng thêm. Vì vậy, bạn hãy kịp thời đi khám, kiểm tra, điều trị sớm mới là tốt.
			</p>
			<h4>Số điện thoại tư vấn : <a href="tel:0436.241.999">0436.241.999</a> - <a href="tel:0911 501 709">0911 501 709</a></h4>
		</div>
		<div class="tuvan flex justify-content-between">
			<div class=" flex align-items-center justify-content-center">
				<h3>
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Tư vấn qua điện thoại</a>
				</h3>
			</div>
			<div class=" flex align-items-center justify-content-center">
				<h3>
					<a style="background-color: #F49700;" href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đặt hẹn trực tuyến</a>
				</h3>
			</div>
		</div>
	</div>
	@php
		$term = $data['post']->term;
		$posts = $term->post()->where('id','<>',$data['post']->id)->limit(5)->get();
	@endphp
	@if(count($posts)>0)
	<div class="container">
		<div class="bai-lien-quan">
			<h4>Người bệnh nên quan tâm</h4>
			<ul>
				@foreach($posts as $post)
				<li class=""><i class="fa fa-caret-right" aria-hidden="true"></i> <a title="{{ $post->post_name }}" href="{{ MyAPI::getUrlPostObj($post) }}">{{ $post->post_name }}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
	@endif
</main>
@endsection('content')