

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section-header">
      <h1>Profile</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashbaord')); ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Profile</div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title"></h2>
      <p class="section-lead">
        Change information about yourself on this page.
      </p>

      <div class="row mt-sm-4">
      
        <div class="col-12 col-md-12 col-lg-7">
          <div class="card">
            <form method="post" action="<?php echo e(route('admin.profile.update')); ?>" class="needs-validation" novalidate=""
            enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
              <div class="card-header">
                <h4>Edit Profile</h4>
              </div>
              <div class="card-body">
                  <div class="row">  
                    <div class="form-group  col-12">
                        <div class="mb-3">
                            <img width="200px" src="<?php echo e(asset(Auth::user()->image)); ?>" alt="">
                        </div>
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" >
                      </div>                             
                    <div class="form-group col-md-6 col-12">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" value="<?php echo e(Auth::user()->name); ?>" required="">
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label>Email</label>
                      <input type="text" name="email" class="form-control" value="<?php echo e(Auth::user()->email); ?>" required="">
                    </div>
                  </div>
                  </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>
          
          <div class="card">
            <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="alert alert-danger"><?php echo e($error); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          <?php endif; ?>
            <form method="post" action="<?php echo e(route('admin.password.update')); ?>" class="needs-validation" novalidate=""
            enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
              <div class="card-header">
                <h4>Change Password</h4>
              </div>
              <div class="card-body">
                  <div class="row">                              
                    
                    <div class="form-group col-12">
                      <label>Current Password</label>
                      <input type="password" name="current_password" class="form-control" >
                    </div>
                    <div class="form-group col-12">
                      <label>New Password</label>
                      <input type="password" name="password" class="form-control" >
                    </div>
                    <div class="form-group col-12">
                      <label>Confirm Password</label>
                      <input type="password" name="password_confirmation" class="form-control" >
                    </div>

                  </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Save Password</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/admin/profile/index.blade.php ENDPATH**/ ?>