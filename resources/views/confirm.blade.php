@extends('layouts.default')

@section('title')
    Корзина
@endsection

@section('content')
    <div class="confirm">
        <h1 class="confirm__title">Подтверждение заказа</h1>

        <form  class="confirm-form" action="{{ route('confirm_cart') }}" method="post">
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
            @csrf
        </form>
    </div>
@endsection
