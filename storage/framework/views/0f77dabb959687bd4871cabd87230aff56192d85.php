
<?php $__env->startSection('title','Edit info'); ?>
<?php $__env->startSection('content'); ?>
<div>
   
        
    
        <h2 style="margin-top:20px">Edit</h2>
        <form action="<?php echo e(route('home.post.edit')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php if(session('phanquyen')): ?>
                    echo('<?php echo e(session('phanquyen')); ?>');
            <?php endif; ?>
            
          <div>
            <label for="email">Fullname</label>
            <input type="text" 
            <?php if($val->fullname): ?>
                value="<?php echo e($val->fullname); ?>"
            <?php endif; ?>
             id="email" placeholder="Enter username" name="fullname">
          </div>
          <div>
            <label for="email">Age</label>
            <input type="text"
            <?php if($val->birth): ?>
                value="<?php echo e($val->birth); ?>"
            <?php endif; ?>
            id="email" placeholder="Enter age" name="age">
        </div>
        <div>
            
            <div>Avatar
                <input type="file" style="display:none;" id="basicinput" name="avatar" >
                <br>
                <img style="padding: 10px 10px;
                background-color: white;
                box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
                -moz-box-shadow: 0 1px 2px rgba(34,25,25,0.4);
                -webkit-box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);" 
                <?php if($val->avatar): ?>
                src="<?php echo e(asset($val['avatar'])); ?>"
                <?php endif; ?>
                <?php if(!$val->avatar): ?>
                src="<?php echo e(asset('admin_layout/images/default.png')); ?>"
                <?php endif; ?>
                width="50px" height="50px">
            </div>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" 
            <?php if($val->email): ?>
                value="<?php echo e($val->email); ?>"
            <?php endif; ?>
            id="email" placeholder="Enter email" name="email">
        </div>
        <div>
            <label for="email">Facebook</label>
            <input type="text"
            <?php if($val->facebook): ?>
                value="<?php echo e($val->facebook); ?>"
            <?php endif; ?>
            id="email" placeholder="Enter facebook" name="facebook">
        </div>
        
        
          <?php if(count($errors) > 0): ?>
          <div>
              <a href="#"  data-dismiss="alert" aria-label="close">&times;</a>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php echo e($error); ?><br>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <?php endif; ?>
          <button type="submit" >Submit</button>
          
        </form>
        <br>
        
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    $('.img-bnupload').click(function(){
        $('.img-upload').click();
        
    });
    $('.img-upload').change( function(event) {
        var tmppath = URL.createObjectURL(event.target.files[0]);
            $(".img-bnupload").fadeIn("fast").attr('src',tmppath);       
        });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\back\resources\views/home/editinfo.blade.php ENDPATH**/ ?>