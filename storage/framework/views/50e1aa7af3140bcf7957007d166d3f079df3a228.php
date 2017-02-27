<form action="" method="post">
<?php echo e(csrf_field()); ?>

<div class="panel panel-default">
	<div class="panel-heading text-center">
		Xóa user
	</div>
	<table class="table table-bordered">
        <tr class="active">
            <td>ID</td>
            <td>Username</td>
            <td>UserGroup</td>
            <td>#</td>
        </tr>
        <tr>
        	<td><?php echo e($data['user']->id); ?></td>
        	<td><?php echo e($data['user']->username); ?></td>
        	<td><?php echo e($data['user']->user_group); ?></td>
        	<td>#</td>
        </tr>
    </table>
	<div class="panel-body">
		<button class="btn btn-danger" type="submit">Xóa user</button>
	</div>
	<div class="panel-footer">
		<div class="clearfix">
            <div class="pull-right">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-option-horizontal"></span>
                    </a>
                    <ul class="dropdown-menu" style="border-radius: 0;left: auto;right: 0;">
                        <li>
                            <a href="<?php echo e(url('user/editGroup/'.$data['user']->id)); ?>">
                                <span class="glyphicon glyphicon-pencil"></span> Sửa user
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('user/block/'.$data['user']->id)); ?>">
                                <span class="glyphicon glyphicon-lock"></span> Khóa user
                            </a> 
                        </li>
                        <li>
                            <a href="<?php echo e(url('user/delete/'.$data['user']->id)); ?>">
                                <span class="glyphicon glyphicon-trash"></span> Xóa user
                            </a> 
                        </li> 
                    </ul>
                </div>
            </div>
        </div> 
	</div>
</div>
</form>