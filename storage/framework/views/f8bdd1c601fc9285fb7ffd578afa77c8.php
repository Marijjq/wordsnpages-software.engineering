<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>wordsnpages</title>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/jquery.nice-number.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/jquery.calendar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/add_row_custon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/mobile_menu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/jquery.exzoom.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/multiple-image-video.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/ranger_style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/jquery.classycountdown.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/venobox.min.css')); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>


    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/responsive.css')); ?>">
    <!-- <link rel="stylesheet" href="css/rtl.css"> -->
</head>

<body>
    <!--============================
        HEADER START
    ==============================-->
    <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--============================
        HEADER END
    ==============================-->


    <!--============================
        MAIN MENU START
    ==============================-->
   <?php echo $__env->make('frontend.layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--============================
        MAIN MENU END
    ==============================-->


    
        <?php echo $__env->yieldContent('content'); ?>
    
    <!--============================
        FOOTER PART START
    ==============================-->
   <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--============================
        FOOTER PART END
    ==============================-->


    <!--============================
        SCROLL BUTTON START
    ==============================-->
    <div class="wsus__scroll_btn">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!--============================
        SCROLL BUTTON  END
    ==============================-->


    <!--jquery library js-->
    <script src="<?php echo e(asset('frontend/js/jquery-3.6.0.min.js')); ?>"></script>
    <!--bootstrap js-->
    <script src="<?php echo e(asset('frontend/js/bootstrap.bundle.min.js')); ?>"></script>
    <!--font-awesome js-->
    <script src="<?php echo e(asset('frontend/js/Font-Awesome.js')); ?>"></script>
    <!--select2 js-->
    <script src="<?php echo e(asset('frontend/js/select2.min.js')); ?>"></script>
    <!--slick slider js-->
    <script src="<?php echo e(asset('frontend/js/slick.min.js')); ?>"></script>
    <!--simplyCountdown js-->
    <script src="<?php echo e(asset('frontend/js/simplyCountdown.js')); ?>"></script>
    <!--product zoomer js-->
    <script src="<?php echo e(asset('frontend/js/jquery.exzoom.js')); ?>"></script>
    <!--nice-number js-->
    <script src="<?php echo e(asset('frontend/js/jquery.nice-number.min.js')); ?>"></script>
    <!--counter js-->
    <script src="<?php echo e(asset('frontend/js/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/jquery.countup.min.js')); ?>"></script>
    <!--add row js-->
    <script src="<?php echo e(asset('frontend/js/add_row_custon.js')); ?>"></script>
    <!--multiple-image-video js-->
    <script src="<?php echo e(asset('frontend/js/multiple-image-video.js')); ?>"></script>
    <!--sticky sidebar js-->
    <script src="<?php echo e(asset('frontend/js/sticky_sidebar.js')); ?>"></script>
    <!--price ranger js-->
    <script src="<?php echo e(asset('frontend/js/ranger_jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/ranger_slider.js')); ?>"></script>
    <!--isotope js-->
    <script src="<?php echo e(asset('frontend/js/isotope.pkgd.min.js')); ?>"></script>
    <!--venobox js-->
    <script src="<?php echo e(asset('frontend/js/venobox.min.js')); ?>"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!--classycountdown js-->
    <script src="<?php echo e(asset('frontend/js/jquery.classycountdown.js')); ?>"></script>

    <!--main/custom js-->
    <script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>

    <script>
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                toastr.error("<?php echo e($error); ?>")
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </script>

</body>

</html><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>