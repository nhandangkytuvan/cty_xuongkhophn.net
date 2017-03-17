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
			<div style="text-align: center;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.1104763899693!2d105.83899591548588!3d20.988208186020344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac6884bcff95%3A0x7f13d52db6cfd04b!2zNzA4IEdp4bqjaSBQaMOzbmcsIEdpw6FwIELDoXQsIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2sus!4v1489465724699" width="90%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
					
				</iframe>
			</div>
			<div style="text-align: center;">
				<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" style="display: inline-block;" style="margin-right: 10px;">
					<img src="{{ asset('public/images/desktop/diachi-1.gif') }}" alt="">
				</a>
				<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" style="display: inline-block;">
					<img src="{{ asset('public/images/desktop/diachi-2.gif') }}" alt="">
				</a>
			</div>
			<hr>
			<div class="clearfix">
				<div style="width: 30%;margin-right: 10px;float: left;">
					<img src="{{ asset('public/images/desktop/diachi-3.gif') }}" style="width: 100%;">
				</div>
				<div style="width: 67%;float: right;">
					<p style="margin-top: 10px;color: #333333;">
						<span> I.Chỉ dẫn đường đi đến phòng khám Nhân Việt Hà Nội?<br></span>
						<span> 1.Phòng khám cách bến xe Giáp Bát 800m, nằm cùng phía với bến xe, đi về hướng nội thành; đối diện siêu thị Thành Đô.</span>
					</p>
				</div>
			</div>
			<hr>
			<div class="clearfix">
				<div style="width: 30%;margin-right: 10px;float: left;">
					<img src="{{ asset('public/images/desktop/diachi-4.gif') }}" style="width: 100%;">
				</div>
				<div style="width: 67%;float: right;">
					<p style="margin-top: 10px;color: #333333;">
						<span> II..Chỉ dẫn đến phòng khám Nhân Việt Hà Nội, nếu đi bằng taxi?<br></span>
					</p>
					<img src="{{ asset('public/images/desktop/diachi-5.gif') }}" style="width: 100%;">
				</div>
			</div>
			<hr>
			<div class="clearfix">
				<div style="width: 30%;margin-right: 10px;float: left;">
					<img src="{{ asset('public/images/desktop/diachi-6.gif') }}" style="width: 100%;">
				</div>
				<div style="width: 67%;float: right;">
					<p style="margin-top: 10px;color: #333333;">
						<span>III.Chỉ dẫn đường đi đến phòng khám Nhân Việt Hà Nội bằng xe bus?<br></span>
						<span>Tuyến bus đi qua phòng khám: 03 (A-B), 08, 16 (A,B), 21, 25, 28, 32, 41. Sau đó từ trạm xe bus đi bộ khoảng 200m.</span>
					</p>
				</div>
			</div>
			<hr>
			<div class="huong-dan">
				<label for="">Hướng dẫn đặt hẹn trên mạng：</label>
				<ol style="list-style-type:decimal;">
					<li>Hãy ghi rõ nội dung đặt hẹn, nếu không thể tự phán đoán nên chọn khám tại khoa nào, có thể để lại tin nhắn, miêu tả rõ tình trạng bệnh của bạn.</li>
					<li>Phòng khám Nhân Việt Hà Nội sẽ liên hệ với bạn trong 12 tiếng đồng hồ, có thể xác định giúp bạn về thời gian chẩn đoán, khoa khám, bác sỹ cũng như phiếu khám bệnh.</li>
					<li>Khi bạn đến phòng khám để thăm khám bệnh, hãy thông báo tên cho y tá ở dưới tầng 1 mã hẹn khám trên mạng. Y tá có thể sắp xếp để bạn có thể được thăm khám trước, tránh tình trạng chờ đợi mất thời gian.</li>
				</ol>
			</div>
			<div class="huong-dan">
				<label for="">Đặt hẹn, phương pháp điều trị：</label>
				<ol style="list-style-type:decimal;">
					<li>Hãy điền hiệu quả thông tin liên hệ, để phòng khám có thể kịp thời sắp xếp bác sỹ tiến hành thăm khám cho bạn.</li>
					<li>Các bác sỹ làm ngoài giờ sẽ căn cứ theo thông tin liên lạc của bạn để liên hệ, xác định và sắp xếp thời gian điều trị cho bạn.</li>
					<li>Có thể đến đại sảnh của phòng khám để thông báo mã khám của bạn trong ngày.</li>
					<li>Được các y tá hướng dẫn thăm khám tận nơi.</li>
				</ol>
			</div>
			<div class="huong-dan">
				<label for="">Khuyến cáo：</label>
				<ol style="list-style-type:decimal;">
					<li> Đặt lịch hẹn trên mạng không mất phí, chủ yếu giúp cho bệnh nhân có thể kịp thời điều trị, đẩm bảo đời tư cho bệnh nhân, những thông tin cần điền ở trên mạng chỉ giúp cho việc đặt hẹn khám dễ ràng hơn, không sử dụng cho mục đích khác; sau khi thăm khám, không lưu giữ hồ sơ của bệnh nhân.</li>
					<li>Hãy ghi nhớ mã hẹn khám của bạn, đây chính là cơ sở căn cứ cho việc đã đặt hẹn trên mạng.</li>
				</ol>
			</div>
			<style>
				.huong-dan label {
				    background-color: #00ff00;
				    padding: 5px;
				}
				hr{
					margin-top: 20px;
			    	margin-bottom: 20px;
			    	border: 0;
			    	border-top: 1px solid #eeeeee;
				}
			</style>
		</div>
		<p class="nhacnho" style="padding:10px;line-height: 20px;"><span style="color: red;"><strong>Nhắc nhở:</strong></span> Phần lớn bệnh nhân không coi trọng việc điều trị, việc xem nhẹ rất có thể gây ra những nguy hại dẫn tới tình trạng bệnh ngày một nặng thêm. Nếu bạn có bất kể điều gì nghi vấn, hoan nghênh bạn click để <a  style="color: red;font-weight: bold;" href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">tư vấn giao lưu trực tuyến</a>. hoặc gọi điện đường dây nóng <a href="tel:0436.241.999" style="color: red;font-weight: bold;">0436.241.999</a> - <a href="tel:0911 501 709"  style="color: red;font-weight: bold;">0911 501 709</a> để được tư vấn.</p>
		<div class="row tuvan" style="margin-bottom: 20px;">
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
</main>
@endsection('content')