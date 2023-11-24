@extends('layouts.default')

@section('title')
    @php
        $title = "$product->name $product->model";
    @endphp
    {{ $title }}
@endsection

@section('content')
    <div class="product">
        <picture class="product__picture">
            <img class="product__img" src="/img/products/{{ $product->image }}" alt="{{ $title }}" title="{{ $title }}">
        </picture>

        <div class="product__description">
            <h1 class="product__title">{{ $title }}</h1>
            <h2 class="product__subtitle">{{ $product->category->name }}</h2>

            <div class="product__row">
                <span class="product__price">{{ $product->price }} ₽</span>
                <form action="{{ route('add_cart', $product) }}" method="post">
                    <button class="product__button" type="submit">Добавить в корзину</button>
                    @csrf
                </form>
            </div>

            <p class="product__text">{{ $product->description }}</p>
        </div>
    </div>
@endsection
