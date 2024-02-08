

<?php $__env->startSection('content'); ?>

<section class="section">
    <div class="section-header">
        <h1>Show Author</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Author Details
                </div>
                <div class="card-body">
                    <div>
                        <img src="<?php echo e(asset($author->image)); ?>" alt="Author Image" class="img-thumbnail" style="max-width: 200px;">
                    </div>
                    <p><strong>Name:</strong> <?php echo e($author->name); ?></p>
                    <p><strong>Surname:</strong> <?php echo e($author->surname); ?></p>
                    <p><strong>Bio:</strong> <?php echo nl2br(e($author->bio)); ?></p>
                    <p><strong>Created At:</strong> <?php echo e($author->created_at->format('Y-m-d H:i:s')); ?></p>
                    <p><strong>Updated At:</strong> <?php echo e($author->updated_at->format('Y-m-d H:i:s')); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/admin/authors/show.blade.php ENDPATH**/ ?>