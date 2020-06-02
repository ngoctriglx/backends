
<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('home.forgotpassword')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="email" name="email" id="" placeholder="Nhập mail của bạn ...">
        <p><button type="submit">Gửi</button></p>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\back\resources\views/home/forgotpassword.blade.php ENDPATH**/ ?>