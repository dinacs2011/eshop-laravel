<?php $__env->startSection('content'); ?>

<table style="width:100%">
<?php if(!empty($products)): ?>
           
  <tr>
  
    <th>Name</th>    
    <th>Size</th>
    <th>Price</th>
    <th>Actions</th>
  
</tr>
  <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
 
  <tr>
    <td style="text-align: left" ><?php echo e($product->name); ?></td>    
  
    <td style="text-align: left"><?php echo e($product->size); ?></td>    
 
    <td style="text-align: left"><?php echo e($product->price); ?></td>    
    <td style="text-align: left" >
    <a href="<?php echo e(route('product.edit', $product->id)); ?>" >
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                      Edit
                    </a>
     </td>

  </tr>
  

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <tr> <th>  No Items</th> </tr>
            <?php endif; ?>
                <?php endif; ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>