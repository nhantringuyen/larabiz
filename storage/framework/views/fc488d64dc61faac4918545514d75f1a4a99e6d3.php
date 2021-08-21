<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e($listing->name); ?> <a href="/listings" class="float-right btn btn-info btn-sm"><?php echo e(__('Go Back')); ?></a></div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Address: <?php echo e($listing->name); ?></li>
                        <li class="list-group-item">Website: <a href="<?php echo e($listing->website); ?>" target="_blank"><?php echo e($listing->website); ?></a></li>
                        <li class="list-group-item">Email: <?php echo e($listing->email); ?></li>
                        <li class="list-group-item">Phone: <?php echo e($listing->phone); ?></li>
                    </ul>
                    <hr>
                    <div class="card-body bg-light">
                        <?php echo e($listing->bio); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Program Files\Ampps\www\larabiz\resources\views/showlisting.blade.php ENDPATH**/ ?>