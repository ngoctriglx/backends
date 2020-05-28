<!DOCTYPE html>
<html lang="en">
    <?php 
      use App\cate;
      use Illuminate\Support\Facades\Auth;
      use Illuminate\Support\Facades\DB;
      $cate = cate::all();
      $new = DB::table('news')->orderBy('view', 'desc')->get();
      $user = Auth::user();
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <div>
        <ul>
          <li>
            <a href="">About Me</a>
          </li>
          <?php if(!Auth::check()): ?>
            <li>
              <a href="<?php echo e(route('home.get.login')); ?>">Login</a>
            </li>
            <li>
              <a href="<?php echo e(route('home.get.sigin')); ?>">Sigin</a>
            </li>
          <?php endif; ?>
          <?php if(Auth::check()): ?>
            <li>
              <div>
                <a data-toggle="dropdown" href="#">
                  <?php if(!empty($user['username'])): ?>
                    <?php echo e($user['username']); ?>

                  <?php else: ?>
                    <?php echo e($user['email']); ?>

                  <?php endif; ?>
                </a>
                <ul style="min-width:auto;">
                    <li><a href="">Edit info</a></li>
                    
                    <li><a href="#" data-toggle="modal" data-target="#myModal">Change pass</a></li>
                  </ul>
              </div>
            </li>
            <li>
              <a href="<?php echo e(route('home.get.logout')); ?>">Logout</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
      <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH E:\xampp\htdocs\news\resources\views/home/master.blade.php ENDPATH**/ ?>