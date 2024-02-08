

<?php $__env->startSection('content'); ?>

<section class="section">
  <div class="section-header">
    <h1>Edit Category</h1>
  </div>
  <?php if($errors->any()): ?>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <span class="alert alert-danger"><?php echo e($error); ?></span>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
<?php endif; ?>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-header">
        <form action="<?php echo e(route('admin.categories.update', $category->categoryId)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
          <label for="name" class="form-label">Name:</label>
          <input type="text" name="name" class="form-control" style="width: 100%" value="<?php echo e($category->name); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Category</button>
      </form>
      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/admin/categories/edit.blade.php ENDPATH**/ ?>