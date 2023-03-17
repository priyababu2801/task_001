
  
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Select Plane:</div>
 
                <div class="card-body">
 
                    <div class="row">
                        <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6">
                                <div class="card mb-3">
                                  <div class="card-header"> 
                                        $<?php echo e($plan->price); ?>/Mo
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title"><?php echo e($plan->name); ?></h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
                                    <a href="<?php echo e(route('plans.show', $plan->slug)); ?>" class="btn btn-primary pull-right">Choose</a>
  
                                  </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
  
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelStripe\resources\views/plans.blade.php ENDPATH**/ ?>