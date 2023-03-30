@extends('layouts.layout')

@section('pageTitle', 'Articles')

@section('pageDescription', 'Articles description')

@section('content')
    <main class="main">
        <section class="content-header content-header--reviews">
            <div class="container">
                <section class="section">
                    <div class="content-header__heading articles-blog">
                        <h1>Articles</h1>
                    </div>
                </section>
            </div>
        </section>
        <section class="section-all-articles">
            <div class="container">
                <div class="all-articles">
                    @if (count($articles) > 0)
                        @foreach($articles as $article)
                            <div class="card">
                                <div class="card__image"><img src="{{$article->thumbnail_url}}" alt="site image"></div>
                                <div class="card__content">
                                    <div class="articles__heading">{{$article->title}}</div>
                                    <div class="card__buttons">
                                        <a class="btn btn--trsp" href="{{route('show.article', $article->slug)}}/">Read article</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div>
                            No Articles...
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection
