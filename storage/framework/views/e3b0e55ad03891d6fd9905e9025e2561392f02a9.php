<?php $__env->startSection('title'); ?>
    Каталог
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="main-catalog catalog">
        <div class="catalog-filter filter">
            <form class="filter__form" action="<?php echo e(route('filter')); ?>">
                <h3 class="filter__title">Фильтр</h3>

                <div class="filter__item">
                    <h5 class="filter__subtitle">Категории</h5>

                    <div class="filter__inputs">
                        <div class="filter__input">
                            <input class="filter__radio" id="category-all" type="radio" value="all" name="category" checked>
                            <label class="filter__text" for="category-all">Все категории</label>
                        </div>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="filter__input">
                                <input class="filter__radio" id="category-<?php echo e($category->id); ?>" type="radio" value="<?php echo e($category->id); ?>" name="category">
                                <label class="filter__text" for="category-<?php echo e($category->id); ?>"><?php echo e($category->name); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="filter__item">
                    <h5 class="filter__subtitle">Цена</h5>
                    <div class="filter__inputs">
                        <div class="filter__input">
                            <input class="filter__radio" id="poor" type="radio" value="asc" name="price" checked>
                            <label class="filter__text" for="poor">Сначала дешевые</label>
                        </div>

                        <div class="filter__input">
                            <input class="filter__radio" id="rich" type="radio" value="desc" name="price">
                            <label class="filter__text" for="rich">Сначала дорогие</label>
                        </div>
                    </div>
                </div>

                <button class="filter__button" type="submit">Применить</button>
            </form>
        </div>

        <div class="catalog-products products">
            <h1 class="products__title">Каталог</h1>

            <div class="products__cards cards">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="cards__card card">
                        <picture class="card__picture">
                            <img class="card__img" src="/img/products/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?> <?php echo e($product->model); ?>" title="<?php echo e($product->name); ?> <?php echo e($product->model); ?>">
                        </picture>

                        <div class="card__description">
                            <div class="card__description-top">
                                <h3 class="card__title"><?php echo e($product->name); ?> <?php echo e($product->model); ?></h3>
                                <p class="card__type"><?php echo e($product->category->name); ?></p>
                            </div>

                            <div class="card__description-bottom">
                                <p class="card__price"><?php echo e($product->price); ?> ₽</p>
                                <a class="card__button" href="<?php echo e(route('product', [$product->id, $product->name, $product->model])); ?>">Подробнее</a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\printy.loc\resources\views/catalog.blade.php ENDPATH**/ ?>