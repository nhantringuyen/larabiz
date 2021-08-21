<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Create Listing')); ?> <a href="/dashboard" class="float-right btn btn-info btn-sm"><?php echo e(__('Go Back')); ?></a></div>

                <div class="card-body">
                    <?php echo Form::open(['action' => 'App\Http\Controllers\ListingsController@store', 'method' => 'POST']); ?>

                    <?php echo e(Form::bsText('name','',['placeholder' => 'Company Name'])); ?>

                    <?php echo e(Form::bsText('website','',['placeholder' => 'Company Website'])); ?>

                    <?php echo e(Form::bsText('email','',['placeholder' => 'Contact Email'])); ?>

                    <?php echo e(Form::bsText('phone','',['placeholder' => 'Contact Phone'])); ?>

                    <?php echo e(Form::bsText('address','',['placeholder' => 'Business Address'])); ?>

                    <?php echo e(Form::bsTextArea('bio','',['placeholder' => 'About This Business'])); ?>

                    <?php echo e(Form::bsSubmit('Submit',['class'=> 'btn btn-primary'])); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Program Files\Ampps\www\larabiz\resources\views/createlisting.blade.php ENDPATH**/ ?>