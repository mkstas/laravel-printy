<?php $__env->startSection('header'); ?>
    <header class="header">
        <span class="header-logo">
            <a href="<?php echo e(route('about_us')); ?>">
                <img src="/img/icons/logo-light.svg" alt="Логотип: Printy Shop">
            </a>
        </span>

        <nav class="header-nav">
            <ul class="header-nav__list">
                <li class="header-nav__item">
                    <a class="header-nav__link" href="<?php echo e(route('catalog')); ?>">Каталог</a>
                </li>
                <li class="header-nav__item">
                    <a class="header-nav__link" href="<?php echo e(route('cart')); ?>">Корзина</a>
                </li>
                <li class="header-nav__item">
                    <a class="header-nav__link" href="<?php echo e(route('place')); ?>">Контакты</a>
                </li>
            </ul>
        </nav>

        <ul class="header-contacts">
            <li class="header-contacts__item">
                <a class="header-contacts__link" href="tel:+78007628723">+7 (800) 762-87-23</a>
            </li>
            <li class="header-contacts__item">
                <a class="header-contacts__link" href="mailto:printy.shop@gmail.com">printy.shop@gmail.com</a>
            </li>
        </ul>
    </header>
<?php /**PATH D:\OSPanel\domains\printy.loc\resources\views/inc/header.blade.php ENDPATH**/ ?>