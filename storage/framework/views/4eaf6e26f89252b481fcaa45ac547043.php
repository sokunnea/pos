



<?php $__env->startSection('content'); ?>
        <h2><?php echo e('product'); ?></h2>
        
        <table>
            <header>
                <tr>
                    <th><?php echo e('No'); ?></th>
                    <th><?php echo e('Name EN'); ?></th>
                    <th><?php echo e('Name KH'); ?></th>
                    <th><?php echo e('Status'); ?></th>
                </tr>
            </header>
            <tbody>
                <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($obj->id); ?></td>
                        <td><?php echo e($obj->product_en); ?></td>
                        <td><?php echo e($obj->product_kh); ?></td>
                        <td><?php echo e($obj->status); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xamppInstall\htdocs\pos\resources\views/product/index.blade.php ENDPATH**/ ?>