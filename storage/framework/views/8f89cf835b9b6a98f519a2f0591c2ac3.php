

<?php $__env->startSection('content'); ?>
      <!-- Main Content -->
        <section class="section">
          <div class="section-header">
            <h1>Category</h1>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Categories</h4>
                    <div class="card-header-action">
                        <a href="<?php echo e(route('admin.categories.create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Create New</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <?php echo e($dataTable->table()); ?>

                  </div>

                </div>
              </div>
            </div>

          </div>
        </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<?php echo e($dataTable->scripts(attributes: ['type' => 'module'])); ?>


<?php $__env->stopPush(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>