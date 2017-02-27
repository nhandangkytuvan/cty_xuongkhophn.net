<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Pham Van Truong</title>
    <link rel="stylesheet" href="<?php echo e(asset('public/css/global/bootstrap/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/global/font-awesome/css/font-awesome.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/admin/admin-checkbox.css')); ?>">   
    <link rel="stylesheet" href="<?php echo e(asset('public/css/admin/admin.css')); ?>">   
    <script src="<?php echo e(asset('public/js/global/jquery-1.12.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/global/tinymce/js/tinymce/tinymce.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/global/jquery.form.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/global/bootstrap/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/global/jquery-scrolltofixed-min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/admin/admin.js')); ?>"></script>
</head>
<body style="padding-top: 70px;">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #fff;color: #333;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuPrimary" aria-expanded="false" style="background: none;border: none;">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="menuPrimary">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo e(url('/')); ?>">Trang chủ</a></li>
                            </ul>
                            <form class="navbar-form navbar-right">
                                <div class="form-group">
                                   <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm ...">
                                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                    </div>
                                </div>
                            </form>
                            <ul class="nav navbar-nav navbar-right">
                                <?php if(Session::get('user')): ?>
                                    <li>
                                        <a href="<?php echo e(url('user/edit')); ?>">
                                        <?php if(Session::get('user')->user_avatar): ?>   
                                            <img src="<?php echo e(asset('public/img/'.Session::get('user')->user_avatar)); ?>" 
                                            style="max-width: 30px;max-height: 30px;position: absolute;top:10px;left: -10%;" class="img-circle center-block">
                                        <?php else: ?>
                                            <i class="glyphicon glyphicon-user"></i>
                                            <span class="label label-success" style="vertical-align: 2px;margin-right: 5px;margin-left: 5px;">
                                                <?php echo e(Session::get('user')->user_group); ?>

                                            </span>
                                        <?php endif; ?>
                                        <?php echo e(Session::get('user')->user_name); ?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('user/post/create')); ?>"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Viết bài</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('user/logout')); ?>"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                                    </li>
                                <?php else: ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 hidden-xs">
                    <div class="menuSystem">
                        <?php echo $__env->yieldContent('menu'); ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <?php if(Session::has('msg-success')): ?>
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-check"></span> 
                            <?php echo Session::get('msg-success'); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('msg-error')): ?>
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-warning-sign"></span>
                            <?php echo Session::get('msg-error'); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('msg-info')): ?>
                        <div class="alert alert-info">
                            <span class="glyphicon glyphicon-question-sign"></span>
                            <?php echo Session::get('msg-info'); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <ul style="list-style: none;">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <li><span class="glyphicon glyphicon-warning-sign"></span> <?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
    </main>
</body>
<script>  
$(document).ready(function() {
    $('.menuSystem').scrollToFixed({
        marginTop: 70,
    });
});
</script>
</html>
