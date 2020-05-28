
<?php $__env->startSection('content'); ?>
    <table cellpadding="0" cellspacing="0" border="1" width="100%">
        <thead>
            <tr>
                <th width="3%">STT</th>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                <th>Category</th>
                <th>Avatar</th>
                <th>Status</th>
                <th width="7%">Work</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="3%"><?php echo e($key); ?></td>
                <td><?php echo e($val->title); ?></td>
                <td><?php echo e($val->description); ?></td>
                <td><?php echo e($val->author); ?></td>
                <td><?php echo e($val->category); ?></td>
                <td><img src="<?php echo e(asset($val->avatar)); ?>" width="50px" height="50px"></td>
                <td>
                    <?php if($val->status == 0): ?>
                        Ẩn
                    <?php endif; ?>
                    <?php if($val->status == 1): ?>
                        Hoạt Động
                    <?php endif; ?>
                </td>
                <td width="7%">
                    <div>
                        <ul style="width:67px;min-width:0px;">
                            <li><a href="<?php echo e(route('admin.new.get.edit',$val->id)); ?>">edit</a>
                            <li><a href="">delete</a>
                                
                        </ul>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\news\resources\views/admin/new/list.blade.php ENDPATH**/ ?>