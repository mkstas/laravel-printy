<?php $__env->startSection('title'); ?>
    Контакты
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="main-place place">
        <div class="place__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d398.05514595012585!2d50.826332041373874!3d61.668122007401266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43f62b4ac7a60473%3A0xca75f5e0f546b3c4!2z0KHQvtC00LXQudGB0YLQstC40LU!5e0!3m2!1sru!2sru!4v1655987481335!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="place__contacts">
            <div class="place__contact">
                <span class="place__label">Адрес:</span>
                <a class="place__link" target="_blank" href="https://www.google.com/maps/place/%D0%A1%D0%BE%D0%B4%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B8%D0%B5/@61.66797,50.826219,18z/data=!4m5!3m4!1s0x0:0xca75f5e0f546b3c4!8m2!3d61.66797!4d50.8262189?hl=ru">ул. Первомайская, д. 70, Сыктывкар, Респ. Коми</a>
            </div>

            <div class="place__contact">
                <span class="place__label">Контактный телефон:</span>
                <a class="place__link" href="tel:+78007628723">+7 (800) 762-87-23</a>
            </div>

            <div class="place__contact">
                <span class="place__label">Электронная почта:</span>
                <a class="place__link" href="mailto:printy.shop@gmail.com">printy.shop@gmail.com</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\printy.loc\resources\views/place.blade.php ENDPATH**/ ?>