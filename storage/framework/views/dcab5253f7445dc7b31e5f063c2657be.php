<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
        <div class="alert alert-success" role="alert">
            <?php echo e($value); ?>

        </div>
        <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
        <?php
            $font_search_product = 'Agency FB';
        ?>
        <div style="width: 40%;">
            <div class="card-body">
                <table class="table table-striped table-sm table-bordered table-hover">
                    <thead>
                        <tr>
                        <th><?php echo e('Item'); ?></th>
                        <th><?php echo e('Product'); ?></th>
                        <th><?php echo e('Price'); ?></th>
                        <th><?php echo e('Qty'); ?></th>
                        <th><?php echo e('Total'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo e(1); ?></td>
                            <td><?php echo e('lol'); ?></td>
                            <td><?php echo e(100); ?></td>
                            <td><?php echo e(2); ?></td>
                            <td><?php echo e(200); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(1); ?></td>
                            <td><?php echo e('lol'); ?></td>
                            <td><?php echo e(100); ?></td>
                            <td><?php echo e(2); ?></td>
                            <td><?php echo e(200); ?></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div style="width: 60%;">
            <div class="card-body">
                
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="Enter Product Code" style="font-size: 41px;font-weight: bold;text-align: end;font-family: <?php echo e($font_search_product); ?>;">
                </div>
                <br/>
                
                <div class="row" style="width: 100%;">
                    <div style="width: 60%;background-color: bisque;">
                       <img src="<?php echo e(asset('product_picture/cocacola2.jpg')); ?>"  max-width="500"  max-height="500" class="img-fluid" alt="...">
                    </div>
                    
                    <div style="width: 40%;background-color: aquamarine;">
                        <table class="table table-striped table-sm table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th><?php echo e('Product'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo e('lol'); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e('lolz'); ?></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\pos\resources\views/purchaseOrder/create.blade.php ENDPATH**/ ?>