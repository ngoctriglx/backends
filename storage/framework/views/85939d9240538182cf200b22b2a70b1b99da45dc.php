<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route('home.post.sigin')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <h3>Đăng ký</h3>
        <br>
        <p>Tên của bạn</p>
        <input type="text" name="fullname" placeholder="Tên của bạn"  value="<?php echo e(old('fullname')); ?>">
        <?php if($errors->has('fullname')): ?>
            <p><?php echo e($errors->first('fullname')); ?></p>
        <?php endif; ?>
        <p>Tên tài khoản</p>
        <input type="text" name="username" placeholder="Tên tài khoản" value="<?php echo e(old('username')); ?>">

        <?php if($errors->has('username')): ?>
            <p><?php echo e($errors->first('username')); ?></p>
        <?php endif; ?>

        <p>Mật khẩu</p>
        <input type="text" name="password" placeholder="Mật khẩu" value="<?php echo e(old('password')); ?>">
        <?php if($errors->has('password')): ?>
            <p><?php echo e($errors->first('password')); ?></p>
        <?php endif; ?>

        <p>Nhập lại mật khẩu</p>
        <input type="text" name="repassword" placeholder="Nhập lại mật khẩu" value="<?php echo e(old('repassword')); ?>">
        <?php if($errors->has('repassword')): ?>
            <p><?php echo e($errors->first('repassword')); ?></p>
        <?php endif; ?>
        <br>
        <br>
        <button type="submit">Submit</button>

        <a href="login" class="btn-face m-b-20">
            <i class="fa fa-facebook-official"></i>
            Login
        </a>
    </form>
</body>
</html><?php /**PATH E:\xampp\htdocs\news\resources\views/home/sigin.blade.php ENDPATH**/ ?>