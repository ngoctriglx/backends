
<?php $__env->startSection('title','List user'); ?>
<?php $__env->startSection('content'); ?>
<div>
    <div>
        <h3>List user</h3>
    </div>
    <div>
        <table cellpadding="0" cellspacing="0" border="1" width="100%">
            <thead>
                <tr>
                    <th width="3%">STT</th>
                    <th>email</th>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Age</th>
                    <th>Avatar</th>
                    <th>Github</th>
                    <th>Facebook</th>
                    <th>Skype</th>
                    <th>Email</th>
                    <th>Trạng thái</th>
                    <th width="7%">Work</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td width="3%"><?php echo e($key); ?></td>
                    <td><?php echo e($val->email); ?></td>
                    <td><?php echo e($val->username); ?></td>
                    <td><?php echo e($val->fullname); ?></td>
                    <td><?php echo e($val->age); ?></td>
                    <td><img src="<?php echo e(asset($val->avatar)); ?>" width="50px" height="50px"></td>
                    <td><a href="<?php echo e($val->github); ?>">link</a></td>
                    <td><a href="<?php echo e($val->facebook); ?>">link</a></td>
                    <td><a href="<?php echo e($val->skype); ?>">link</a></td>
                    <td><a href="<?php echo e($val->email); ?>">link</a></td>
                    <td>
                        <?php if($val->isOnline()): ?>
                            <span style="color: red">Online</span>
					    <?php else: ?>
					  	    <span style="">Offline</span>
					    <?php endif; ?>
                    </td>
                    <td width="7%">
                        <div>
                            <button type="button" data-toggle="dropdown">Tasks
                            <span></span></button>
                            <ul style="width:67px;min-width:0px;">
                                
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th width="3%">STT</th>
                    <th>email</th>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Age</th>
                    <th>Avatar</th>
                    <th>Github</th>
                    <th>Facebook</th>
                    <th>Skype</th>
                    <th>Email</th>
                    <th>Trang thái</th>
                    <th width="7%">Work</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\news\resources\views/admin/user/list.blade.php ENDPATH**/ ?>