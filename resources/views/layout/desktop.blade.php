<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <meta name="author" content="{{ url('/') }}">
    <meta property="og:site_name" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    @yield('keyword')
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/hover/css/hover.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/desktop/right.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/desktop/swt.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/desktop/desktop.js') }}"></script>
	@yield('js')
</head>
<body>
    <header>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1 flex flex2 justify-content-between">
					<div class="flex2col1 flex align-items-center justify-content-center">
						<div><h2><a href="{{ url('/') }}"><img src="{{ asset('public/images/desktop/logo.png') }}" alt=""></a></h2></div>
					</div>
					<div class="flex2col2 flex align-items-center justify-content-center">
						<div>
							<h2 class="text-uppercase"><a href="{{ MyAPI::getUrlPostID(3) }}">Phòng khám đa khoa nhân việt</a></h2>
							<h3 class="text-uppercase"><a href="{{ url('/') }}">Khoa xương khớp</a></h3>
							<h5><a href="{{ MyAPI::getUrlPostID(2) }}">Địa chỉ: 708 Giải Phóng - Hoàng Mai - Hà Nội</a></h5>
						</div>
					</div>
				</div>
				<div class="flex1col1 flex flex3 justify-content-center align-items-center">
					<div class="flex3col1">
						<h3>Nhân Việt . Hà Nội . Việt Nam</h3>
					</div>
				</div>
				<div class="flex1col1">
					<div class="flex flex4 justify-content-end">
						<div class="flex4col1">
							<h3><a href="tel:0911.501.709"><i class="fa fa-whatsapp"></i></a></h3>
						</div>
						<div class="flex4col2">
							<h3><a href="tel:0436 241 999">0436 241 999</a></h3>
							<h3><a href="tel:0911 501 709">0911 501 709</a></h3>
						</div>
					</div>
					<h5><a href="{{ MyAPI::getUrlPostID(2) }}">( 8:00 - 20:00) bao gồm cả ngày lễ tết</a></h5>
				</div>
			</div>
		</div>
	</header>
    <menu>
		<div class="container">
			<div class="flex flex1">
				<div class="flex1col1 chidanbenh">
					<h3 class="text-container-center"><a class="text-container-center" href="#">Chỉ dẫn bệnh</a></h3>
					<div class="menu-items">
						<div class="menu-item">
							<h4>Khoa xương khớp</h4>
							<div class="item">
								<div class="khung">
									<div class="khung-opacity">
									</div>
									<div class="khung-content">
										<div class="khung-content-khoa">
											<div class="flex flex5 justify-content-between">
												<div class="flex5col1">
													<div class="text-container-center" style="height: 100%;">
														Khoa cột sống
													</div>
												</div>
												<div class="flex5col2">
													<div class="text-container-center" style="height: 100%;">
														<div>
															Đã thống kê có <span>5265</span><br> cuộc tư vấn với <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">bác sĩ qua mạng</a>
														</div>
													</div>
												</div>
											</div>
											<div class="flex flex6 justify-content-between">
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTermID(4) }}">Thoát vị đã đệm đốt sống lưng</a>
													<a href="{{ MyAPI::getUrlTermID(5) }}">Hẹp ống sống</a>
												</div>
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTermID(2) }}">Bệnh đốt sống cổ</a>
													<a href="{{ MyAPI::getUrlTermID(3) }}">Bệnh đốt sống lưng</a>
												</div>
												<div class="flex6col1">
												</div>
											</div>
										</div>
										<div class="khung-content-khoa">
											<div class="flex flex5 justify-content-between">
												<div class="flex5col1">
													<div class="text-container-center" style="height: 100%;">
														Khoa xương khớp
													</div>
												</div>
												<div class="flex5col2">
													<div class="text-container-center" style="height: 100%;">
														<div>
															Đã thống kê có <span>4985</span><br> cuộc tư vấn với <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">bác sĩ qua mạng</a>
														</div>
													</div>
												</div>
											</div>
											<div class="flex flex6 justify-content-between">
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTermID(7) }}">Viêm khớp gối </a>
													<a href="{{ MyAPI::getUrlTermID(8) }}">Viêm quanh khớp vai </a>
												</div>
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTermID(10) }}">Viêm màng bao hoạt dịch</a>
													<a href="{{ MyAPI::getUrlTermID(11) }}">Hoại tử chỏm xương đùi</a>
												</div>
												<div class="flex6col1">
												</div>
											</div>
										</div>
										<div class="khung-content-khoa">
											<div class="flex flex5 justify-content-between">
												<div class="flex5col1">
													<div class="text-container-center" style="height: 100%;">
														Khoa dây thần kinh cột sống
													</div>
												</div>
												<div class="flex5col2">
													<div class="text-container-center" style="height: 100%;">
														<div>
															Đã thống kê có <span>5865</span><br> cuộc tư vấn với <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">bác sĩ qua mạng</a>
														</div>
													</div>
												</div>
											</div>
											<div class="flex flex6 justify-content-between">
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTermID(14) }}">Đau cổ vai lưng chân</a>
													<a href="{{ MyAPI::getUrlTermID(15) }}">Viêm cơ mạc</a>
												</div>
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTermID(16) }}">Đau thần kinh tọa</a>
													<a href="{{ MyAPI::getUrlTermID(19) }}">Đau gót chân</a>
												</div>
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTermID(17) }}">Chứng loãng xương</a>
													<a href="{{ MyAPI::getUrlTermID(18) }}">Gai xương</a>
												</div>
											</div>
										</div>
										<div class="khung-content-khoa">
											<div class="flex flex5 justify-content-between">
												<div class="flex5col1">
													<div class="text-container-center" style="height: 100%;">
														Ngoại khoa tay chân
													</div>
												</div>
												<div class="flex5col2">
													<div class="text-container-center" style="height: 100%;">
														<div>
															Đã thống kê có <span>7815</span><br> cuộc tư vấn với <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">bác sĩ qua mạng</a>
														</div>
													</div>
												</div>
											</div>
											<div class="flex flex6 justify-content-between">
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTermID(21) }}">Viêm bao gân</a>
													<a href="{{ MyAPI::getUrlTermID(22) }}">Viêm gân gót chân</a>
												</div>
												<div class="flex6col1">
												</div>
												<div class="flex6col1">
												</div>
											</div>
										</div>
										<div class="khung-content-khoa">
											<div class="flex flex5 justify-content-between">
												<div class="flex5col1">
													<div class="text-container-center" style="height: 100%;">
														Khoa thấp khớp
													</div>
												</div>
												<div class="flex5col2">
													<div class="text-container-center" style="height: 100%;">
														<div>
															Đã thống kê có <span>6895</span><br> cuộc tư vấn với <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">bác sĩ qua mạng</a>
														</div>
													</div>
												</div>
											</div>
											<div class="flex flex6 justify-content-between">
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTermID(24) }}">Viêm khớp dạng thấp</a>
													<a href="{{ MyAPI::getUrlTermID(25) }}">Viêm khớp phong thấp</a>
												</div>
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTermID(27) }}">Viêm cột sống dính khớp</a>
													<a href="{{ MyAPI::getUrlTermID(26) }}">Gout</a>
												</div>
												<div class="flex6col1">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center hvr-fade"><a class="text-container-center" href="{{ url('/') }}">Trang chủ</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center hvr-fade"><a class="text-container-center" href="{{ MyAPI::getUrlPostID(3) }}">Giới thiệu <br>phòng khám</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center hvr-fade"><a class="text-container-center" href="{{ MyAPI::getUrlTermID(28) }}">Kỹ thuật <br>chuyên nghiệp</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center hvr-fade"><a class="text-container-center" href="{{ MyAPI::getUrlTermID(29) }}">Trường hợp<br> hồi phục</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center hvr-fade"><a class="text-container-center" href="{{ MyAPI::getUrlPostID(2) }}">Địa chỉ <br>phòng khám</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center hvr-fade"><a class="text-container-center" href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đặt hẹn <br>trực tuyến</a></h3>
				</div>
			</div>
		</div>
	</menu>
	@yield('content')
	<footer>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<h3 style="text-transform: uppercase;">
						<a href="{{ url('/') }}">
							<img src="{{ asset('public/images/desktop/logo-footer.png') }}" class="center-block">
							Phòng khám đa khoa Nhân Việt <br>Hà Nội
						</a>
					</h3>
				</div>
				<div class="flex1col2">
					<p>
						Thời gian làm việc của phòng khám <br>
						( 8:00 -20:00) bao gồm cả ngày lễ tết 
					</p>
					<p>	 
						Địa chỉ : <a href="{{ MyAPI::getUrlPostID(2) }}">708 Giải Phóng - Hoàng Mai - Hà Nội</a>
					</p>
					<p class="phone-footer">
						Điện thoại liên hệ : <br>
						<a href="tel:0436 241 999">0436 241 999</a> - 
						<a href="tel:0911 501 709">0911 501 709</a>
					</p>
					<p>
						<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">[Tra cứu thông tin về lộ trình ]</a>
					</p>
				</div>
				<div class="flex1col3">
					<h4>Hiệu quả đến từ sự chuyên nghiệp</h4>
					<h4>NHÂN VIỆT . Hà Nội . Việt Nam</h4>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
