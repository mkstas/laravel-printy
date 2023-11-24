@extends('layouts.default')

@section('title')
    Корзина
@endsection

@section('content')
    <div class="cart">
        <h1 class="cart__title">Корзина</h1>
        <div class="cart__order order">
            @if($order == null)
                <div class="order-empty">
                    <p class="order-empty__text">Корзина пуста</p>
                    <a class="order-empty__link" href="{{ route('catalog') }}">Каталог</a>
                </div>
            @else
                @foreach($order->products as $product)
                    <article class="order-card">
                        <picture class="order-card__picture">
                            <img class="order-card__img" src="/img/products/{{ $product->image }}" alt="{{ $product->name }} {{ $product->model }}" title="{{ $product->name }} {{ $product->model }}">
                        </picture>

                        <a class="order-card__product" href="{{ route('product', $product) }}">{{ $product->name }} {{ $product->model }}</a>

                        <div class="order-card__count">
                            <span class="order-card__number">{{ $product->pivot->count }}</span>
                            <form action="{{ route('add_cart', $product) }}" method="post">
                                <button type="submit" class="order-card__button order-card__button_plus">+</button>
                                @csrf
                            </form>
                            <form action="{{ route('remove_cart', $product) }}" method="post">
                                <button type="submit" class="order-card__button order-card__button_minus">-</button>
                                @csrf
                            </form>
                        </div>

                        <div class="order-card__numbers">
                            <span class="order-card__price">{{ $product->price }} ₽</span>
                            <span class="order-card__cost">{{ $product->getPriceForCount() }} ₽</span>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="order-total">
                <p class="order-total__text">Общая стоимость: {{ $order->getFullCost() }} ₽</p>

                <a class="order-total__button" href="{{ route('place_cart') }}">Оформить заказ</a>
            </div>
        @endif
    </div>
@endsection
