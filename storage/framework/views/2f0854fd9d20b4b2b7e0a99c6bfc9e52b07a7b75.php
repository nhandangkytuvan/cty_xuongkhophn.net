<div style="margin-bottom: 10px;">
    <form action="<?php echo e(url('user/media/index')); ?>" class="form-inline">
        <input type="hidden" name="view" value="<?php echo e($data['request']->input('view')); ?>">
        <div class="form-group">
            <select name="term_id" class="form-control">
                <option value="">Chọn thư mục</option>
                <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $term): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <?php if($term->term_id == 0): ?>
                        <option <?php echo e($data['request']->input('term_id') == $term->id ? 'selected' : ''); ?> value="<?php echo e($term->id); ?>"><?php echo e($term->term_name); ?></option>
                        <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=> $term2): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <?php if($term2->term_id == $term->id): ?>
                                <option <?php echo e($data['request']->input('term_id') == $term2->id ? 'selected' : ''); ?> value="<?php echo e($term2->id); ?>">--<?php echo e($term2->term_name); ?></option>
                                <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3=> $term3): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <?php if($term3->term_id == $term2->id): ?>
                                        <option <?php echo e($data['request']->input('term_id') == $term3->id ? 'selected' : ''); ?> value="<?php echo e($term2->id); ?>">----<?php echo e($term2->term_name); ?></option>
                                        <?php  unset($data['terms'][$key3])  ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                <?php  unset($data['terms'][$key2])  ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <select name="user_id" class="form-control">
                <option value="">Chọn tác giả</option>
                <?php $__currentLoopData = $data['users']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <option <?php echo e($data['request']->input('user_id') == $user->id ? 'selected' : ''); ?> value="<?php echo e($user->id); ?>"><?php echo e($user->user_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Tên media" name="media_name" value="<?php echo e($data['request']->input('media_name')); ?>">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
    </form>
</div>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Danh sách ảnh
        <a href="<?php echo e(url('user/media/index?view=thumbnail')); ?>" class="pull-right" style="margin-left: 5px;"> <span class="glyphicon glyphicon-th-list"></span> </a>
        <a href="<?php echo e(url('user/media/index?view=icon')); ?>" class="pull-right" style="margin-left: 5px;"> <span class="glyphicon glyphicon-th-large"></span> </a>
        <a href="<?php echo e(url('user/media/index?view=list')); ?>" class="pull-right" style="margin-left: 5px;"> <span class="glyphicon glyphicon-list"></span> </a>
    </div>
    <div class="panel-body">
        <div class="row" style="display: flex;flex-wrap: wrap;">    
            <?php $__currentLoopData = $data['medias']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $media): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <div class="col-sm-4">
                <p><a href="<?php echo e(asset('public/img/'.$media->media_file)); ?>"><img src="<?php echo e(asset('public/img/'.$media->media_file)); ?>" class="img-responsive img-thumbnail center-block"></a></p>
                <p class="text-center"><a href="<?php echo e(asset('public/img/'.$media->media_file)); ?>"><?php echo e($media->media_name); ?></a></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </div>
    </div>
</div>

