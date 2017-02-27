<?php  $setting_web = json_decode($data['setting']->setting_web,true)  ?>

<?php $__env->startSection('title'); ?>
	<title><?php echo e($data['post']->post_name); ?> - Khoa xương khớp - Phòng khám Nhân Ái</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('keyword'); ?>
<?php if($data['post']->post_avatar): ?>
<meta property="og:image" content="<?php echo e(asset('public/img/'.$data['post']->post_avatar)); ?>">
<?php else: ?>
<meta property="og:image" content="<?php echo e(asset('public/img/'.$setting_web['web_logo'])); ?>">
<?php endif; ?>
<meta id="metaDescription" name="description" content="<?php echo e($data['post']->post_description); ?>">
<meta id="metaKeywords" name="keywords" content="<?php echo e($data['post']->post_keyword); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/font/post-detail-css.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/css/mobile/mobile-post.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main>
	<div class="container">
		<ol class="breadcrumb">
		  	<li><a href="<?php echo e(url('/')); ?>"><span class="fa fa-home"></span></a></li>
		  	<?php  $term = $data['post']->term  ?>
		  	<li><a href="<?php echo e(MyAPI::getUrlTerm($term->id)); ?>"><?php echo e($term->term_name); ?></a></li>
		</ol>
		<h1 class="post-name"><?php echo e($data['post']->post_name); ?></h1>
		<div class="content-post post-detail post-<?php echo e($data['post']->id); ?>">
			<?php echo $data['post']->post_detail; ?>

		</div>
		<p class="nhacnho" style="padding:10px;line-height: 20px;"><span style="color: red;"><strong>Nhắc nhở:</strong></span> Phần lớn bệnh nhân không coi trọng việc điều trị, việc xem nhẹ rất có thể gây ra những nguy hại dẫn tới tình trạng bệnh ngày một nặng thêm. Nếu bạn có bất kể điều gì nghi vấn, hoan nghênh bạn click để <a  style="color: red;font-weight: bold;" href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">tư vấn giao lưu trực tuyến</a>. hoặc gọi điện đường dây nóng <a href="tel:0436.241.999" style="color: red;font-weight: bold;">0436.241.999</a> - <a href="tel:0911 501 709"  style="color: red;font-weight: bold;">0911 501 709</a> để được tư vấn.</p>
		<div class="row tuvan">
			<div class="col-xs-6">
				<div class="box">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Tư vấn qua điện thoại</a>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="box" style="background-color: #F49700;">
					<a href="http://drt.zoosnet.net/LR/Chatpre.aspx?id=DRT84001515&lng=en">Đặt hẹn trực tuyến</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div style="background-color: #fff;height: 10px;margin: 20px auto; "></div>
		<div class="bai-lien-quan">
			<h4>Đọc bài liên quan</h4>
			<ul>
				<li class=""><a title="Lorem ipsum dolor sit amet." href="#">Lorem ipsum dolor sit amet.</a></li>
				<li class=""><a title="Lorem ipsum dolor sit amet." href="#">Lorem ipsum dolor sit amet.</a></li>
				<li class=""><a title="Lorem ipsum dolor sit amet." href="#">Lorem ipsum dolor sit amet.</a></li>
				<li class=""><a title="Lorem ipsum dolor sit amet." href="#">Lorem ipsum dolor sit amet.</a></li>
			</ul>
		</div>
		<div style="background-color: #f3f3f3;height: 10px;margin: 20px auto; "></div>
	</div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mobile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>