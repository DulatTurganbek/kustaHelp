{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}

{{--@foreach($banners as $banner)--}}
{{--    <div class="div">--}}
{{--        <h2>{{ $banner->title }}</h2>--}}
{{--        <p>{{$banner->description}}</p>--}}
{{--        <p>{{$banner->link}}</p>--}}
{{--    </div>--}}
{{--@endforeach--}}

{{--</body>--}}
{{--</html>--}}
@extends('layouts.frontend_layout')
@section('title', 'Home')

@section('content')
    <main class="main">

        <section class="intro" style="background-image: url('{{ asset('front/images/bg/intro-bg.jpg') }}')">
            <div class="intro-box">
                <div class="container">
                    <div class="intro__slider">
                        @foreach($banners as $banner)
                        <div class="intro__content">
                            <h1 class="intro__content-title">
                                {{ $banner->title }}<span>ФОНД</span>
                            </h1>
                            <p class="intro__content-text page__text">
                                {{ $banner->description }}
                            </p>
                            <div class="intro__content-bottom">
                                <button class="intro__content-btn page__btn">
                                    <a href="{{ $banner->link }}">Подробнее</a>
                                </button>
                                <div class="intro__content-social">
                                    <a class="intro__content-link intro__content-youtube" href="#?">
                                        <svg class="icon" width="22" height="15.9">
                                            <use xlink:href="/front/images/icons/sprite.svg#youtube"></use>
                                        </svg>
                                    </a>
                                    <a class="intro__content-link intro__content-instagram" href="#?">
                                        <svg class="icon" width="19" height="19">
                                            <use xlink:href="/front/images/icons/sprite.svg#instagram"></use>
                                        </svg>
                                    </a>
                                    <a class="intro__content-link intro__content-facebook" href="#?">
                                        <svg class="icon" width="11" height="21">
                                            <use xlink:href="/front/images/icons/sprite.svg#facebook"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="about" style="background-image: url('{{ asset('front/images/bg/about-bg.jpg') }}')">
            <div class="container">
                <div class="about__inner" id="about">
                    <img class="about__img" src="{{ $about->home_image }}" alt="">
                    <div class="about__content">
                        <h3 class="about__title page__title">
                            О нашем фонде
                        </h3>
                        <p class="about__text page__text">
                            {{ $about->description }}
                        </p>
                        <div class="about__item">
                            <img class="about__item-img" src="/front/images/icons/about-item-1.svg" alt="">
                            <div class="about__item-content">
                                <h5 class="about__item-title">
                                    {{ $about->first_title }}
                                </h5>
                                <p class="about__item-text page__text">
                                    {{ $about->first_content }}
                                </p>
                            </div>
                        </div>
                        <div class="about__item">
                            <img class="about__item-img" src="/front/images/icons/about-item-2.svg" alt="">
                            <div class="about__item-content">
                                <h5 class="about__item-title">
                                    {{ $about->second_title }}
                                </h5>
                                <p class="about__item-text page__text">
                                    {{ $about->second_content }}
                                </p>
                            </div>
                        </div>
                        <div class="about__item">
                            <img class="about__item-img" src="/front/images/icons/about-item-3.svg" alt="">
                            <div class="about__item-content">
                                <h5 class="about__item-title">
                                    {{ $about->third_title }}
                                </h5>
                                <p class="about__item-text page__text">
                                    {{ $about->third_content }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="news" style="background-image: url({{ asset('front/images/bg/news-bg.jpg') }})">
            <div class="container">
                <h3 class="news__title page__title">
                    Новости фонда
                </h3>
                <div class="news__inner">
                    @foreach($all_news as $news)
                    <div class="news__item">
                        <img class="news__item-img" src="{!! $news['image'] !!}" alt="">
                        <h6 class="news__item-title">
                            {{ $news->title }}                        </h6>
                        <p class="news__item-date">
                            {{ $news->created_at }}
                        </p>
                        <p class="news__item-text page__text">
                            {{ $news->description }}
                        </p>
                        <a class="news__item-link" href="{{ route('show-news', ['id' => $news['id']]) }}">
                            Подробнее
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="projects"  style="background-image: url({{ asset('front/images/bg/projects-bg.jpg') }})">
            <div class="container">
                <h3 class="projects__title page__title">
                    НАШИ ПРОЕКТЫ
                </h3>
                <div class="projects__slider" id="projects">
                    @foreach($projects as $project)
                    <div class="projects__item">
                        <img class="projects__item-img" src="/front/images/img/projects-1.jpg" alt="">
                        <div class="projects__item-content">
                            <h6 class="projects__item-title">
                                 {{ $project->title }}
                            </h6>
                            <p class="projects__item-text page__text">
                                {{ $project->description }}
                            </p>
                            <div class="projects__item-button">
                                <a class="projects__item-link page__btn" href="#?">
                                    Пожертвовать
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <ul class="slick-dots">
                    <button class="arrow arrow-next">
                        <img src="/front/images/icons/slider-arrow.svg" alt="">
                    </button>
                    <button class="arrow arrow-prev">
                        <img src="/front/images/icons/slider-arrow.svg" alt="">
                    </button>
                </ul>
            </div>
        </section>

        <section class="reports">
            <div class="container">
                <h3 class="reports__title page__title" id="reports">
                    Годовые отчеты
                </h3>
                <div class="reports__inner">
                    <div class="reports__item">
                        <div class="reports__item-title">
                            Годовой отчет ЧФ
                            "KUSTO.HELP" за 2020 год.
                        </div>
                        <a class="reports__item-download" href="/front/images/bg/intro-bg.jpg" download="">
                            Скачать
                        </a>
                    </div>
                    <div class="reports__item">
                        <div class="reports__item-title">
                            Отчет №2 за период
                            с 26 апреля по 31 Мая 2020
                        </div>
                        <a class="reports__item-download" href="/front/images/bg/intro-bg.jpg" download="">
                            Скачать
                        </a>
                    </div>
                    <div class="reports__item">
                        <div class="reports__item-title">
                            Отчет № 1
                            от 25.05.2020 - 29.05.2020
                        </div>
                        <a class="reports__item-download" href="/front/images/bg/intro-bg.jpg" download="">
                            Скачать
                        </a>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.form.index')

    </main>

@endsection
