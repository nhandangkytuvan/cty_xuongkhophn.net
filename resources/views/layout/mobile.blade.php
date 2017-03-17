<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <meta name="author" content="xuongkhophn.net">
    @yield('keyword')
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/flexboxgrid/css/flexboxgrid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/mobile/mobile.js') }}"></script>
	@yield('js')
</head>
<body>
	<header>
		<div class="box box1">
			<a href="{{ url('/') }}"><img src="{{ asset('public/images/mobile/header.png') }}" class="center-block img-responsive"></a>
		</div>
		<div class="box box2">
			Phòng khám Nhân Việt chúc bạn sớm khỏi bệnh
		</div>
	</header>
	<menu class="container">
		<div class="row flex1">
			<div class="col-xs-4 flex1col1">
				<div class="box"><a href="{{ url('/') }}">Trang chủ</a></div>
			</div>
			<div class="col-xs-4 flex1col1">
				<div class="box border1"><a href="{{ MyAPI::getUrlTerm(28) }}">Kỹ thuật điều trị </a></div>
			</div>
			<div class="col-xs-4 flex1col1">
				<div class="box"><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đặt mã số khám</a></div>
			</div>
			<div class="col-xs-4 flex1col1">
				<div class="box"><a href="{{ MyAPI::getUrlPost(3) }}">Giới thiệu phòng khám</a></div>
			</div>
			<div class="col-xs-4 flex1col1">
				<div class="box border1"><a href="{{ MyAPI::getUrlPost(2) }}">Địa chỉ phòng khám</a></div>
			</div>
			<div class="col-xs-4 flex1col1">
				<div class="box"><a href="{{ MyAPI::getUrlTerm(29) }}">Trường hợp hồi phục</a></div>
			</div>
		</div>
	</menu>
	<div class="banner container">
		<div class="slick-home">
			<div>
				<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">
					<img src="{{ asset('public/images/mobile/banner0.png') }}" alt="" class="center-block img-responsive">
				</a>
			</div>
		</div>
		<script>
			$('.slick-home').slick({
				autoplay: true,
					autoplaySpeed: 5000,
			});
		</script>
	</div>
	<main>
	@yield('content')	
	</main>
	<footer>
		<div class="container">
			<div class="flex flex1 justify-content-around">
				<div class="flex1col1">
					<div class="box">
						<a href="{{ url('/') }}"><img src="{{ asset('public/images/mobile/footer-logo.png') }}" class="center-block img-responsive"></a>
						<h2>Phòng khám <br>Đa khoa Nhân Việt Hà Nội</h2>
					</div>
				</div>
				<div class="flex1col2">
					<div class="box">
						<p>Thời gian làm việc của phòng khám</p> 
						<p>( 8:00 - 20:00) bao gồm cả ngày lễ tết</p>  
						<p><a href="{{ MyAPI::getUrlPost(2) }}">Địa chỉ : 708 Giải Phóng - Hoàng Mai - Hà Nội</a></p> 
						<p>Điện thoại liên hệ : </p> 
						<p style="font-size: 15px;"><a href="tel:0436.241.999">0436.241.999</a> - <a href="tel:0911.501.709">0911.501.709</a></p> 
						<p><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">[Tra cứu thông tin về lộ trình ]</a></p> 
					</div>
				</div>
			</div>
			<div class="row flex2">
				<div class="col-xs-4 flex2col1">
					<div class="flex flex3 justify-content-around">
						<div class="flex3col1"><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en"><i class="bg1"></i></a></div>
						<div class="flex3col2 text-container-center"><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Điện thoại tư vấn</a></div>
					</div>
				</div>
				<div class="col-xs-4 flex2col1 bg2">
					<div class="flex flex3 justify-content-around">
						<div class="flex3col1"><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en"><i class="bg3"></i></a></div>
						<div class="flex3col2 text-container-center"><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Tư vấn trực tuyến</a></div>
					</div>
				</div>
				<div class="col-xs-4 flex2col1">
					<div class="flex flex3 justify-content-around">
						<div class="flex3col1"><a href="{{ url('/') }}"><i class="bg4"></i></a></div>
						<div class="flex3col2 text-container-center"><a href="{{ url('/') }}">Trở về trang chủ</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script language="javascript" src="http://drt.zoosnet.net/JS/LsJS.aspx?siteid=DRT84001515&float=1&lng=en"></script>
	<div id="my_popup">
	    <p>Bác sỹ đang yêu cầu được chát với bạn</p>
	    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đồng ý</a>
	    <a class="my_popup_close">Từ chối</a>
	</div>
</body>
</html>