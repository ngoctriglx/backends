<?php $__env->startSection('css'); ?>
.online {
    height: 10px;
    width: 10px;
    border-radius: 50%;
    display: inline-block;
    background-color:green;
}
.offline {
    height: 10px;
    width: 10px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
}
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
    <div>
        <div>
        
            <!-- User profile -->
            <div>
              <div>
              <h4>Admin profile 
              <a href="<?php echo e(route('admin.info.get.edit',$admin['id'])); ?>">Edit</a>
            </h4>
              </div>
              <div>
                <div>
                  <img 
                    <?php if($admin['avatar']): ?>
                      src="<?php echo e(asset($admin['avatar'])); ?>"
                    <?php endif; ?>
                    <?php if(!$admin['avatar']): ?>
                    src="<?php echo e(asset('admin_layout/images/default.png')); ?>"
                    <?php endif; ?>
                   alt="...">
                </div>
                <div>
                  <h4><?php echo e($admin['username']); ?>

                      
					<?php if($check): ?>
					  <?php if($check[0]->checkOnline($admin['id'])): ?>
					  	<span class="online">online</span>
					  <?php endif; ?>
					  <?php if(!$check[0]->checkOnline($admin['id'])): ?>
					  	<span class="offline">offline</span>
					  <?php endif; ?>
				    <?php endif; ?>
					</h4>
                  
                  
                </div>
              </div>
            </div>
            <br><hr><br>
            <!-- User info -->
            <div>
              <div>
              <h4>Admin info</h4>
              </div>
              <div>
                <table>
                  <tbody>
                    <tr>
                        <th><strong>Fullname</strong></th>
                        <td>
                            <?php if($admin['fullname']): ?>
                            <?php echo e($admin['fullname']); ?>

                            <?php endif; ?>
                            <?php if(!$admin['fullname']): ?>
                            <?php echo e('???'); ?>

                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                      <th><strong>Age</strong></th>
                      <td>
                            <?php if($admin['age']): ?>
                            <?php echo e($admin['age']); ?>

                            <?php endif; ?>
                            <?php if(!$admin['age']): ?>
                            <?php echo e('???'); ?>

                            <?php endif; ?>
                      </td>
                    </tr>
                    <tr>
                      <th><strong>Position</strong></th>
                      <td>
                            <?php if($admin['position']): ?>
                            <?php echo e($admin['position']); ?>

                            <?php endif; ?>
                            <?php if(!$admin['position']): ?>
                            <?php echo e('???'); ?>

                            <?php endif; ?>
                      </td>
                    </tr>
                    <tr>
                        <th><strong>Email</strong></th>
                        <td>
                            <?php if($admin['email']): ?>
                                <?php echo e($admin['email']); ?>

                            <?php endif; ?>
                            <?php if(!$admin['email']): ?>
                                <?php echo e('???'); ?>

                            <?php endif; ?>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <br><hr><br>
            <!-- Community -->
            <div>
              <div>
              <h4>Social Network</h4>
              </div>
              <div>
                <table>
                  <tbody>
                    <tr>
                      <th><strong>Facebook</strong></th>
                      <td>
                        <?php if($admin['facebook']): ?>
                            <a href="<?php echo e($admin['facebook']); ?>" target="blank"><?php echo e($admin['facebook']); ?></a>
                        <?php endif; ?>
                        <?php if(!$admin['facebook']): ?>
                            <a href="#">???</a>
                        <?php endif; ?>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
                <br><hr><br>
                <!-- Thong ke -->
            <div>
                <div>
                <h4>Số bài đã đăng</h4>
                </div>
                <div>
                  <table>
                    <tbody>
                      <tr>
                        <th><strong>Post</strong></th>
                        <td><?php echo e($count); ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
                  <br><hr><br>
    
          </div>
          
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\news\resources\views/admin/adminprofile/info.blade.php ENDPATH**/ ?>