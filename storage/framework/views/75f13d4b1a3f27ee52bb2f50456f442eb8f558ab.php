
<?php $__env->startSection('title','List comment'); ?>
<?php $__env->startSection('content'); ?>
<select name="" id="">
    <option value=""><a href="">hihi</a></option>
    <option value=""><a href="">haha</a></option>
</select>
<br>
<br>
<table cellpadding="0" cellspacing="0" border="1"  width="80%">
    <thead>
        <tr>
            <th width="3%">STT</th>
            <th>Content</th>
            <th>Username</th>
            <th>New</th>
            <th>Report</a></th>
            <th>Work</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $cmt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($val1->user_id == $val3->id): ?>
        <?php if($val1->new_id == $val2->id): ?>
        <tr>
            <td width="3%"><?php echo e($key); ?></td>
            <td><?php echo e($val1->content); ?></td>
            <td><?php echo e($val3->username); ?></td>
            <td><?php echo e($val2->title); ?></td>
            
            <td><?php echo e($val1->report); ?></td>
            <td>
                <div>
                    <ul>
                        
                        
                    
                        <li><a href="<?php echo e(route('admin.cmt.get.delete',$val1->id)); ?>">delete</a>
                    </ul>
                </div>
            </td>
        </tr>
        <?php endif; ?>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\news\resources\views/admin/cmt/list.blade.php ENDPATH**/ ?>