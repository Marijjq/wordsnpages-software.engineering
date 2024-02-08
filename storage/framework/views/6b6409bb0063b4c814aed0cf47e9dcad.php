
    
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h2>Search Results for '<?php echo e($query); ?>'</h2>
</div>

<div class="container mt-5">
    <h3>Books</h3>
    <div class="row">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="<?php echo e(asset($book->image)); ?>" class="card-img-top" alt="<?php echo e($book->title); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($book->title); ?></h5>
                        <p class="card-text">Written by: <?php echo e($book->author->name . ' ' . $book->author->surname); ?></p>
                        <p class="card-text">Price: $<?php echo e($book->init_price); ?></p>
                        <a href="<?php echo e(route('add-to-cart', ['ISBN' => $book->ISBN])); ?>" class="btn btn-primary btn-sm">Add to Cart</a>
                        <a href="<?php echo e(route('books.book-detail', ['book' => $book->ISBN])); ?>" class="btn btn-secondary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<div class="container mt-5">
    <h3>Authors</h3>
    <div class="row">
        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="<?php echo e(asset($author->image)); ?>" class="card-img-top" alt="<?php echo e($author->name); ?>">
                    <div class="card-body">
                        <p class="card-text">Written by: <?php echo e($author->name . ' ' . $author->surname); ?></p>
                        <a href="<?php echo e(route('authorDetails', ['author' => $author->authorId])); ?>" class="btn btn-secondary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/frontend/search/results.blade.php ENDPATH**/ ?>