<?php $__env->startSection('title'); ?>
    Корзина
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="cart">
        <h1 class="cart__title">Корзина</h1>
        <div class="cart__order order">
            <?php if($order == null): ?>
                <div class="order-empty">
                    <p class="order-empty__text">Корзина пуста</p>
                    <a class="order-empty__link" href="<?php echo e(route('catalog')); ?>">Каталог</a>
                </div>
            <?php else: ?>
                <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="order-card">
                        <picture class="order-card__picture">
                            <img class="order-card__img" src="/img/products/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?> <?php echo e($product->model); ?>" title="<?php echo e($product->name); ?> <?php echo e($product->model); ?>">
                        </picture>

                        <a class="order-card__product" href="<?php echo e(route('product', $product)); ?>"><?php echo e($product->name); ?> <?php echo e($product->model); ?></a>

                        <div class="order-card__count">
                            <span class="order-card__number"><?php echo e($product->pivot->count); ?></span>
                            <form action="<?php echo e(route('add_cart', $product)); ?>" method="post">
                                <button type="submit" class="order-card__button order-card__button_plus">+</button>
                                <?php echo csrf_field(); ?>
                            </form>
                            <form action="<?php echo e(route('remove_cart', $product)); ?>" method="post">
                                <button type="submit" class="order-card__button order-card__button_minus">-</button>
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>

                        <div class="order-card__numbers">
                            <span class="order-card__price"><?php echo e($product->price); ?> ₽</span>
                            <span class="order-card__cost"><?php echo e($product->getPriceForCount()); ?> ₽</span>
                        </div>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="order-total">
                <p class="order-total__text">Общая стоимость: <?php echo e($order->getFullCost()); ?> ₽</p>

                <a class="order-total__button" href="<?php echo e(route('place_cart')); ?>">Оформить заказ</a>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\printy.loc\resources\views/cart.blade.php ENDPATH**/ ?>