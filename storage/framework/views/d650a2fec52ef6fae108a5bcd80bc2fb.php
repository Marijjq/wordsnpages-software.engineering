

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h2>Authors</h2>
        <div class="row">
            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('authorDetails', ['author' => $author->authorId])); ?>" class="col-md-4 mb-4 author-container">
                    <div class="card d-flex flex-row">
                        <img src="<?php echo e(asset($author->image)); ?>" class="card-img-left" alt="<?php echo e($author->name); ?>" style="width: 150px; height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($author->name . ' ' . $author->surname); ?></h5>
                            <p class="card-text"><?php echo e($author->description); ?></p>
                        </div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/frontend/pages/authorsHome.blade.php ENDPATH**/ ?>