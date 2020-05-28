<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <a href="">
                
                Dashboard
            </a>
        </li>
        <li>
            <a href="#togglePages1">
                <i class="menu-icon icon-user"></i>
                <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                Users
            </a>
            <ul id="togglePages1" class="collapse unstyled">
                <li>
                    <a href="">
                        
                        <i class="icon-list"></i>
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
            <a class="collapsed" data-toggle="collapse" href="#togglePages2">
                <i class="menu-icon icon-book"></i>
                <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                News
            </a>
            <ul id="togglePages2" class="collapse unstyled">
                <li>
                    <a href="">
                        
                        <i class="icon-list"></i>
                        List new
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('admin.new.get.create')); ?>">
                        <i class="icon-plus"></i>
                        Add a new
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="collapsed" data-toggle="collapse" href="#togglePages3">
                <i class="menu-icon icon-list"></i>
                <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                Categories
            </a>
            <ul id="togglePages3" class="collapse unstyled">
                <li>
                    <a href="">
                        
                        <i class="icon-list"></i>
                        List category
                    </a>
                </li>
                <li>
                    <a href="">
                        
                        <i class="icon-plus"></i>
                        Add new category
                    </a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="">
                
                <i class="menu-icon icon-user-md"></i>   
                List Admin
            </a>
        </li>
        <li>
            <a href="">
                
                <i class="menu-icon icon-quote-left"></i>   
                Comments
            </a>
        </li>
    </ul>
</body>
</html><?php /**PATH E:\xampp\htdocs\news\resources\views/admin/admin.blade.php ENDPATH**/ ?>