

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4"> <!-- Increase the column width to col-md-6 -->
                <div class="card mx-auto"> <!-- Add mx-auto class to center the card -->
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="<?php echo e(asset($authors->image)); ?>" class="card-img" alt="<?php echo e($authors->name); ?>">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($authors->name . ' ' . $authors->surname); ?></h5>
                                <p class="card-text"><?php echo nl2br(e($authors->bio)); ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo e(route('authorsHome')); ?>" class="btn btn-secondary btn-sm">Back to Authors</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/frontend/pages/author-detail.blade.php ENDPATH**/ ?>