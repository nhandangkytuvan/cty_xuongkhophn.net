@php $setting_web = json_decode($data['setting']->setting_web,true) @endphp
@extends('layout.mobile')
@section('title')
    <title>{{ $data['term']->term_name }} - Khoa xương khớp - Phòng khám Nhân Ái</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ $setting_web['web_logo'] }}">
<meta id="metaDescription" name="description" content="{{ $data['term']->term_name }}">
<meta id="metaKeywords" name="keywords" content="{{ $data['term']->term_keyword }}">
@endsection('keyword')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-term.css') }}">
@endsection('css')
@section('content')
<div class="bg1">
    <div class="container">
        <div class="row flex1">
            <div class="col-xs-3 flex1col1">
                <div class="box">
                    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Hỏi triệu chứng</a>
                </div>
            </div>
            <div class="col-xs-3 flex1col1">
                <div class="box">
                    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Hỏi nguyên nhân</a>
                </div>
            </div>
            <div class="col-xs-3 flex1col1">
                <div class="box">
                    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Hỏi nguy hại</a>
                </div>
            </div>
            <div class="col-xs-3 flex1col1">
                <div class="box">
                    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Tư vấn chuyên gia</a>
                </div>
            </div>
        </div>
    <h2 class="name-category">{{ $data['term']->term_name }}</h2>
    </div>
</div>
<div class="container">
    <div class="lists">
        <div class="post">
            <h3><a title="" href="#"><i></i> Lorem ipsum dolor sit amet, consectetur.</a></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia consequatur, nihil optio similique nostrum!
                <a  title=""  href="#">[ Chi tiết ]</a>
            </p>
        </div>
        <div class="post">
            <h3><a title="" href="#"><i></i> Lorem ipsum dolor sit amet, consectetur.</a></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia consequatur, nihil optio similique nostrum!
                <a  title=""  href="#">[ Chi tiết ]</a>
            </p>
        </div>
        <div class="post">
            <h3><a title="" href="#"><i></i> Lorem ipsum dolor sit amet, consectetur.</a></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia consequatur, nihil optio similique nostrum!
                <a  title=""  href="#">[ Chi tiết ]</a>
            </p>
        </div>
        <div class="post">
            <h3><a title="" href="#"><i></i> Lorem ipsum dolor sit amet, consectetur.</a></h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia consequatur, nihil optio similique nostrum!
                <a  title=""  href="#">[ Chi tiết ]</a>
            </p>
        </div>
    </div>
    <nav class="my_pagination">
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
    </nav>
</div>
@endsection('content')