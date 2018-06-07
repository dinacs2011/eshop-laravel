<?php $__env->startSection('title','Women'); ?>
<?php $__env->startSection('content'); ?>
    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="small-3 medium-3 large-3 columns">
                <product :product="<?php echo e($product); ?>"
                productlink="<?php echo e(route('woman',$product->id)); ?>"
                productimagepath='<?php echo e(asset("storage/$product->image")); ?>'
                >
                </product>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h3>No product</h3>
       <?php endif; ?>

        <compare></compare>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>