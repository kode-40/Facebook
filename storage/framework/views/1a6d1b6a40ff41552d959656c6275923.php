
<?php $__env->startSection('title'); ?>
  login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main class="d-flex align-items-center vh-100 gap-5">
<div class="d-flex text-left flex-column w-75 align-items-center">
    <p style="font-size: 50px;font-family: inherit;color: blue">
        <b>facebook</b></p>
    <p style="font-size: xx-large;">
        Connect with friends and the world<br>around you on Facebook.</p>
</div>


    <form method="post" class="w-25" action="<?php echo e(route('login-post')); ?>">
        <?php echo csrf_field(); ?>
        <?php if($errors->any()): ?>
<span  role="alert">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <strong class="text-danger"><?php echo e($error); ?></strong>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</span>
<?php endif; ?>
        <br>
            <div class="input-group flex-nowrap mb-4">
                <input type="email" name="email" class="form-control" placeholder="Email or phone number" aria-label="email" required>
            </div> 
            <div class="input-group flex-nowrap mb-4">
                <input type="password" name="password" class="form-control" placeholder="password" aria-label="password" required>
              </div>
            <div>
                <button type="submit" class="btn btn-primary"
                style="--bs-btn-padding-y: .813rem; --bs-btn-padding-x: 10rem; --bs-btn-font-size: .938rem;">
                login
                </button>
            </div><br>
    <div>    
        <p style="color: blue;text-align: center;cursor: pointer;margin-left: 115px; margin-right: 115px;margin-bottom: 20px;">Forget password?</p>
        <hr>
    </div>
    <div class="col-4 mx-auto">
        <a href="<?php echo e(route('register')); ?>" class="btn btn-success active">New account</a>
    </div><br>
    </form>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('addon-style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Christoper Lim\Herd\Facebook\resources\views/auth/login.blade.php ENDPATH**/ ?>