<?php $__env->startSection('content'); ?>

    <h3>Add Offer</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php echo Form::open(['route' => 'offer.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']); ?>


            <div class="form-group">
                <?php echo e(Form::label('value', 'Value')); ?>

                <?php echo e(Form::text('value', null, array('class' => 'form-control','required'=>'','minlength'=>'1'))); ?>

            </div>

           

             <?php echo e(Form::submit('Create', array('class' => 'btn btn-default'))); ?>

            <?php echo Form::close(); ?>


        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>