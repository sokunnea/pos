<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Home</div>
            <div class="card-body">
                <div class="alert alert-success">
                    <?php if($message = Session::get('success')): ?>
                        <?php echo e($message); ?>

                    <?php else: ?>
                        You are logged in!
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\pos\resources\views/auth/home.blade.php ENDPATH**/ ?>