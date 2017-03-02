<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <meta name="author" content="xuongkhophn.net">
    <meta property="og:site_name" content="xuongkhophn.net">
    <meta property="og:type" content="website">
    @yield('keyword')
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting_web['web_avatar']) }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-footer.css') }}">
	@yield('css')
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/desktop/index.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/desktop/desktop.js') }}"></script>
	@yield('js')
</head>
<body>
    <header>
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					<div class="text-container-center">
						<div>
							<div class="bg"></div>
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/images/desktop/header-1.png') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="flex1col1">
					<div class="text-container-center">
						<img src="{{ asset('public/images/desktop/header-2.png') }}" alt="">
					</div>
				</div>
				<div class="flex1col1">
					<div class="text-container-center">
						<a href="tel:0911.501.709">
							<img src="{{ asset('public/images/desktop/header-3.png') }}" alt="">
						</a>
					</div>
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
														<a href="{{ MyAPI::getUrlTerm(1) }}">Khoa cột sống</a>
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
													<a href="{{ MyAPI::getUrlTerm(4) }}">Thoát vị đã đệm đốt sống lưng</a>
													<a href="{{ MyAPI::getUrlTerm(5) }}">Hẹp ống ống</a>
												</div>
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTerm(2) }}">Bệnh đốt sống cổ</a>
													<a href="{{ MyAPI::getUrlTerm(3) }}">Bệnh đốt sống lưng</a>
												</div>
												<div class="flex6col1">
												</div>
											</div>
										</div>
										<div class="khung-content-khoa">
											<div class="flex flex5 justify-content-between">
												<div class="flex5col1">
													<div class="text-container-center" style="height: 100%;">
														<a href="{{ MyAPI::getUrlTerm(6) }}">Khoa xương khớp </a>
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
													<a href="{{ MyAPI::getUrlTerm(7) }}">Viêm khớp gối </a>
													<a href="{{ MyAPI::getUrlTerm(8) }}">Viêm quanh khớp vai </a>
												</div>
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTerm(10) }}">Viêm màng bao hoạt dịch</a>
													<a href="{{ MyAPI::getUrlTerm(11) }}">Hoại tử chỏm xương đùi</a>
												</div>
												<div class="flex6col1">
												</div>
											</div>
										</div>
										<div class="khung-content-khoa">
											<div class="flex flex5 justify-content-between">
												<div class="flex5col1">
													<div class="text-container-center" style="height: 100%;">
														<a href="{{ MyAPI::getUrlTerm(13) }}">Khoa dây thần kinh cột sống</a>
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
													<a href="{{ MyAPI::getUrlTerm(14) }}">Đau cổ vai lưng chân</a>
													<a href="{{ MyAPI::getUrlTerm(15) }}">Viêm cơ mạc</a>
												</div>
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTerm(16) }}">Đau thần kinh tọa</a>
													<a href="{{ MyAPI::getUrlTerm(19) }}">Đau gót chân</a>
												</div>
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTerm(17) }}">Chứng loãng xương</a>
													<a href="{{ MyAPI::getUrlTerm(18) }}">Gai xương</a>
												</div>
											</div>
										</div>
										<div class="khung-content-khoa">
											<div class="flex flex5 justify-content-between">
												<div class="flex5col1">
													<div class="text-container-center" style="height: 100%;">
														<a href="{{ MyAPI::getUrlTerm(20) }}">Ngoại khoa tay chân</a>
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
													<a href="{{ MyAPI::getUrlTerm(21) }}">Viêm bao gân</a>
													<a href="{{ MyAPI::getUrlTerm(22) }}">Viêm gân gót chân</a>
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
														<a href="{{ MyAPI::getUrlTerm(23) }}">Khoa thấp khớp</a>
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
													<a href="{{ MyAPI::getUrlTerm(24) }}">Viêm khớp dạng thấp</a>
													<a href="{{ MyAPI::getUrlTerm(25) }}">Viêm khớp phong thấp</a>
												</div>
												<div class="flex6col1">
													<a href="{{ MyAPI::getUrlTerm(27) }}">Viêm cột sống dính khớp</a>
													<a href="{{ MyAPI::getUrlTerm(26) }}">Gout</a>
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
					<h3 class="text-container-center"><a class="text-container-center" href="{{ url('/') }}">Trang chủ</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center"><a class="text-container-center" href="{{ MyAPI::getUrlPost(3) }}">Giới thiệu <br>phòng khám</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center"><a class="text-container-center" href="{{ MyAPI::getUrlTerm(28) }}">Kỹ thuật <br>chuyên nghiệp</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center"><a class="text-container-center" href="{{ MyAPI::getUrlTerm(29) }}">Trường hợp<br> hồi phục</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center"><a class="text-container-center" href="{{ MyAPI::getUrlPost(2) }}">Địa chỉ <br>phòng khám</a></h3>
				</div>
				<div class="flex1col1">
					<h3 class="text-container-center"><a class="text-container-center" href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đặt hẹn <br>trực tuyến</a></h3>
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
							Phòng khám đa khoa Nhân Ái <br>Hà Nội
						</a>
					</h3>
				</div>
				<div class="flex1col2">
					<p>
						Thời gian làm việc của phòng khám <br>
						( 8:00 -20:00) bao gồm cả ngày lễ tết 
					</p>
					<p>	 
						Địa chỉ : <a href="{{ MyAPI::getUrlPost(2) }}">709 Giải Phóng - Hoàng Mai - Hà Nội</a>
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
					<h4>Việt Nam . Hà Nội . NHÂN Ái</h4>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
