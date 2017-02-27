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
<link rel="stylesheet" href="<?php echo e(asset('public/css/desktop/desktop-post.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/css/desktop/desktop-sidebar.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="baner">
	<div><img src="<?php echo e(asset('public/images/desktop/banner-nho.png')); ?>" alt="" class="center-block"></div>
</div>
<main class="container benhchinh">
	<div class="crub">
		<i></i><a href="<?php echo e(url('/')); ?>">Trang chủ ></a>
		<?php if($data['post']->term): ?>
		<?php  $term = $data['post']->term  ?>
		<a href="<?php echo e(url($term->term_alias.'/'.$term->id)); ?>"><?php echo e($term->term_name); ?></a>
		<?php endif; ?>
	</div>
	<div class="flex flex1 justify-content-between">
		<div class="flex1col1">
			<h1 class="post-name"><?php echo e($data['post']->post_name); ?></h1>
			<div class="post-detail">
				<?php echo $data['post']->post_detail; ?>

			</div>
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
		<div class="flex1col2">
			<?php echo $__env->make('web.desktop.slidebar',['data'=>$data], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.desktop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>