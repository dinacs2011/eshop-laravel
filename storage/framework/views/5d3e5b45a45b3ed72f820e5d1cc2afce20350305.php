<?php $__env->startSection('content'); ?>

<table style="width:100%">
<?php if(!empty($offers)): ?>
           
  <tr>
    <th>Values</th>
   
  </tr>
  <?php $__empty_1 = true; $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <tr>
    <td><?php echo e($offer->value); ?></td>    
  </tr>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <tr> <th>  No Items</th> </tr>
            <?php endif; ?>
                <?php endif; ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>