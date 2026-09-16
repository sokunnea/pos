


<?php $__env->startSection('content'); ?>
    <h2><?php echo e('product'); ?></h2>
    <div>
        <label for="product_en"><?php echo e('Name En'); ?></label>
        <input type="text" name="product_en" id="product_en" value="<?php echo e($product->product_en); ?>"/>
    </div>
    <div>
        <label for="product_kh"><?php echo e('Name Kh'); ?></label>
        <input type="text" name="product_kh" id="product_kh" value="<?php echo e($product->product_kh); ?>"/>
    </div>
    <div>
        <label for="status"><?php echo e('Status'); ?></label>
        <input type="text" name="status" id="status" value="<?php echo e($product->status); ?>"/>
    </div>
    
<?php $__env->stopSection(); ?>
            
        
<?php echo $__env->make('components.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xamppInstall\htdocs\pos\resources\views/product/show.blade.php ENDPATH**/ ?>