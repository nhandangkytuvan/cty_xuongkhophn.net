<form method="post">
<?php echo e(csrf_field()); ?>

<div class="panel panel-default">
    <div class="panel-heading text-center">Xóa term</div>
    <table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Tên</td>
            <td>Parent</td>
            <td>Số bài viết</td>
        </tr>
        <tr>
            <td><?php echo e($data['term']->id); ?></td>
            <td><?php echo e($data['term']->term_name); ?></td>
            <td><?php echo e(isset($data['term']->term) ? $data['term']->term->term_name : ''); ?></td>
            <td></td>
        </tr>
    </table>
    <div class="panel-body">
        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-leaf"></span>  Xóa term</button>
    </div>
    <div class="panel-footer">
        <div class="clearfix">
            <div class="pull-right">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-option-horizontal"></span>
                    </a>
                    <ul class="dropdown-menu" style="border-radius: 0;right: 0;left: auto;">
                        <li>
                            <a href="<?php echo e(url('user/term/edit/'.$data['term']->id)); ?>">
                                <span class="glyphicon glyphicon-pencil"></span> Sửa term
                            </a> 
                        </li> 
                        <li>
                            <a href="<?php echo e(url('user/term/delete/'.$data['term']->id)); ?>">
                                <span class="glyphicon glyphicon-trash"></span> Xóa term
                            </a> 
                        </li>
                    </ul> 
                </div>
            </div>
        </div> 
    </div>
</div>
</form>
