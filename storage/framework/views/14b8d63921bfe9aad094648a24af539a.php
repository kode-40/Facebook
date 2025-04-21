<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?php echo e(asset('index.css')); ?>">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</head>

<body class="bg-light">
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 d-flex align-items-center justify-content-center gap-3">
                    <a href="/"><i class="bi bi-facebook fs-1 text"></i></a>
                    <div class="input-group">
                        <input type="text" class="form-control rounded-5" placeholder="Cari di Facebook"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <nav class="col-6 d-flex align-items-center justify-content-center gap-5">
                    <?php if (isset($component)) { $__componentOriginal5ddd533ec2dd5109be6e5318eb469594 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5ddd533ec2dd5109be6e5318eb469594 = $attributes; } ?>
<?php $component = App\View\Components\SidebarLinkKiri::resolve(['link' => ''.e(route('register')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-link-kiri'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarLinkKiri::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bi-house-door-fill','title' => 'Home']); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5ddd533ec2dd5109be6e5318eb469594)): ?>
<?php $attributes = $__attributesOriginal5ddd533ec2dd5109be6e5318eb469594; ?>
<?php unset($__attributesOriginal5ddd533ec2dd5109be6e5318eb469594); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5ddd533ec2dd5109be6e5318eb469594)): ?>
<?php $component = $__componentOriginal5ddd533ec2dd5109be6e5318eb469594; ?>
<?php unset($__componentOriginal5ddd533ec2dd5109be6e5318eb469594); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal5ddd533ec2dd5109be6e5318eb469594 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5ddd533ec2dd5109be6e5318eb469594 = $attributes; } ?>
<?php $component = App\View\Components\SidebarLinkKiri::resolve(['link' => ''.e(route('login')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-link-kiri'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarLinkKiri::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bi-people-fill','title' => 'Friends']); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5ddd533ec2dd5109be6e5318eb469594)): ?>
<?php $attributes = $__attributesOriginal5ddd533ec2dd5109be6e5318eb469594; ?>
<?php unset($__attributesOriginal5ddd533ec2dd5109be6e5318eb469594); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5ddd533ec2dd5109be6e5318eb469594)): ?>
<?php $component = $__componentOriginal5ddd533ec2dd5109be6e5318eb469594; ?>
<?php unset($__componentOriginal5ddd533ec2dd5109be6e5318eb469594); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal5ddd533ec2dd5109be6e5318eb469594 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5ddd533ec2dd5109be6e5318eb469594 = $attributes; } ?>
<?php $component = App\View\Components\SidebarLinkKiri::resolve(['link' => ''.e(route('register')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-link-kiri'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarLinkKiri::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bi-house-door-fill','title' => 'Home']); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5ddd533ec2dd5109be6e5318eb469594)): ?>
<?php $attributes = $__attributesOriginal5ddd533ec2dd5109be6e5318eb469594; ?>
<?php unset($__attributesOriginal5ddd533ec2dd5109be6e5318eb469594); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5ddd533ec2dd5109be6e5318eb469594)): ?>
<?php $component = $__componentOriginal5ddd533ec2dd5109be6e5318eb469594; ?>
<?php unset($__componentOriginal5ddd533ec2dd5109be6e5318eb469594); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal5ddd533ec2dd5109be6e5318eb469594 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5ddd533ec2dd5109be6e5318eb469594 = $attributes; } ?>
<?php $component = App\View\Components\SidebarLinkKiri::resolve(['link' => ''.e(route('login')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-link-kiri'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarLinkKiri::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bi-people-fill','title' => 'Friends']); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5ddd533ec2dd5109be6e5318eb469594)): ?>
<?php $attributes = $__attributesOriginal5ddd533ec2dd5109be6e5318eb469594; ?>
<?php unset($__attributesOriginal5ddd533ec2dd5109be6e5318eb469594); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5ddd533ec2dd5109be6e5318eb469594)): ?>
<?php $component = $__componentOriginal5ddd533ec2dd5109be6e5318eb469594; ?>
<?php unset($__componentOriginal5ddd533ec2dd5109be6e5318eb469594); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal5ddd533ec2dd5109be6e5318eb469594 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5ddd533ec2dd5109be6e5318eb469594 = $attributes; } ?>
<?php $component = App\View\Components\SidebarLinkKiri::resolve(['link' => ''.e(route('register')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-link-kiri'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarLinkKiri::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bi-house-door-fill','title' => 'Home']); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5ddd533ec2dd5109be6e5318eb469594)): ?>
<?php $attributes = $__attributesOriginal5ddd533ec2dd5109be6e5318eb469594; ?>
<?php unset($__attributesOriginal5ddd533ec2dd5109be6e5318eb469594); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5ddd533ec2dd5109be6e5318eb469594)): ?>
<?php $component = $__componentOriginal5ddd533ec2dd5109be6e5318eb469594; ?>
<?php unset($__componentOriginal5ddd533ec2dd5109be6e5318eb469594); ?>
<?php endif; ?>                
                </nav>
                <div class="col-3 d-flex align-items-center justify-content-center gap-3">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <a href="/"><i class="bi bi-person-circle fs-2 text"></i></a>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-4">
        <div class="row">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</body>

</html><?php /**PATH C:\Users\Christoper Lim\Herd\Facebook\resources\views/layouts/main.blade.php ENDPATH**/ ?>