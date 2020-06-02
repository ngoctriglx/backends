
  <?php $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php $__env->startSection('title',$val->title); ?>
  <?php $__env->startSection('content'); ?>
    <!-- Title -->
    <h1><?php echo e($val->title); ?></h1>
    <!-- Author -->
    <p>
      <b><?php echo e($val->author); ?></b>
    </p>
    <hr>
    <!-- Date/Time -->
    <p>Posted on <i><?php echo e($val->created_at); ?></i><istyle="margin-left:20px"></istyle=><?php echo e($val->view); ?></p>
    <hr>
    <!-- Preview Image -->
    <img src="<?php echo e(asset($val->avatar)); ?>" height="300px" alt="">
    <hr>
    <!-- Post Content -->
    <?php echo $val->content;?>
    <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <div>
        <h5>Leave a Comment:</h5>
        <div>
            <form action="<?php echo e(route('home.post.comment',$val->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div>
                    <textarea rows="3" name="content"></textarea>
                </div>
            <button type="submit">Submit</button>
          </form>
        </div>
    </div>
    
    <?php $__currentLoopData = $cmt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($val->user_id === $val2->user_id): ?>
            <!-- Single Comment -->
              <div>
                <img 
                  <?php if(!$val2->avatar): ?>
                    src="<?php echo e(asset('admin_layout/images/default.png')); ?>"
                  <?php endif; ?>
                  <?php if($val2->avatar): ?>
                    src="<?php echo e(asset($val2->avatar)); ?>"
                  <?php endif; ?>
                  alt="" width="50px" height="50px">
                  <div>
                  <h5><?php echo e($val2->fullname); ?></h5>
                    <?php echo e($val->content); ?><br>
                  <small><i><?php echo e($val->updated_at); ?></i></small>
              </div>
              <div>
                <?php if(!empty(Auth::user())): ?>
                    <?php if(Auth::user()->id == $val->user_id): ?>
                      <a href="">Xóa</a>
                      
                    <?php endif; ?>   
                <?php endif; ?>
                <a href="<?php echo e(route('home.post.reportcomment',$val->id)); ?>">Report</a>
              </div>
            </div>
          <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <p>********************************************************</p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\back\resources\views/home/content.blade.php ENDPATH**/ ?>