@php $setting_web = json_decode($data['setting']->setting_web,true) @endphp
@extends('layout.desktop')
@section('title')
	<title>{{ $data['term']->term_name }} - Khoa xương khớp - Phòng khám Nhân Ái</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting_web['web_logo']) }}">
<meta id="metaDescription" name="description" content="{{ $data['term']->term_name }}">
<meta id="metaKeywords" name="keywords" content="{{ $data['term']->term_keyword }}">
@endsection('keyword')
@section('css')
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
						<a href="{{ url($term_child->term_alias.'/'.$term_child->id) }}" class="pull-left">{{ $term_child->term_name }}</a>
						<a href="{{ url($term_child->term_alias.'/'.$term_child->id) }}" class="pull-right">+ Xem thêm</a>
					</h3>
					<div class="flex flex3">
						<div class="flex3col1">
							<a href="">
								<img src="{{ asset('public/images/desktop/baiviet-1.jpg') }}" class="">
							</a>
						</div>
						<div class="flex3col2">
							<ul>
								<li><a href="">Nguyên nhân gây thoái hóa đốt sống cổ</a></li>
								<li><a href="">Những dấu hiệu thoái hóa đốt sống cổ</a></li>
								<li><a href="">Thoái hóa đốt sống cổ, ai có nguy cơ này</a></li>
								<li><a href="">Phương pháp chữa trị bệnh viêm đốt sống cổ bằng liệu pháp hồi phục tuần hoàn kinh lạc</a></li>
							</ul>
						</div>
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