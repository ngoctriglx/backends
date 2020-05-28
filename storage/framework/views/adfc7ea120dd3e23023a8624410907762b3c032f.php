
<?php $__env->startSection('title','Dash Board'); ?>
<?php $__env->startSection('content'); ?>
<div>
	<div>
		User <a href="#"><i></i><b><?php echo e($user); ?></b></a>
		Admin</a><a href="#" ><i></i><b><?php echo e($admin); ?></b></a>
		New</a><a href="#" ><i></i><b><?php echo e($new); ?></b></a>
	</div>
	<div>
		Comment<a href="#" ><i></i><b><?php echo e($cmt); ?></b></a>
		Category</a><a href="#"><i></i><b><?php echo e($cate); ?></b></a>
		View</a><a href="#"><i></i><b><?php echo e($sum); ?></b></a>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\news\resources\views/admin/other/index.blade.php ENDPATH**/ ?>