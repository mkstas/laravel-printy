<?php $__env->startSection('title'); ?>
    <?php
        $title = "$product->name $product->model";
    ?>
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="product">
        <picture class="product__picture">
            <img class="product__img" src="/img/products/<?php echo e($product->image); ?>" alt="<?php echo e($title); ?>" title="<?php echo e($title); ?>">
        </picture>

        <div class="product__description">
            <h1 class="product__title"><?php echo e($title); ?></h1>
            <h2 class="product__subtitle"><?php echo e($product->category->name); ?></h2>

            <div class="product__row">
                <span class="product__price"><?php echo e($product->price); ?> ₽</span>
                <form action="<?php echo e(route('add_cart', $product)); ?>" method="post">
                    <button class="product__button" type="submit">Добавить в корзину</button>
                    <?php echo csrf_field(); ?>
                </form>
            </div>

            <p class="product__text"><?php echo e($product->description); ?></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\printy.loc\resources\views/product.blade.php ENDPATH**/ ?>