@extends('layouts.frontend_layout')
@section('title', 'News')

@section('content')
    <main class="main">

        <section class="news__page">
            <div class="container">
                <h3 class="news__page-title page__title">
                    {{ $news->title }}
                </h3>
                <img class="news__page-img" src="{!! $news->inner_image !!}" alt="">
                <p class="news__page-date">
                    {{ $news->date }}
                </p>
                <p class="news__page-text">{!! $news->content !!}</p>
            </div>
        </section>

        @include('frontend.form.index')


    </main>

@endsection
