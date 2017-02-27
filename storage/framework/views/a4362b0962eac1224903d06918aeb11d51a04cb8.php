<div style="margin-bottom: 10px;">
    <form action="<?php echo e(url('user/post/index')); ?>" class="form-inline">
        <input type="hidden" name="view" value="<?php echo e($data['request']->input('view')); ?>">
        <div class="form-group">
            <select name="term_id" class="form-control">
                <option value="">Chọn danh mục</option>
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
            <input type="text" class="form-control" placeholder="Tên bài" name="post_name" value="<?php echo e($data['request']->input('post_name')); ?>">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
    </form>
</div>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Danh sách bài viết
        <a href="<?php echo e(url('user/post/index?view=icon')); ?>" class="pull-right" style="margin-left: 5px;"> <span class="glyphicon glyphicon-th-large"></span> </a>
        <a href="<?php echo e(url('user/post/index?view=list')); ?>" class="pull-right" style="margin-left: 5px;"> <span class="glyphicon glyphicon-th-list"></span> </a>
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Tên</td>
            <td>Danh mục</td>
            <td>Trạng thái</td>
            <td>Tác giả</td>
            <td>#</td>
        </tr>
        <?php $__currentLoopData = $data['posts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($post->id); ?></td>
            <td><a href="<?php echo e(url($post->post_alias.'/'.$post->id.'.htm')); ?>"><?php echo e($post->post_name); ?></a></td>
            <td><a href="<?php echo e(url($post->term->term_alias.'/'.$post->term->id)); ?>"><?php echo e($post->term->term_name); ?></a></td>
            <td><?php echo e($post->post_status == 1 ? 'Đã đăng' : 'Nháp'); ?></td>
            <td><?php echo e($post->user->user_name); ?></td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="<?php echo e(url($post->post_alias.'/'.$post->id.'.htm')); ?>">
                                        <span class="glyphicon glyphicon-eye-open"></span> Xem bài viết
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/post/edit/'.$post->id)); ?>">
                                        <span class="glyphicon glyphicon-pencil"></span> Sửa bài viết
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/post/delete/'.$post->id)); ?>">
                                        <span class="glyphicon glyphicon-trash"></span> Xóa bài viết
                                    </a> 
                                </li>
                            </ul> 
                        </div>
                    </div>
                </div> 
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </table>
</div>

