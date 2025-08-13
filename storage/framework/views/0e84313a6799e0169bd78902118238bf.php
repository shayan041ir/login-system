

     <?php $__env->startSection('title', 'ثبت اطلاعات'); ?>

     <?php $__env->startSection('content'); ?>
         <h1>ثبت اطلاعات</h1>
         <form method="POST" action="<?php echo e(route('register')); ?>">
             <?php echo csrf_field(); ?>
             <input type="hidden" name="mobile" value="<?php echo e($mobile); ?>">
             <label>نام:</label>
             <input type="text" name="first_name" required>
             <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <p class="error"><?php echo e($message); ?></p>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
             <br>
             <label>نام خانوادگی:</label>
             <input type="text" name="last_name" required>
             <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <p class="error"><?php echo e($message); ?></p>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
             <br>
             <label>کد ملی:</label>
             <input type="text" name="national_code" required>
             <?php $__errorArgs = ['national_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <p class="error"><?php echo e($message); ?></p>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
             <br>
             <label>کلمه عبور:</label>
             <input type="password" name="password" required>
             <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <p class="error"><?php echo e($message); ?></p>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
             <br>
             <label>تکرار کلمه عبور:</label>
             <input type="password" name="password_confirmation" required>
             <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <p class="error"><?php echo e($message); ?></p>
             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
             <br>
             <button type="submit">ثبت</button>
         </form>
     <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\shayanDEV_041\Desktop\New folder\login-system\resources\views/auth/register.blade.php ENDPATH**/ ?>