@extends('layout.mobile')
@section('title')
    <title>{{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ asset('public/img/'.$setting->web_logo) }}">
<meta id="metaDescription" name="description" content="{{ $setting->web_description }}">
<meta id="metaKeywords" name="keywords" content="{{ $setting->web_keyword }}">
@endsection('keyword')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-home.css') }}">
@endsection('css')
@section('content')
<div class="container">
    <div class="flex flex1 flex-wrap-wrap justify-content-between">
        <div class="flex1col1 flex justify-content-center align-items-center bg1">
            <h3><a href="{{ MyAPI::getUrlTermID(12) }}" class="text-container-center">viêm xương khớp</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg2">
            <h3><a href="{{ MyAPI::getUrlTermID(7) }}" class="text-container-center">viêm khớp gối</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg1">
            <h3><a href="{{ MyAPI::getUrlTermID(26) }}" class="text-container-center">bệnh gút</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg2">
            <h3><a href="{{ MyAPI::getUrlTermID(24) }}" class="text-container-center">viêm khớp dạng thấp</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg1">
            <h3><a href="{{ MyAPI::getUrlTermID(25) }}" class="text-container-center">viêm khớp phong thấp</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg2">
            <h3><a href="{{ MyAPI::getUrlTermID(18) }}" class="text-container-center">gai xương</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg3">
            <h3><a href="{{ MyAPI::getUrlTermID(17) }}" class="text-container-center">chứng loãng xương</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg4">
            <h3><a href="{{ MyAPI::getUrlTermID(2) }}" class="text-container-center">bệnh đốt sống cổ</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg3">
            <h3><a href="{{ MyAPI::getUrlTermID(3) }}" class="text-container-center">bệnh đốt sống lưng</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg4">
            <h3><a href="{{ MyAPI::getUrlTermID(4) }}" class="text-container-center">thoát vị đĩa đệm đốt sống lưng</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg3">
            <h3><a href="{{ MyAPI::getUrlTermID(14) }}" class="text-container-center">đau cổ vai lưng chân</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg4">
            <h3><a href="{{ MyAPI::getUrlTermID(16) }}" class="text-container-center">đau thần kinh tọa</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg5">
            <h3><a href="{{ MyAPI::getUrlTermID(8) }}" class="text-container-center">viêm quanh khớp vai</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg6">
            <h3><a href="{{ MyAPI::getUrlTermID(11) }}" class="text-container-center">hoại tử chỏm xương đùi</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg5">
            <h3><a href="{{ MyAPI::getUrlTermID(27) }}" class="text-container-center">viêm cột sống dính khớp</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg6">
            <h3><a href="{{ MyAPI::getUrlTermID(10) }}" class="text-container-center">viêm màng hoạt dịch</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg5">
            <h3><a href="{{ MyAPI::getUrlTermID(15) }}" class="text-container-center">viêm cơ mạc</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg6">
            <h3><a href="{{ MyAPI::getUrlTermID(5) }}" class="text-container-center">hẹp ống sống</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg7">
            <h3><a href="{{ MyAPI::getUrlTermID(21) }}" class="text-container-center">viêm bao Gân</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg7">
            <h3><a href="{{ MyAPI::getUrlTermID(22) }}" class="text-container-center">viêm gân gót chân</a></h3>
        </div>
        <div class="flex1col1 flex justify-content-center align-items-center bg7">
            <h3><a href="{{ MyAPI::getUrlTermID(19) }}" class="text-container-center">đau gót chân</a></h3>
        </div>
    </div>
    <div class="toico">
        Tôi có các triệu chứng giống như dưới đây
        <div class="arrow_box"></div>
    </div>
    <div class="lists">
        <div class="flex flex2 justify-content-between">
            <div class="flex2col1 flex justify-content-center align-items-center">
                <h3 class="text-center">
                    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Đau đốt sống cổ</a>
                </h3>
            </div>
            <div class="flex2col2">
                <div class="flex flex3 justify-content-between">
                    <div class="flex3col1 flex justify-content-center align-items-center">
                        <h3 class="text-center">
                            <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Đau lưng</a>
                        </h3>
                    </div>
                    <div class="flex3col1 flex justify-content-center align-items-center">
                        <h3 class="text-center">
                            <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Tê khớp</a>
                        </h3>
                    </div>
                    <div class="flex3col1 flex justify-content-center align-items-center">
                        <h3 class="text-center">
                            <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">khó vận động</a>
                        </h3>
                    </div>
                </div>
                <div class="flex flex3 justify-content-between">
                    <div class="flex3col1 flex justify-content-center align-items-center">
                        <h3 class="text-center">
                            <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Cứng khớp</a>
                        </h3>
                    </div>
                    <div class="flex3col1 flex justify-content-center align-items-center">
                        <h3 class="text-center">
                            <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Hai chân tê bì</a>
                        </h3>
                    </div>
                    <div class="flex3col1 flex justify-content-center align-items-center">
                        <h3 class="text-center">
                            <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Đau lưng</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex4 flex-wrap-wrap justify-content-between">
            <div class="flex4col1 flex justify-content-center align-items-center">
                <h3 class="text-center">
                    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Đau khớp do bị nhiễm lạnh</a>
                </h3>
            </div>
            <div class="flex4col1 flex justify-content-center align-items-center">
                <h3 class="text-center">
                    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Đau ở phía mặt bên của chân</a>
                </h3>
            </div>
            <div class="flex4col1 flex justify-content-center align-items-center">
                <h3 class="text-center">
                    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Đau khớp gối do đi bộ</a>
                </h3>
            </div>
        </div>
    </div>
</div>
@endsection('content')