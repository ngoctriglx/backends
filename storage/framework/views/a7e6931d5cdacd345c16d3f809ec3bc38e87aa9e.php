<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route('admin.new.post.create')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label>Title</label>
        <div class="controls">
            <input type="text" name='title' placeholder="Type something here...">
        </div>

        <label>Description</label>
        <div>
            <input type="text" name="description" placeholder="Type something here...">
        </div>

        <label >Author</label>
            <div>
                <input type="text" 
                value="<?php if($author): ?>
                            <?php echo e($author); ?>

                        <?php endif; ?>" 
                name="author" placeholder="Type something here...">
            </div>
        <label>Category</label>
        <div>
        <select tabindex="1" name="category" data-placeholder="Select here..">
            <option value="">Select here..</option>
                <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
                        <option><?php echo e($val->cate); ?></option>
                    
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <label>Status</label>
        <div>
        <select tabindex="1" name="status" data-placeholder="Select here..">
                <option value="1">Hoạt Động</option>
                <option value="0">Ẩn</option>
        </select>
        </div>
        <label>Content</label>
        <textarea name="content" rows="5"></textarea>
        <br>
        <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger span8">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($error); ?><br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
        <br>
        <button type="submit">Submit</button>

    </form>
</body>
</html><?php /**PATH E:\xampp\htdocs\news\resources\views/admin/new/create.blade.php ENDPATH**/ ?>