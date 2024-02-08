

<?php $__env->startSection('content'); ?>

<section class="section">
    <div class="section-header">
        <h1>Show Book</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Book Details
                </div>
                <div class="card-body">
                    <ul>
                        <img src="<?php echo e(asset($book->image)); ?>" alt="" style="width: 200px" class="mx-auto d-block">
                        <li><strong>Title:</strong> <?php echo e($book->title); ?></li>
                        <li><strong>Author:</strong> <?php echo e($book->author->name . ' ' . $book->author->surname); ?></li>
                        <li><strong>Category:</strong> <?php echo e($book->category->name); ?></li>
                        <li><strong>Description:</strong></li>
                        <p><?php echo nl2br(e($book->description)); ?></p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/admin/books/show.blade.php ENDPATH**/ ?>