

   <?php $__env->startSection('title', 'پنل کاربر'); ?>

   <?php $__env->startSection('content'); ?>
       <h1>خوش آمدید، <?php echo e(auth()->user()->first_name); ?></h1>
       <p>شماره موبایل: <?php echo e(auth()->user()->mobile); ?></p>
       <form method="POST" action="<?php echo e(route('logout')); ?>">
           <?php echo csrf_field(); ?>
           <button type="submit">خروج</button>
       </form>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\shayanDEV_041\Desktop\New folder\login-system\resources\views/dashboard.blade.php ENDPATH**/ ?>