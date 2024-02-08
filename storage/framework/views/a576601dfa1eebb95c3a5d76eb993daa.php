

<?php $__env->startSection('content'); ?>
      <!-- Main Content -->
        <section class="section">
          <div class="section-header">
            <h1>Book</h1>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Books</h4>
                    <div class="card-header-action">
                        <a href="<?php echo e(route('admin.books.create')); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Create New</a>
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


    <script>
        $(document).ready(function(){
            $('body').on('click', '.change-status', function(){
                let isChecked = $(this).is(':checked');
                let id = $(this).data('id');

                $.ajax({
                    url: "<?php echo e(route('admin.books.change-status')); ?>",
                    method: 'PUT',
                    data: {
                        status: isChecked,
                        id: id
                    },
                    success: function(data){
                        toastr.success(data.message)
                    },
                    error: function(xhr, status, error){
                        console.log(error);
                    }
                })

            })
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/admin/books/index.blade.php ENDPATH**/ ?>