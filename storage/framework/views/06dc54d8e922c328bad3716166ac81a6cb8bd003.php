<?php $__env->startSection('title'); ?>
    О нас
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="main-about about">
        <div class="about__text">
            <h1 class="about__title">Printy Shop</h1>

            <p class="about__subtile">Современные принтеры по доступным ценам — наилучший выбор!</p>
        </div>

        <picture class="about__picture">
            <img class="about__img" src="/img/about/printer.jpg" alt="">
        </picture>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\printy.loc\resources\views/about.blade.php ENDPATH**/ ?>