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
    <div class="row flex1">
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(12) }}" class="text-container-center bg1">viêm xương khớp</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(7) }}" class="text-container-center bg2">viêm khớp gối</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(26) }}" class="text-container-center bg1">bệnh gút</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(24) }}" class="text-container-center bg2">viêm khớp dạng thấp</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(25) }}" class="text-container-center bg1">viêm khớp phong thấp</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(18) }}" class="text-container-center bg2">gai xương</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(17) }}" class="text-container-center bg3">chứng loãng xương</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(2) }}" class="text-container-center bg4">bệnh đốt sống cổ</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(3) }}" class="text-container-center bg3">bệnh đốt sống lưng</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(4) }}" class="text-container-center bg4">thoát vị đĩa đệm đốt sống lưng</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(14) }}" class="text-container-center bg3">đau cổ vai lưng chân</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(16) }}" class="text-container-center bg4">đau thần kinh tọa</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(8) }}" class="text-container-center bg5">viêm quanh khớp vai</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(11) }}" class="text-container-center bg6">hoại tử chỏm xương đùi</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(27) }}" class="text-container-center bg5">viêm cột sống dính khớp</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(10) }}" class="text-container-center bg6">viêm màng hoạt dịch</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(15) }}" class="text-container-center bg5">viêm cơ mạc</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(5) }}" class="text-container-center bg6">hẹp ống sống</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(21) }}" class="text-container-center bg7">viêm bao Gân</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(22) }}" class="text-container-center bg7">viêm gân gót chân</a></div>
        </div>
        <div class="col-xs-4 flex1col1">
            <div class="box"><a href="{{ MyAPI::getUrlTerm(19) }}" class="text-container-center bg7">đau gót chân</a></div>
        </div>
    </div>
    <div class="toico">
        Tôi có các triệu chứng giống như dưới đây
        <div class="arrow_box"></div>
    </div>
    <div class="lists">
        <div class="row flex2 justify-content-between" style="margin-bottom: 4px;">
            <div class="col-xs-3 flex2col1">
                <div class="box">
                    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Đau đốt sống cổ</a>
                </div>
            </div>
            <div class="col-xs-9 flex2col2">
                <div class="flex flex3 justify-content-between" style="margin-bottom: 4px;">
                    <div class="flex3col1">
                        <div class="box"><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Đau lưng</a></div>
                    </div>
                    <div class="flex3col1">
                        <div class="box"><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Tê khớp</a></div>
                    </div>
                    <div class="flex3col1">
                        <div class="box"><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">khó vận động</a></div>
                    </div>
                </div>
                <div class="flex flex3 justify-content-between">
                    <div class="flex3col1">
                        <div class="box"><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Cứng khớp</a></div>
                    </div>
                    <div class="flex3col1">
                        <div class="box"><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Hai chân tê bì</a></div>
                    </div>
                    <div class="flex3col1">
                        <div class="box"><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Đau lưng</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row flex4">
            <div class="col-xs-4 flex4col1">
                <div class="box"><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Đau khớp do bị nhiễm lạnh</a></div>
            </div>
            <div class="col-xs-4 flex4col1">
                <div class="box"><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Đau ở phía mặt bên của chân</a></div>
            </div>
            <div class="col-xs-4 flex4col1">
                <div class="box"><a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en" class="text-container-center">Đau khớp gối do đi bộ</a></div>
            </div>
        </div>
    </div>
</div>
@endsection('content')