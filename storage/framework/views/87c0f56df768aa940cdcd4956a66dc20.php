<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Default Title'); ?></title>
    
    <link rel="stylesheet" href="<?php echo e(asset('asset/css/app.css')); ?>">
    
    
    
    
</head>
<body class="bg-gray-50">

        <!-- Sidebar Partial Placement -->
        

        <header class="bg-dark text-white p-3">
            <!-- Global Header Content -->
            Header
        </header>
        <!-- Optional Top Navigation Bar -->
        
        
        <main class="container my-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
</body>
</html>
<?php /**PATH D:\xamppInstall\htdocs\pos\resources\views/components/layout.blade.php ENDPATH**/ ?>