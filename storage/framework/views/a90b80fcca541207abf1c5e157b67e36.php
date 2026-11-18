<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POS System</title>
    
    <link rel="stylesheet" href="<?php echo e(asset('asset/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asset/css/sidebars.css')); ?>">
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            
                <div>
                    <a class="navbar-brand" href="<?php echo e(URL('/home')); ?>">POS System-Laravel 12</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li><a class="nav-link" href="<?php echo e(route('users.index')); ?>">Manage Users</a></li>
                            <li><a class="nav-link" href="<?php echo e(route('roles.index')); ?>">Manage Role</a></li>
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            
        </nav>
    </div>
    
    
        
            <div class="row justify-content-left mt-2">
                
                
                <div class="flex-shrink-0 p-3" style="width: 280px">
                    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                        <svg class="bi pe-none me-2" width="30" height="24" aria-hidden="true">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                        <span class="fs-5 fw-semibold">Collapsible</span>
                    </a>
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false"> Dashboard
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li>
                                        <a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded" >Overview</a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded" >Weekly</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">Account
                            </button>
                            <div class="collapse" id="account-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-manage')): ?>
                                        <li><a class="nav-link" href="<?php echo e(route('products.index')); ?>">Manage Product</a></li>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('purchase-order-manage')): ?>
                                        <li><a class="nav-link" href="<?php echo e(route('purchase_order.index')); ?>">Manage Purchase</a></li>
                                    <?php endif; ?>
                                    <li>
                                        <a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

                
                
                <div style="
    width: 85%;
">
                    
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        
    
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH D:\xampp\htdocs\pos\resources\views/layouts/app.blade.php ENDPATH**/ ?>