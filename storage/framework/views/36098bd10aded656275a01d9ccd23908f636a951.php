<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route('admin.new.post.edit',$new->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <label>Title</label>
            <div>
                <input type="text"
                <?php if(isset($new->title)): ?>
                value="<?php echo e($new->title); ?>"
                <?php endif; ?>
                name='title' placeholder="Type something here...">
            </div>
        </div>
        <div>
            <label>Description</label>
            <div>
                <input type="text"
                <?php if(isset($new->description)): ?>
                value="<?php echo e($new->description); ?>"
                <?php endif; ?>
                name="description" placeholder="Type something here...">
            </div>
        </div>
        <div class="control-group">
            <label>Author</label>
            <div>
                <input type="text"
                <?php if(isset($new->author)): ?>
                value="<?php echo e($new->author); ?>"
                <?php endif; ?>
                name="author" placeholder="Type something here...">
            </div>
        </div>
        <div>
            <label>Avatar</label>
            <div>
                <input type="file" style="display:none" id="basicinput" name="avatar">
                <br>
                <img src="
                <?php if(isset($new->avatar)): ?>
                <?php echo e(asset($new->avatar)); ?>

                <?php endif; ?>
                " style="padding: 10px 10px;
                background-color: white;
                box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
                -moz-box-shadow: 0 1px 2px rgba(34,25,25,0.4);
                -webkit-box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);" width="50px" height="50px">
            </div>
        </div>
        <div>
            <label>Category</label>
            <div>
                <select tabindex="1" name="category" data-placeholder="Select here..">
                    <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($val->status == 1): ?>
                            <option
                            <?php if(isset($new->category) && $val->cate == $new->category): ?>
                            <?php echo "selected"; ?>
                            <?php endif; ?>
                            ><?php echo e($val->cate); ?></option>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div>
            <label>Status</label>
            <div>
                <select tabindex="1" name="status" data-placeholder="Select here..">
                    <option value="0"
                        <?php if($new->status == 0): ?>
                            <?php echo "selected"; ?>
                        <?php endif; ?>
                    >Ẩn</option>
                    <option value="1"
                        <?php if($new->status == 1): ?>
                            <?php echo "selected"; ?>
                        <?php endif; ?>
                    >Hoạt Động</option>
                </select>
            </div>
        </div>
        <div>
            <label>Content</label>
            <div>
                <textarea name="content" rows="10">
                    <?php if(isset($new->content)): ?>
                        <?php echo e($new->content); ?>

                    <?php endif; ?>
                </textarea>
            </div>
        </div>
        <div>
            <div>
                <?php if(count($errors) > 0): ?>
                <div>
                    <a href="#">&times;</a>
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
</body>
</html><?php /**PATH E:\xampp\htdocs\news\resources\views/admin/new/edit.blade.php ENDPATH**/ ?>