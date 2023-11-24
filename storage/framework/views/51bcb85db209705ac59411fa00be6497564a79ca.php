<?php $__env->startSection('title'); ?>
    Корзина
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="confirm">
        <h1 class="confirm__title">Подтверждение заказа</h1>

        <form  class="confirm-form" action="<?php echo e(route('confirm_cart')); ?>" method="post">
            <div class="confirm-form__item">
                <label class="confirm-form__label" for="">Имя*</label>
                <input class="confirm-form__input" type="text" name="name" required>
            </div>

            <div class="confirm-form__item">
                <label class="confirm-form__label" for="">Номер телефона*</label>
                <input class="confirm-form__input" type="text" name="phone" required>
            </div>

            <div class="confirm-form__item">
                <label class="confirm-form__label" for="">Электронная почта</label>
                <input class="confirm-form__input" type="email" name="email">
            </div>

            <button class="confirm-form__button" type="submit">Подтвердить</button>
            <?php echo csrf_field(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\printy.loc\resources\views/confirm.blade.php ENDPATH**/ ?>