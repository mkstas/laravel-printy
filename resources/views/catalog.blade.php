@extends('layouts.default')

@section('title')
    Каталог
@endsection

@section('content')
    <div class="main-catalog catalog">
        <div class="catalog-filter filter">
            <form class="filter__form" action="{{ route('filter') }}">
                <h3 class="filter__title">Фильтр</h3>

                <div class="filter__item">
                    <h5 class="filter__subtitle">Категории</h5>

                    <div class="filter__inputs">
                        <div class="filter__input">
                            <input class="filter__radio" id="category-all" type="radio" value="all" name="category" checked>
                            <label class="filter__text" for="category-all">Все категории</label>
                        </div>
                        @foreach($categories as $category)
                            <div class="filter__input">
                                <input class="filter__radio" id="category-{{ $category->id }}" type="radio" value="{{ $category->id }}" name="category">
                                <label class="filter__text" for="category-{{ $category->id }}">{{ $category->name }}</label>
                            </div>
                        @endforeach
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
                @foreach($products as $product)
                    <article class="cards__card card">
                        <picture class="card__picture">
                            <img class="card__img" src="/img/products/{{ $product->image }}" alt="{{ $product->name }} {{ $product->model }}" title="{{ $product->name }} {{ $product->model }}">
                        </picture>

                        <div class="card__description">
                            <div class="card__description-top">
                                <h3 class="card__title">{{ $product->name }} {{ $product->model }}</h3>
                                <p class="card__type">{{ $product->category->name }}</p>
                            </div>

                            <div class="card__description-bottom">
                                <p class="card__price">{{ $product->price }} ₽</p>
                                <a class="card__button" href="{{ route('product', [$product->id, $product->name, $product->model]) }}">Подробнее</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
@endsection
