@extends('layout.desktop')
@section('title')
	<title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="{{ $setting->web_description }}">
<meta id="metaKeywords" name="keywords" content="{{ $setting->web_keyword }}">
@endsection('keyword')
@section('css')
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-home.css') }}">
@endsection('css')
@section('content')
<div class="baner">
	<div class="slick-home">
		<div>
			<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">
				<img src="{{ asset('public/images/desktop/slide-01.png') }}" alt="" class="center-block img-responsive">
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
<main class="container home">
	<div class="flex flex1">
		<div class="flex1col1">
			<div class="box hvr-float-shadow">
				<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">
					Lối tắt để<br>khám bệnh 
				</a>
			</div>
		</div>
		<div class="flex1col1">
			<div class="box hvr-float-shadow">
				<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" style="background-position: -263px 0px;">
					Nhân công<br>phục vụ 
				</a>
			</div>
		</div>
		<div class="flex1col1">
			<div class="box hvr-float-shadow">
				<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" style="background-position: -538px 0px;">
					Đặt hẹn<br>qua mạng 
				</a>
			</div>
		</div>
		<div class="flex1col1">
			<div class="box hvr-float-shadow">
				<a href="{{ MyAPI::getUrlPost(2) }}" style="background-position: -801px 0px;">
					Địa chỉ<br>phòng khám 
				</a>
			</div>
		</div>
	</div>
	<div class="flex flex2 justify-content-between">
		<div class="flex2col1">
			<h2><a href="#"></a></h2>
			<div class="flex flex3 justify-content-between">
				<div class="flex3col1">
					<div>
						<h4><a href="{{ MyAPI::getUrlPost(26) }}">BỆNH GOUT 7 NĂM CỦA ÔNG, ĐÃ ĐƯỢC HỒI PHỤC TẠI PHÒNG KHÁM ĐA KHOA NHÂN ÁI</a></h4>
						<p>
							7 năm trước đây, bệnh nhân Nguyễn Mạnh Hiến xuất hiện các hiện tượng sưng đỏ, đau ở các khớp ngón tay, ngón chân. Sau khi tới viện kiểm tra, được chẩn đoán là bị gout, ban đầu dùng thuốc bắc để điều trị bệnh...
							<a href="{{ MyAPI::getUrlPost(26) }}">[Xem thêm]</a>
						</p>
					</div>
					<div>
						<h4><a href="{{ MyAPI::getUrlPost(28) }}">4 NĂM BỊ VIÊM MÀNG HOẠT DỊCH KHỚP GỐI CUỐI CÙNG ĐÃ ĐƯỢC CHỮA KHỎI</a></h4>
						<p>
							Lã Thị Lan 4 năm trước xuất hiện tình trạng bệnh đầu gối bên phải, khi đi bộ thấy có cảm giác bị cọ sát, khi đi lên xuống cầu thang sẽ có cảm giác không ổn lắm, Lan đã đi thăm khám tại bệnh viện địa phương...
							<a href="{{ MyAPI::getUrlPost(28) }}">[Xem thêm]</a>
						</p>
					</div>
				</div>
				<div class="flex3col2">
					<img src="{{ asset('public/images/desktop/home-4.png') }}" alt="">
				</div>
			</div>
		</div>
		<div class="flex2col2">
			<h2></h2>
			<a href="{{ MyAPI::getUrlPost(3) }}"><img src="{{ asset('public/images/desktop/home-3.png') }}" class="center-block"></a>
			<div class="order3">
				<h4><a href="{{ MyAPI::getUrlPost(3) }}">Giới thiệu phòng khám</a></h4>
				<p>
					Hiện nay số người mắc bệnh viêm quanh 
					khớp vai ngày càng nhiều và tỷ lệ mắc bệnh 
					tăng lên hàng năm, thậm  ... <a href="{{ MyAPI::getUrlPost(3) }}">[chi tiết]</a>
				</p>
			</div>
			<div class="flex flex4 flex-wrap-wrap justify-content-between">
				<div class="flex4col1">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">
						<i></i>
						<span>Tư vấn<br>trực tuyến</span>
					</a>
				</div>
				<div class="flex4col1">
					<a href="{{ MyAPI::getUrlPost(2) }}" class="text-container-center">
						<i style="background-position: -30px 0px;"></i>
						<span>Địa chỉ<br>phòng khám</span>
					</a>
				</div>
				<div class="flex4col1">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">
						<i style="background-position: 0px -44px;"></i>
						<span>Đặt hẹn<br>chuyên gia</span>
					</a>
				</div>
				<div class="flex4col1">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">
						<i style="background-position: -27px -46px;"></i>
						<span>Đặt mã<br>số khám</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div style="margin-top: 40px;">
		<img src="{{ asset('public/images/desktop/home-5.png') }}" class="center-block">
	</div>
	<div class="tabs-1">
		<div class="flex flex5 justify-content-between">
			<div class="flex5col1 active">
				<div class="flex flex6 justify-content-center">
					<div class="col6col1 text-container-center">
						<i></i>
					</div>
					<div class="col6col1 text-container-center">
						Viêm khớp<br>dạng thấp 
					</div>
				</div>
			</div>
			<div class="flex5col1">
				<div class="flex flex6 justify-content-center">
					<div class="col6col1 text-container-center">
						<i style="background-position: -42px 0px;"></i>
					</div>
					<div class="col6col1 text-container-center">
						Viêm cột sống<br>dính khớp 
					</div>
				</div>
			</div>
			<div class="flex5col1">
				<div class="flex flex6 justify-content-center">
					<div class="col6col1 text-container-center">
						<i style="background-position: -83px 0px;"></i>
					</div>
					<div class="col6col1 text-container-center">
						Bệnh gout
					</div>
				</div>
			</div>
			<div class="flex5col1">
				<div class="flex flex6 justify-content-center">
					<div class="col6col1 text-container-center">
						<i style="background-position: -118px 0px;"></i>
					</div>
					<div class="col6col1 text-container-center">
						Viêm khớp<br>phong thấp 
					</div>
				</div>
			</div>
			<div class="flex5col1">
				<div class="flex flex6 justify-content-center">
					<div class="col6col1 text-container-center">
						<i style="background-position: -118px 0px;"></i>
					</div>
					<div class="col6col1 text-container-center">
						Viêm màng<br>bao hoạt dịch 
					</div>
				</div>
			</div>
			<div class="flex5col1">
				<div class="flex flex6 justify-content-center">
					<div class="col6col1 text-container-center" style="padding-left: 2px;">
						<i style="background-position: -118px 0px;margin-right: 2px;"></i>
					</div>
					<div class="col6col1 text-container-center">
						Thoát vị đĩa đệm<br>đốt sống lưng 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tabs-content-1-1">
		<div class="active">
			<div class="flex flex7 justify-content-center">
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Xưng đau cổ tay</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Mệt mỏi</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Giảm cân</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Khớp biến tính</a>
				</div>
			</div>
		</div>
		<div>
			<div class="flex flex7 justify-content-center">
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đau lưng </a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Không vươn vai được </a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Chán ăn</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Khớp có tiếng cọt kẹt</a>
				</div>
			</div>
		</div>
		<div>
			<div class="flex flex7 justify-content-center">
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Khớp đau nhói </a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đầu ngón chân xưng đau nhức</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Xưng khớp</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Khớp chân tay nổi cục</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Ớn lạnh, sốt</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Axit uric quá cao</a>
				</div>
			</div>
		</div>
		<div>
			<div class="flex flex7 justify-content-center">
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đau khớp</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Xưng khớp</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Mệt mỏi</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Cử động khó khăn</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Ngồi xổm khó chịu</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đau khi gặp gió</a>
				</div>
			</div>
		</div>
		<div>
			<div class="flex flex7 justify-content-center">
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đau khớp</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Xưng khớp</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Mệt mỏi</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Cử động khó khăn</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Ngồi xổm khó chịu</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đau khi gặp gió</a>
				</div>
			</div>
		</div>
		<div>
			<div class="flex flex7 justify-content-center">
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đau khớp</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Xưng khớp</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Mệt mỏi</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Cử động khó khăn</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Ngồi xổm khó chịu</a>
				</div>
				<div class="flex7col1 text-container-center">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đau khi gặp gió</a>
				</div>
			</div>
		</div>
	</div>
	<div class="tabs-content-1-2">
		<div class="flex flex8 justify-content-center">
			<div class="flex8col1">
				<div class="flex flex9">
					<div class="flex9col1">
						<img src="{{ asset('public/images/desktop/home-6.png') }}" alt="">
					</div>
					<div class="flex9col2">
						<img src="{{ asset('public/images/desktop/jbzq5.jpg') }}" class="active">
						<img src="{{ asset('public/images/desktop/jbzq10.jpg') }}" class="">
						<img src="{{ asset('public/images/desktop/jbzq11.jpg') }}" class="">
						<img src="{{ asset('public/images/desktop/jbzq12.jpg') }}" class="">
						<img src="{{ asset('public/images/desktop/jbzq13.jpg') }}" class="">
						<img src="{{ asset('public/images/desktop/jbzq14.jpg') }}" class="">
					</div>
				</div>
			</div>
			<div class="flex8col2">
				<div class="flex8col2_topbv">
					<div class="active">
						@php 
							$term = MyAPI::getTerm(24);
							$posts = $term->post()->limit(6)->get();
						@endphp
						@if(count($posts))
						<div>
							<h3><a href="{{ MyAPI::getUrlPost($posts[0]->id) }}">{{ $posts[0]->post_name }}</a></h3>
							<p>
								{{ MyAPI::limitWord($posts[0]->post_description,25) }} >>> <a href="{{ MyAPI::getUrlPost($posts[0]->id) }}">[chi tiết]</a>
							</p>
						</div>
						<div>
							<ul>
								@php unset($posts[0]) @endphp
								@foreach($posts as $post)
								<li><a href="{{ MyAPI::getUrlPost($post->id) }}">{{ $post->post_name }}</a></li>
								@endforeach
								<!-- <li><a href="#"><span>Nguyên nhân</span> Lorem ipsum dolor sit amet</a></li>
								<li><a href="#"><span>Triệu trứng</span> Lorem ipsum dolor sit amet</a></li>
								<li><a href="#"><span>Nguy hại</span> Lorem ipsum dolor sit amet</a></li>
								<li><a href="#"><span>Điều trị</span> Lorem ipsum dolor sit amet</a></li>
								<li><a href="#"><span>Phòng tránh</span> Lorem ipsum dolor sit amet</a></li> -->
							</ul>
						</div>
						@endif
					</div>
					<div>
						@php 
							$term = MyAPI::getTerm(27);
							$posts = $term->post()->limit(6)->get();
						@endphp
						@if(count($posts))
						<div>
							<h3><a href="{{ MyAPI::getUrlPost($posts[0]->id) }}">{{ $posts[0]->post_name }}</a></h3>
							<p>
								{{ MyAPI::limitWord($posts[0]->post_description,25) }} >>> <a href="{{ MyAPI::getUrlPost($posts[0]->id) }}">[chi tiết]</a>
							</p>
						</div>
						<div>
							<ul>
								@php unset($posts[0]) @endphp
								@foreach($posts as $post)
								<li><a href="{{ MyAPI::getUrlPost($post->id) }}">{{ $post->post_name }}</a></li>
								@endforeach
							</ul>
						</div>
						@endif
					</div>
					<div>
						@php 
							$term = MyAPI::getTerm(26);
							$posts = $term->post()->limit(6)->get();
						@endphp
						@if(count($posts))
						<div>
							<h3><a href="{{ MyAPI::getUrlPost($posts[0]->id) }}">{{ $posts[0]->post_name }}</a></h3>
							<p>
								{{ MyAPI::limitWord($posts[0]->post_description,25) }} >>> <a href="{{ MyAPI::getUrlPost($posts[0]->id) }}">[chi tiết]</a>
							</p>
						</div>
						<div>
							<ul>
								@php unset($posts[0]) @endphp
								@foreach($posts as $post)
								<li><a href="{{ MyAPI::getUrlPost($post->id) }}">{{ $post->post_name }}</a></li>
								@endforeach
							</ul>
						</div>
						@endif
					</div>
					<div>
						@php 
							$term = MyAPI::getTerm(25);
							$posts = $term->post()->limit(6)->get();
						@endphp
						@if(count($posts))
						<div>
							<h3><a href="{{ MyAPI::getUrlPost($posts[0]->id) }}">{{ $posts[0]->post_name }}</a></h3>
							<p>
								{{ MyAPI::limitWord($posts[0]->post_description,25) }} >>> <a href="{{ MyAPI::getUrlPost($posts[0]->id) }}">[chi tiết]</a>
							</p>
						</div>
						<div>
							<ul>
								@php unset($posts[0]) @endphp
								@foreach($posts as $post)
								<li><a href="{{ MyAPI::getUrlPost($post->id) }}">{{ $post->post_name }}</a></li>
								@endforeach
							</ul>
						</div>
						@endif
					</div>
					<div>
						@php 
							$term = MyAPI::getTerm(10);
							$posts = $term->post()->limit(6)->get();
						@endphp
						@if(count($posts))
						<div>
							<h3><a href="{{ MyAPI::getUrlPost($posts[0]->id) }}">{{ $posts[0]->post_name }}</a></h3>
							<p>
								{{ MyAPI::limitWord($posts[0]->post_description,25) }} >>> <a href="{{ MyAPI::getUrlPost($posts[0]->id) }}">[chi tiết]</a>
							</p>
						</div>
						<div>
							<ul>
								@php unset($posts[0]) @endphp
								@foreach($posts as $post)
								<li><a href="{{ MyAPI::getUrlPost($post->id) }}">{{ $post->post_name }}</a></li>
								@endforeach
							</ul>
						</div>
						@endif
					</div>
					<div>
						@php 
							$term = MyAPI::getTerm(4);
							$posts = $term->post()->limit(6)->get();
						@endphp
						@if(count($posts))
						<div>
							<h3><a href="{{ MyAPI::getUrlPost($posts[0]->id) }}">{{ $posts[0]->post_name }}</a></h3>
							<p>
								{{ MyAPI::limitWord($posts[0]->post_description,25) }} >>> <a href="{{ MyAPI::getUrlPost($posts[0]->id) }}">[chi tiết]</a>
							</p>
						</div>
						<div>
							<ul>
								@php unset($posts[0]) @endphp
								@foreach($posts as $post)
								<li><a href="{{ MyAPI::getUrlPost($post->id) }}">{{ $post->post_name }}</a></li>
								@endforeach
							</ul>
						</div>
						@endif
					</div>
				</div>
				<div>
					<p><a href="#">Bạn muốn tìm hiểu điều gì?</a></p>
					<div class="flex flex10 flex-wrap-wrap">
						<div class="flex10col1">
							<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Hỏi về<br>bệnh tình</a>
						</div>
						<div class="flex10col1" style="background-color: #7ecca0;">
							<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Hỏi về hiệu<br>quả điều trị </a>
						</div>
						<div class="flex10col1">
							<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Hẹn với<br>bác sĩ </a>
						</div>
						<div class="flex10col1" style="flex-basis: 107px;margin-right: 0;background-color: #ef92b7;">
							<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Phương pháp<br>điều trị</a>
						</div>
						<div class="flex10col1" style="background-color: #7ecca0;">
							<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Tư vấn<br>dùng thuốc</a>
						</div>
						<div class="flex10col1" style="background-color: #ef92b7;">
							<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Hỏi về<br>chi phí</a>
						</div>
						<div class="flex10col1" style="background-color: #7ecca0;">
							<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Thời gian<br>điều trị</a>
						</div>
						<div class="flex10col1" style="flex-basis: 107px;margin-right: 0;">
							<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Điều cần chú ý<br>khi hồi phục</a>
						</div>
					</div>
				</div>
			</div>
			<div class="flex8col3">
				<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">
					<img src="{{ asset('public/images/desktop/home-7-2.png') }}" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="flex flex11 justify-content-between">
		<div class="flex11col1">
			<span>Bác sĩ giải đáp</span>
		</div>
		<div class="flex11col2">
			<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Tìm hiểu chi tiết <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
		</div>
	</div>
	<div class="flex flex12 justify-content-between" style="border-bottom: 1px dashed #e0e0e0;padding-bottom: 20px;">
		<div class="flex12col1">
			<h4><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en"><img src="{{ asset('public/images/desktop/home-8-1.png') }}" alt=""></a></h4>
		</div>
		<div class="flex12col2">
			<div>
				<h3>Nguyên lý kĩ thuật</h3>
				<p>
					&nbsp;&nbsp;&nbsp;&nbsp;“Kỹ thuật can thiệp xâm lấn tối thiểu ly giải màng bao hoạt dịch khớp” trực 
					tiếp đưa thuốc nhằm thẳng vào ổ khớp nơi có ổ bệnh, thông qua tác dụng của 
					thuốc loại bỏ các tổ chức bệnh biến, loại bỏ các tổ chức bệnh biến bị viêm, từ 
					đó nhanh chóng làm giảm tình trạng đau và xưng khớp, ngăn chặn việc phá 
					hủy tới phần mềm và sụn, ngăn ngừa dị tật và tàn tật. Kỹ thuật này thao tác rất 
					đơn giản, bệnh nhân không bị đau đớn, an toàn, tin cậy, không tác dụng phụ, 
					bệnh nhân không cần nhập viện, không cần dùng dao, hiệu quả điều trị nhanh 
					và lâu dài, khớp không bị sưng, dễ dàng hoạt động. 
				</p>
			</div>
		</div>
	</div>
	<div class="flex flex12 justify-content-between" style="border-bottom: 1px solid #e0e0e0;padding-bottom: 40px;">
		<div class="flex12col1">
			<h4><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en"><img src="{{ asset('public/images/desktop/home-8-2.png') }}" alt=""></a></h4>
		</div>
		<div class="flex12col2">
			<div>
				<h3>Đột phá về kỹ thuật</h3>
				<ul>
					<li>An toàn không tác dụng phụ, liệu trình ngắn hiệu quả nhanh rõ rệt</li>
					<li>Phục hồi nhanh, từ góc độ lâm sàng bệnh nhân khi điều trị có thể đi lại, không cần nhập viện</li>
					<li>Điều trị xâm lán tối thiểu chính xác hóa, củng cố bằng thuốc đông y, giảm đau ngay trong ngày</li>
					<li>Tiêu viêm, bảo vệ phần mềm của khớp, thực sự giải quyết vấn đề triệt để</li>
				</ul>
			</div>
		</div>
	</div>
	<div>
		<h3 style="margin-top: 37px;"><img src="{{ asset('public/images/desktop/home-9.png') }}" class="center-block"></h3>
		<div class="flex flex13 justify-content-between">
			<div class="flex13col1">
				<div class="flex flex14 flex-wrap-wrap justify-content-center">
					<div class="flex14col1">
						<div class="active text-container-center">
							môi trường<br>phòng khám
						</div>
					</div>
					<div class="flex14col1">
						<div class=" text-container-center">
							thiết bị<br>điều trị
						</div>
					</div>
					<div class="flex14col1">
						<div class=" text-container-center">
							phúc lợi<br>cộng đồng
						</div>
					</div>
					<div class="flex14col1">
						<div class=" text-container-center">
							giao lưu<br>học thuật
						</div>
					</div>	
				</div>
			</div>
			<div class="flex13col2">
				<div class="active">
					<img src="{{ asset('public/images/desktop/home-9-1.png') }}" alt="">
				</div>
				<div>
					<img src="{{ asset('public/images/desktop/home-9-3.png') }}" alt="">
				</div>
				<div>
					<img src="{{ asset('public/images/desktop/home-9-4.png') }}" alt="">
				</div>
				<div>
					<img src="{{ asset('public/images/desktop/home-9-5.png') }}" alt="">
				</div>
			</div>
		</div>
	</div>
</main>
@endsection('content')