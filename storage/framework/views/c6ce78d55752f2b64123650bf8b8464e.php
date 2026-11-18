<?php $__env->startSection('content'); ?>

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Element Information
                </div>
                <div class="float-end">
                    <a href="<?php echo e(route('element.index')); ?>" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Code:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($element->code); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="name_en" class="col-md-4 col-form-label text-md-end text-start"><strong>Name_En:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($element->name_en); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="name_kh" class="col-md-4 col-form-label text-md-end text-start"><strong>Name_kh:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($element->name_kh); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="master" class="col-md-4 col-form-label text-md-end text-start"><strong>Master:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($element->master); ?>

                        </div>
                    </div>

                    <div class="row">
                        <label for="status" class="col-md-4 col-form-label text-md-end text-start"><strong>Status:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <?php echo e($element->status); ?>

                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\pos\resources\views/element/show.blade.php ENDPATH**/ ?>