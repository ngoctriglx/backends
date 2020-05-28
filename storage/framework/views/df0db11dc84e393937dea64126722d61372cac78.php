<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route('admin.post.login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <p><label for="">username</label></p>
        <p><input type="text" name="username"></p>
        <p><label for="">password</label></p>
        <p><input type="text" name="password"></p>
        <?php if(session('error')): ?>
            <?php echo e(session('error')); ?>

        <?php endif; ?>
        <p><button type="submit">Login</button></p>
    </form>
</body>
</html><?php /**PATH E:\xampp\htdocs\news\resources\views/admin/other/login.blade.php ENDPATH**/ ?>