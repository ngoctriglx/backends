<!DOCTYPE html>
<html lang="en">
    <?php 
			use Illuminate\Support\Facades\Auth;
			use App\admin;
			$a = Auth::guard('admin')->user()->id;
			$b = admin::find($a);
			$adminAvatar = $b['avatar'];
		?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
						
            <li>
                <a href="#" data-toggle="dropdown">
                    <img 
                        <?php if(!$adminAvatar): ?>
                        src="<?php echo e(asset('admin_layout/images/default.png')); ?>" 
                        <?php endif; ?>
                        <?php if($adminAvatar): ?>
                        src="<?php echo e(asset($adminAvatar)); ?>"
                        <?php endif; ?>
                     />
                    <b></b>
                </a>
                <ul>
                    <li><a href="<?php echo e(route('admin.info.get.profile')); ?>">Your Profile</a></li>
                    <li><a href="<?php echo e(route('admin.info.get.edit')); ?>">Edit Profile</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal">Change your password</a></li>
                    <li></li>
                    <li><a href="">Logout</a></li>
                    
                </ul>
            </li>
        </ul>
    </div>
    <ul>
        <li>
            <a href="">
                
                Dashboard
            </a>
        </li>
        <li>
            <a href="#togglePages1">
                Users
            </a>
            <ul>
                <li>
                    <a href="<?php echo e(route('admin.user.get.list')); ?>">
                        List user
                    </a>
                </li>
                <li>
                    <a href="">
                        
                        <i class="icon-plus"></i>
                        Add new user
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="">
                News
            </a>
            <ul>
                <li>
                    <a href="<?php echo e(route('admin.new.get.list')); ?>">
                        List new
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('admin.new.get.create')); ?>">
                        Add a new
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="">
                Categories
            </a>
            <ul>
                <li>
                    <a href="">
                        
                        List category
                    </a>
                </li>
                <li>
                    <a href="">
                        
                        Add Category
                    </a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="">
                
                List Admin
            </a>
        </li>
        <li><a href="">Comments</a> 
            <ul>
                <li>
                    <a href="<?php echo e(route('admin.cmt.get.list')); ?>">   
                        List Comment
                    </a>
                </li>
                
            </ul>
            
        </li>
    </ul>
    <br>
    <br>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH E:\xampp\htdocs\news\resources\views/admin/master.blade.php ENDPATH**/ ?>