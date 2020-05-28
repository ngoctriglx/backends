
<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($val->status == 1): ?>
            <!-- Blog Post -->
            <div>
            <img src="<?php echo e($val->avatar); ?>" height="300px" alt="Card image cap">
            <div>
                <h2><?php echo e($val->title); ?></h2>
                <u><small><?php echo e($val->category); ?></small></u>
                <p><?php echo e($val->description); ?></p>
                <a href="<?php echo e(route('home.get.content',$val->changetitle)); ?>">Read More &rarr;</a>
            </div>
            <div>
                Posted on <i><?php echo e($val->created_at); ?></i> by <b><?php echo e($val->author); ?></b>
            </div>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\news\resources\views/home/home.blade.php ENDPATH**/ ?>