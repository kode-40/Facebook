
<?php $__env->startSection('title'); ?>
home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<header>
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid relative">
    <div class="col-12 text-center">
    <a class="navbar-brand text-primary fw-bolder text-center" href="#">
    Facebook
    </a>
    <form class="position-absolute" style="right: 10px; top: 5px;" method="POST" action="<?php echo e(route('logout')); ?>">
        <?php echo csrf_field(); ?>
    <button class="btn btn-sm btn-danger">Log Out</button>
    </form>
    </div>
    </div>
    </nav>
    </header>
    <main class="flex flex-col w-full flex-1 px-20 text-center">
    <div class="container">
    <div class="col-12 d-flex align-items-center justify-content-center">
    <h1 class="fs-3 text font-semibold text-dark">
    Status
    </h1>
    </div>
    </div>
    <section class="mt-5">
    <div class="container">
    <div class="row">
    <div class="col-4">
    <div class="card">
    <div class="card-body">
    <a href="<?php echo e(route('status')); ?>" class="btn btn-secondary">Create Status</a>
    </div>
    </div>
    </div>
        
    <div class="col-4">
    <div class="card">
    <div class="card-body">
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 mb-3">
                    <div class="card">
                    <div class="card-body text-start">
                        <div class="d-flex justify-content-between align-items-start">
                            <p><strong><?php echo e($status->user->nama_depan); ?> :</strong></p>
                        </div>
                        <div>
                            <p><?php echo e($status->text); ?></p>
                        </div>
                        <div class="text-end">
                            <a href="<?php echo e(route('comment', $status->id)); ?>" class="btn btn-secondary">Comment</a>
                        </div>
                            <p><strong>Comment :</strong></p>
                            <?php $__currentLoopData = $status->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p><strong><?php echo e($item->user->nama_depan); ?> :</strong></p>
                            <p><?php echo e($item->text); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                    </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Christoper Lim\Herd\Facebook\resources\views/home.blade.php ENDPATH**/ ?>