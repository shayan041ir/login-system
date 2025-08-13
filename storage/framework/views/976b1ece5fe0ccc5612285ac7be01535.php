

     <?php $__env->startSection('title', 'تأیید کد OTP'); ?>

     <?php $__env->startSection('content'); ?>
         <h1>تأیید کد OTP</h1>
         <form method="POST" action="<?php echo e(route('verify-otp')); ?>">
             <?php echo csrf_field(); ?>
             <input type="hidden" name="mobile" value="<?php echo e($mobile); ?>">
             <label>کد OTP:</label>
             <input type="text" name="code" required>
             <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <p class="error"><?php echo e($message); ?></p>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
             <button type="submit">تأیید</button>
         </form>
     <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\shayanDEV_041\Desktop\New folder\login-system\resources\views/auth/otp.blade.php ENDPATH**/ ?>