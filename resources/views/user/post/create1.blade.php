@extends('layout.user')
@section('menu')
    @include('menu.menuUser')
@endsection('menu')
@section('content')
<form method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-heading text-center">Tạo bài viết mới</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Ảnh</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="file" class="form-control" name="post_avatar" id="fileUpload">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" id="image-holder">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Tên bài</label>
                <input type="text" class="form-control" name="post_name" placeholder="Tiêu đề bài viết" value="{{ old('post_name') }}">
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label class="control-label">Danh mục</label>
                        <select name="term_id" class="form-control">
                            <option value="">Chọn danh mục</option>
                            @foreach($data['terms'] as $key=> $term)
                                @if($term->term_id == 0)
                                    <option value="{{ $term->id }}">{{ $term->term_name }}</option>
                                    @foreach($data['terms'] as $key2=> $term2)
                                        @if($term2->term_id == $term->id)
                                            <option value="{{ $term2->id }}">--{{ $term2->term_name }}</option>
                                            @foreach($data['terms'] as $key3=> $term3)
                                                @if($term3->term_id == $term2->id)
                                                    <option value="{{ $term2->id }}">----{{ $term2->term_name }}</option>
                                                    @php unset($data['terms'][$key3]) @endphp
                                                @endif
                                            @endforeach
                                            @php unset($data['terms'][$key2]) @endphp
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <p style="margin-top: 5px;">
                            <label class="control-label label label-success" for="post_status">Đăng bài lên</label>
                        </p>
                        <div class="material-switch">
                            <input id="post_status" type="checkbox" name="post_status" value="1">
                            <label for="post_status" class="label-success"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Tóm tắt</label>
                <textarea type="text" class="form-control autosize" name="post_description">{{ old('post_description') }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Chi tiết 
                    <a href="#"  data-toggle="tooltip" data-placement="top" title="Tiêu đề bài viết không cần viết trong đây">
                        <span class="glyphicon glyphicon-info-sign"></span>
                    </a>
                </label>
                <textarea type="text" class="form-control" name="post_detail" id="post_detail">{{ old('post_detail') }}</textarea>
                <script>
                    $(document).ready(function($) {
                        tinymce.init({
                            menubar: false,
                            statusbar: false,
                            selector: '#post_detail',
                            theme: "modern",
                            height: 300,
                            plugins: [
                                 "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                                 "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
                                 "table contextmenu directionality emoticons paste textcolor filemanager "
                           ],
                            //relative_urls: false,

                            //filemanager_title:"Responsive Filemanager",
                            //filemanager_crossdomain: true,
                            //external_filemanager_path:"http://localhost/cty_xuongkhophn.net/tinymce/js/tinymce/plugins/filemanager/",
                            //external_plugins: { "filemanager" : "http://localhost/cty_xuongkhophn.net/tinymce/js/tinymce/plugins/filemanager/plugin.min.js"},
                          
                           image_advtab: true,
                           toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
                           toolbar2: "filemanager | image | media | link unlink anchor | print preview"
                        });
                    });
                </script>
            </div>
            <div class="form-group">
                <label class="control-label">Keyword</label>
                <textarea type="text" class="form-control autosize" name="post_keyword">{{ old('post_keyword') }}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-edit"></span>  Thêm bài viết</button>
            </div>
        </div>
    </div>
</form>
@endsection('content')
