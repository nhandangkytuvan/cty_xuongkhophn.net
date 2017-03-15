@extends('layout.mobile')
@section('title')
    <title>{{ $data['term']->term_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
<meta property="og:image" content="{{ $setting->web_logo }}">
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
        @php $posts = $data['term']->post()->paginate(5); @endphp
        @foreach($posts as $post)
        <div class="post">
            <h3><a title="{{ $post->post_name }}" href="{{ MyAPI::getUrlPost($post->id) }}"><i></i> {{ $post->post_name }}</a></h3>
            <p>
                {{ MyAPI::limitWord($post->post_description,30) }}
                <a  title="{{ $post->post_name }}"  href="{{ MyAPI::getUrlPost($post->id) }}">[ Chi tiết ]</a>
            </p>
        </div>
        @endforeach
    </div>
    <nav class="my_pagination">
        {{ $posts->links() }}
    </nav>
</div>
@endsection('content')