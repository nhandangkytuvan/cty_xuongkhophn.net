@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}
    @php 
    $setting_web = json_decode($data['setting']->setting_web,true);
    @endphp
    <div class="panel panel-default">
        <div class="panel-heading text-center">Cài đặt trang web</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Favicon</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="file" class="form-control" name="web_avatar">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    @if(isset($setting_web['web_avatar']))
                    <img src="{{ asset('public/img/'.$setting_web['web_avatar']) }}" class="img-responsive img-thumbnail center-block">
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Logo</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="file" class="form-control" name="web_logo">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    @if(isset($setting_web['web_logo']))
                    <img src="{{ asset('public/img/'.$setting_web['web_logo']) }}" class="img-responsive img-thumbnail center-block">
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Tên</label>
                <input type="text" class="form-control" name="web_name" value="{{ isset($setting_web['web_name']) ? $setting_web['web_name'] : '' }}">
            </div>
            <div class="form-group">
                <label class="control-label">Mô tả</label>
                <textarea type="text" class="form-control" name="web_description" rows="5">{{ isset($setting_web['web_description']) ? $setting_web['web_description'] : '' }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Keyword</label>
                <textarea type="text" class="form-control" name="web_keyword" rows="5">{{ isset($setting_web['web_keyword']) ? $setting_web['web_keyword'] : '' }}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-bookmark"></span>  Lưu cài đặt</button>
            </div>
        </div>
    </div>
</form>
@endsection('content')