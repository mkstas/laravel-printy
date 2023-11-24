@extends('layouts.default')

@section('title')
    О нас
@endsection

@section('content')
    <div class="main-about about">
        <div class="about__text">
            <h1 class="about__title">Printy Shop</h1>

            <p class="about__subtile">Современные принтеры по доступным ценам — наилучший выбор!</p>
        </div>

        <picture class="about__picture">
            <img class="about__img" src="/img/about/printer.jpg" alt="">
        </picture>

    </div>
@endsection
