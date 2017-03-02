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
		<a href="{{ url($term_parent->term_alias.'/'.$term_parent->id) }}">{{ $term_parent->term_name }} ></a>
		@endif
		<a href="#">{{ $data['term']->term_name }}</a>
	</div>
	<div class="flex flex1 justify-content-between">
		<div class="flex1col1">
			<div class="benhprimary">
				<div>
					<h3 class="clearfix">
						<a href="#" class="pull-left">{{ $data['term']->term_name }}</a>
						<a href="" class="pull-right"><i class="fa fa-comments" aria-hidden="true"></i> Tư vấn trực tuyến</a>
					</h3>
				</div>
			</div>
			<div class="benhnormal" style="border-top: none;padding-top: 0px;">
				<div class="flex flex3">
					<div class="flex3col1">
						<a href="">
							<img src="{{ asset('public/images/desktop/baiviet-1.jpg') }}" class="">
						</a>
					</div>
					<div class="flex3col2">
						<h3><a href=""></a>Nguyên nhân gây thoái hóa đốt sống cổ</h3>
						<p>
							Viêm khớp phong thấp rất dễ tái phát nhiều lần, người bệnh thường có triệu chứng sưng tấy, đau nhức khớp, người bị nặng có thể bị tàn phế, thậm chí ảnh hưởng đến tim. Bệnh này thời kì đầu khó chẩn đoán... <a href="">【Xem thêm】</a>
						</p>
						<p class="clearfix">
							<a href="" class="pull-right">Bác sĩ tư vấn <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							<a href="" class="pull-right">Trả lời trực tuyến <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</p>
					</div>
				</div>
			</div>
			<div class="benhnormal">
				<div class="flex flex3">
					<div class="flex3col1">
						<a href="">
							<img src="{{ asset('public/images/desktop/baiviet-1.jpg') }}" class="">
						</a>
					</div>
					<div class="flex3col2">
						<h3><a href=""></a>Nguyên nhân gây thoái hóa đốt sống cổ</h3>
						<p>
							Viêm khớp phong thấp rất dễ tái phát nhiều lần, người bệnh thường có triệu chứng sưng tấy, đau nhức khớp, người bị nặng có thể bị tàn phế, thậm chí ảnh hưởng đến tim. Bệnh này thời kì đầu khó chẩn đoán... <a href="">【Xem thêm】</a>
						</p>
						<p class="clearfix">
							<a href="" class="pull-right">Bác sĩ tư vấn <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							<a href="" class="pull-right">Trả lời trực tuyến <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</p>
					</div>
				</div>
			</div>
			<div class="benhnormal">
				<div class="flex flex3">
					<div class="flex3col1">
						<a href="">
							<img src="{{ asset('public/images/desktop/baiviet-1.jpg') }}" class="">
						</a>
					</div>
					<div class="flex3col2">
						<h3><a href=""></a>Nguyên nhân gây thoái hóa đốt sống cổ</h3>
						<p>
							Viêm khớp phong thấp rất dễ tái phát nhiều lần, người bệnh thường có triệu chứng sưng tấy, đau nhức khớp, người bị nặng có thể bị tàn phế, thậm chí ảnh hưởng đến tim. Bệnh này thời kì đầu khó chẩn đoán... <a href="">【Xem thêm】</a>
						</p>
						<p class="clearfix">
							<a href="" class="pull-right">Bác sĩ tư vấn <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
							<a href="" class="pull-right">Trả lời trực tuyến <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						</p>
					</div>
				</div>
			</div>
			<div class="my_pagination">
			  	<ul class="pagination">
			    	<li>
			      		<a href="#" aria-label="Previous">
			        		<span aria-hidden="true">&laquo;</span>
			      		</a>
			    	</li>
			    	<li  class="active"><a href="#">1</a></li>
			    	<li><a href="#">2</a></li>
			    	<li><a href="#">3</a></li>
			    	<li><a href="#">4</a></li>
			    	<li><a href="#">5</a></li>
			    	<li>
			      		<a href="#" aria-label="Next">
			        		<span aria-hidden="true">&raquo;</span>
			      		</a>
			    	</li>
			  	</ul>
			</div>
		</div>
		<div class="flex1col2">
			@include('web.desktop.slidebar',['data'=>$data])
		</div>
	</div>
</main>
@endsection('content')