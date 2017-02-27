<div style="margin-bottom: 10px;">
    <form action="<?php echo e(url('user/term/index')); ?>" class="form-inline">
        <div class="form-group">
            <select name="term_id" class="form-control">
                <option value="0">Chọn danh mục</option>
                <?php $__currentLoopData = $data['terms_search']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $term): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <?php if($term->term_id == 0): ?>
                        <option <?php echo e($data['request']->input('term_id')==$term->id ? 'selected' : ''); ?> value="<?php echo e($term->id); ?>"><?php echo e($term->term_name); ?></option>
                        <?php $__currentLoopData = $data['terms_search']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=> $term2): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <?php if($term2->term_id == $term->id): ?>
                                <option <?php echo e($data['request']->input('term_id')==$term2->id ? 'selected' : ''); ?> value="<?php echo e($term2->id); ?>">--<?php echo e($term2->term_name); ?></option>
                                <?php $__currentLoopData = $data['terms_search']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key3=> $term3): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <?php if($term3->term_id == $term2->id): ?>
                                        <option <?php echo e($data['request']->input('term_id')==$term3->id ? 'selected' : ''); ?> value="<?php echo e($term2->id); ?>">----<?php echo e($term2->term_name); ?></option>
                                        <?php  unset($data['terms_search'][$key3])  ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                <?php  unset($data['terms_search'][$key2])  ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Tên term" name="term_name" value="<?php echo e($data['request']->input('term_name')); ?>">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
    </form>
</div>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        Danh sách term
    </div>
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Tên</td>
            <td>Cấp trên</td>
            <td>Số bài viết</td>
            <td>#</td>
        </tr>
        <?php $__currentLoopData = $data['terms']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $term): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo e($term->id); ?></td>
            <td><a href="<?php echo e(url($term->term_alias.'/'.$term->id)); ?>"><?php echo e($term->term_name); ?></a></td>
            <td><?php echo e(isset($term->term) ? $term->term->term_name : ''); ?></td>
            <td><?php echo e(count($term->post)); ?></td>
            <td>
                <div class="clearfix">
                    <div class="pull-right">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-option-horizontal"></span>
                            </a>
                            <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                                <li>
                                    <a href="<?php echo e(url($term->term_alias.'/'.$term->id)); ?>">
                                        <span class="glyphicon glyphicon-eye-open"></span> Xem term
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/term/edit/'.$term->id)); ?>">
                                        <span class="glyphicon glyphicon-pencil"></span> Sửa term
                                    </a> 
                                </li> 
                                <li>
                                    <a href="<?php echo e(url('user/term/delete/'.$term->id)); ?>">
                                        <span class="glyphicon glyphicon-trash"></span> Xóa term
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

