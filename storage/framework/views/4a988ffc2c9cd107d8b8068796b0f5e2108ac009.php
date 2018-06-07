<?php $__env->startSection('title','Products'); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
            <div class="small-5 small-offset-1 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                        <img src="<?php echo e(url('images',$product->image)); ?>"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="item-wrapper">
                <h3 class="subheader">
                    <span class="price-tag">$<?php echo e($product->price); ?></span> 
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <p>
                            <?php echo $product->description; ?>

                        </p>
                    </div>
                </div>
                <br>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>
                                Size
                             
                            </label>
                            <p>
                            <?php echo $product->size; ?>

                        </p>
                            <a href="#" class="button  expanded">Add to Cart</a>
                        </div>
                    </div>
               

                </div>
            </div>
            </div>

            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>