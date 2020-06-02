<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route('home.post.login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <p>email</p>
        <input type="text" name="email" 
        <?php if(session('email')): ?>
        value="<?php echo e(session('email')); ?>"
        <?php endif; ?>>
        <p>password</p>
        <input type="text"  name="password">
        <br>
        <br>
        <button type="submit">submit</button>
        <br>
        <?php if(session('error')): ?>
        <strong>Danger!</strong> <?php echo e(session('error')); ?>

        <?php endif; ?>
        
        <a href="<?php echo e(url('/home/user/logingoogle/google')); ?>">LoginGmail</a>
        <br>
        <a href="<?php echo e(url('/home/user/loginfacebook/facebook')); ?>">LoginFacebook</a>
    </form>
</body>
</html><?php /**PATH E:\xampp\htdocs\back\resources\views/home/login.blade.php ENDPATH**/ ?>