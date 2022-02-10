@extends('layouts.frontend_layout')
@section('title', 'Project')

@section('content')
    <main class="main">

        <section class="news__page">
            <div class="container">
                <h3 class="news__page-title page__title">
                    {{ $project->title }}
                </h3>
                <p class="news__page-date">
                    {{ $project->date }}
                </p>
                <p class="news__page-text">{!! $project->content !!}</p>
            </div>
        </section>

        @include('frontend.form.index')


    </main>

@endsection
