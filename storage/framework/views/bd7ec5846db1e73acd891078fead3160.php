

<?php $__env->startSection('content'); ?>

<section class="section">
    <div class="section-header">
        <h1>Create New Book</h1>
    </div>

    <div class="row justify-content-center ">
        <div class="col-md-8">
                <div class="card-header">
                    Book Details
                </div>
                <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="alert alert-danger"><?php echo e($error); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
              <?php endif; ?>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.books.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" value="<?php echo e(old('title')); ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Author</label>
                            <select name="author_id" id="" class="form-control">
                                <option value="">Select</option>
                                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($author->authorId); ?>" <?php echo e($author->authorId == $book->author_id ? 'selected' : ''); ?>>
                                        <?php echo e($author->name . ' ' . $author->surname); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>      
                        <div class="form-group">
                            <label for="" class="form-label">Genre</label>
                            <select name="category_id" id="" class="form-control">
                            <option value="">Select</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->categoryId); ?>" <?php echo e($category->categoryId == $book->category_id ? 'selected' : ''); ?>>
                                <?php echo e($category->name); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" class="form-control"><?php echo e(old('description')); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="publishing_year">Publishing Year:</label>
                            <input type="text" name="publishing_year" value="<?php echo e(old('publishing_year')); ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="init_price">Initial Price:</label>
                            <input type="decimal" name="init_price" value="<?php echo e(old('init_price')); ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" name="quantity" value="<?php echo e(old('quantity')); ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputState">Status</label>
                            <select id="inputState" class="form-control" name="status">
                              <option value="1">Available</option>
                              <option value="0">Unavailable</option>
                            </select>
                          </div>
                        <button type="submit" class="btn btn-success">Create Book</button>
                    </form>
                </div>
            </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/admin/books/create.blade.php ENDPATH**/ ?>