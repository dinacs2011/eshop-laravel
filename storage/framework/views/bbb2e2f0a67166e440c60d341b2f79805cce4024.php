<?php $__env->startSection('title','Offers'); ?>
<?php $__env->startSection('content'); ?>
    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

          <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="<?php echo e(route('item')); ?>">
                            <img src="<?php echo e(url('images',$product->image)); ?>"/>
                        </a>
                    </div>
                    <a href="<?php echo e(route('item')); ?>">
                        <h3>
                           <?php echo e($product->name); ?>

                        </h3>
                    </a>
                    <h5>
                    <?php echo e($product->price); ?>

                    </h5>
                    <p>
                    <?php echo e($product->description); ?>

                    </p>
                </div>
            </div>

           

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h3>No product</h3>
       <?php endif; ?>

        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>