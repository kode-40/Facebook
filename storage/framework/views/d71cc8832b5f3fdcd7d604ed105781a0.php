
<?php $__env->startSection('title'); ?>
status
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form method="POST" class="flex-container" action="<?php echo e(route('status-post')); ?>">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="input-group">
                <input type="text" class="form-control" name="text" placeholder="Tulis Komentar" aria-label="Tulis Komentar">
                <button type="submit" name="submit_status">
                <span class="input-group-text" id="basic-addon2">↗</span></button>
            </div>
        </div>
    </div>


</form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('addon-style'); ?>
<style>
    .flex-container {
        display: flex;
        background-color: #f0f2f5;
    }
    .flex-container > div {
        background-color: white;
        width: 50%;
        padding: 50px;
        margin-left: 20%;
    }
    .button {
        cursor: pointer;
    }
</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Christoper Lim\Herd\Facebook\resources\views/status.blade.php ENDPATH**/ ?>