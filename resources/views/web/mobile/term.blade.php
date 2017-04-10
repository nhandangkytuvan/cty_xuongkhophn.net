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
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-pagination.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-term.css') }}">
@endsection('css')
@section('content')
<div class="bg1">
    <div class="container">
        <div class="flex">
            <div class="flex1col1 flex justify-content-center align-items-center">
                <h3>
                    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Hỏi triệu chứng</a>
                </h3>
            </div>
            <div class="flex1col1 flex justify-content-center align-items-center">
                <h3>
                    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Hỏi nguyên nhân</a>
                </h3>
            </div>
            <div class="flex1col1 flex justify-content-center align-items-center">
                <h3>
                    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Hỏi nguy hại</a>
                </h3>
            </div>
            <div class="flex1col1 flex justify-content-center align-items-center">
                <h3>
                    <a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Tư vấn chuyên gia</a>
                </h3>
            </div>
        </div>
    </div>
</div>
<div class="term-name">
    <div class="container">
        <h2 class="text-uppercase"><i class="fa fa-user-md"></i> {{ $data['term']->term_name }}</h2>
    </div>
</div>
<div class="container">
    <div class="lists">
        @php $posts = $data['term']->post()->paginate(5); @endphp
        @foreach($posts as $post)
        <div class="post">
            <h3><a title="{{ $post->post_name }}" href="{{ MyAPI::getUrlPostObj($post) }}"><i></i> {{ $post->post_name }}</a></h3>
            <p>
                {{ MyAPI::getLimitWord($post->post_description,30) }}
                <a  title="{{ $post->post_name }}"  href="{{ MyAPI::getUrlPostObj($post) }}">[ Chi tiết ]</a>
            </p>
        </div>
        @endforeach
    </div>
    <nav class="my_pagination">
        {{ $posts->links() }}
    </nav>
</div>
@endsection('content')