@php $setting_web = json_decode($data['setting']->setting_web,true) @endphp
@extends('layout.desktop')
@section('title')
	<title>{{ $data['post']->post_name }} - Khoa xương khớp - Phòng khám Nhân Ái</title>
@endsection('title')
@section('keyword')
@if($data['post']->post_avatar)
<meta property="og:image" content="{{ asset('public/img/'.$data['post']->post_avatar) }}">
@else
<meta property="og:image" content="{{ asset('public/img/'.$setting_web['web_logo']) }}">
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
				<div style="text-align: center;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.111079979727!2d105.83896731548593!3d20.988183986020303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac688733b5bd%3A0x8e25d03b43b2f04f!2zNzA5IEdp4bqjaSBQaMOzbmcsIFBoxrDGoW5nIExp4buHdCwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1483496300089" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
						
					</iframe>
				</div>
				<div style="text-align: center;">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&amp;lng=en" style="display: inline-block;" style="margin-right: 10px;">
						<img src="{{ asset('public/images/desktop/diachi-1.gif') }}" alt="">
					</a>
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&amp;lng=en" style="display: inline-block;">
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
							<span> I.Chỉ dẫn đường đi đến phòng khám Nhân Ái Hà Nội?<br></span>
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
							<span> II..Chỉ dẫn đến phòng khám Nhân Ái Hà Nội, nếu đi bằng taxi?<br></span>
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
							<span>III.Chỉ dẫn đường đi đến phòng khám Nhân Ái Hà Nội bằng xe bus?<br></span>
							<span>Tuyến bus đi qua phòng khám: 03 (A-B), 08, 16 (A,B), 21, 25, 28, 32, 41. Sau đó từ trạm xe bus đi bộ khoảng 200m.</span>
						</p>
					</div>
				</div>
				<hr>
				<div class="huong-dan">
					<label for="">Hướng dẫn đặt hẹn trên mạng：</label>
					<ol style="list-style-type:decimal;">
						<li>Hãy ghi rõ nội dung đặt hẹn, nếu không thể tự phán đoán nên chọn khám tại khoa nào, có thể để lại tin nhắn, miêu tả rõ tình trạng bệnh của bạn.</li>
						<li>Phòng khám Nhân Ái Hà Nội sẽ liên hệ với bạn trong 12 tiếng đồng hồ, có thể xác định giúp bạn về thời gian chẩn đoán, khoa khám, bác sỹ cũng như phiếu khám bệnh.</li>
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
					.huong-dan{
						margin:30px 0px;
					}
					.huong-dan label {
					    background-color: #00ff00;
					    padding: 5px;
					}
					.huong-dan ol li{
						margin-bottom: 10px;
						margin-top: 10px;
					}
					hr{
						margin-top: 20px;
				    	margin-bottom: 20px;
				    	border: 0;
				    	border-top: 1px solid #eeeeee;
					}
				</style>
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
			</div>
		</div>
		<div class="flex1col2">
			@include('web.desktop.slidebar',['data'=>$data])
		</div>
	</div>
</main>
@endsection('content')