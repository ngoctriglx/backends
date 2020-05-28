
<?php $__env->startSection('title','Edit admin info'); ?>
<?php $__env->startSection('content'); ?>
<div>
    <div>
        <h3> <i style="color:red"><?php echo e($admin['username']); ?></i> Profile</h3>
    </div>
    <div>
        <form action="<?php echo e(route('admin.info.post.edit',$admin['id'])); ?>" method="POST" >
                <?php echo csrf_field(); ?>
            <div>
                <label for="basicinput">Fullname</label>
                <div>
                    <input type="text" id="basicinput" 
                    <?php if($admin['fullname']): ?>
                    value="<?php echo e($admin['fullname']); ?>"
                    <?php endif; ?>
                    name="fullname" placeholder="Type something here..." class="span8">
                </div>
            </div>
            <div>
                <label for="basicinput">Age</label>
                <div>
                    <input type="text" id="basicinput" 
                    <?php if($admin['age']): ?>
                    value="<?php echo e($admin['age']); ?>"
                    <?php endif; ?>
                    name="age" placeholder="Type something here...">
                </div>
            </div>
            <div>
                <label for="basicinput">Position</label>
                <div>
                    <input type="text" id="basicinput"
                    <?php if($admin['position']): ?>
                    value="<?php echo e($admin['position']); ?>"
                    <?php endif; ?>
                     name="position" placeholder="Type something here...">
                </div>
            </div>
            <div>
                <div class="control-group">
                    <label class="control-label" for="basicinput">Avatar</label>
                    <div class="controls">
                        <input type="file" style="display:none;" id="basicinput" name="avatar" class="span8 img-upload" >
                        <br>
                        <img style="padding: 10px 10px;
                        background-color: white;
                        box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
                        -moz-box-shadow: 0 1px 2px rgba(34,25,25,0.4);
                        -webkit-box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);" class="img-bnupload" 
                        <?php if($admin['avatar']): ?>
                        src="<?php echo e(asset($admin['avatar'])); ?>"
                        <?php endif; ?>
                        <?php if(!$admin['avatar']): ?>
                        src="<?php echo e(asset('admin_layout/images/default.png')); ?>"
                        <?php endif; ?>
                        width="50px" height="50px">
                    </div>
                </div>
            </div>
            <div>
                <label for="basicinput">Email</label>
                <div>
                    <input type="text" id="basicinput" 
                    <?php if($admin['email']): ?>
                    value="<?php echo e($admin['email']); ?>"
                    <?php endif; ?>
                     name="email" placeholder="Type something here...">
                </div>
            </div>
            <div>
                <label for="basicinput">Facebook</label>
                <div>
                    <input type="text" id="basicinput" 
                    <?php if($admin['facebook']): ?>
                    value="<?php echo e($admin['facebook']); ?>"
                    <?php endif; ?>
                     name="facebook" placeholder="Type something here...">
                </div>
            </div>
            <div>
                <label for="basicinput">Status</label>
                <div >
                    <textarea name="status"  
                    cols="5"><?php if($admin['status']): ?><?php echo e($admin['status']); ?><?php endif; ?></textarea>
                </div>
            </div>
            <div>
                <div>
                    <?php if(count($errors) > 0): ?>
                    <div>
                        <a href="#" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($error); ?><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                    <?php if(session('error')): ?>
                        <div>
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    $('.img-bnupload').click(function(){
        $('.img-upload').click();
        //var a = $('input[type="file"]').val();
        //$(".img-bnupload").attr("src",a);
    });
    $('.img-upload').change( function(event) {
        var tmppath = URL.createObjectURL(event.target.files[0]);
            $(".img-bnupload").fadeIn("fast").attr('src',tmppath);       
        });
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\news\resources\views/admin/adminprofile/editinfo.blade.php ENDPATH**/ ?>