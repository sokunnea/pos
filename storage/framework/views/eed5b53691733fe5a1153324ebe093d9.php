<?php $__env->startSection('content'); ?>


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Purchase Order</h2>
        </div>
        <div class="pull-right">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('purchase-order-create')): ?>
                    <a href="<?php echo e(route('purchase_order.create')); ?>" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> <?php echo e('Create'); ?></a>
                <?php endif; ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

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

        <div class="card">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th scope="col">S#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Purchase Date</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $purchase_order_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase_order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($product->product_code); ?></td>
                        <td><?php echo e($product->purchase_date); ?></td>
                        <td><?php echo e($product->quantity); ?></td>
                        <td><?php echo e($product->price); ?></td>
                        <td><?php echo e($product->amount); ?></td>
                        <td>
                            <form action="<?php echo e(route('purchase_order.destroy', $product->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <a href="<?php echo e(route('purchase_order.show', $product->id)); ?>" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('purchase-order-edit')): ?>
                                    <a href="<?php echo e(route('purchase_order.edit', $product->id)); ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('purchase-order-delete')): ?>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete?');"><i class="bi bi-trash"></i> Delete</button>
                                <?php endif; ?>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <td colspan="6">
                            <span class="text-danger">
                                <strong>No Product Found!</strong>
                            </span>
                        </td>
                    <?php endif; ?>
                </tbody>
            </table>
            <?php echo e($purchase_order_list->links()); ?>


        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\pos\resources\views/purchaseOrder/index.blade.php ENDPATH**/ ?>