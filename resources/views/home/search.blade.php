@extends('layouts.layout')

@section('pageTitle', "Search Reviews ")

@section('pageDescription', "Search Reviews ")

@section('content')
    <main class="main">
        <section class="section-all-reviews">
            <div class="container">
                <div class="section__heading">
                    <h2>Search results for:"{{request()->search}}"</h2>
                </div>
                <div class="all-reviews">
                    @if(count($reviews) > 0)
                    @foreach($reviews as $review)
                        <div class="card">
                            <div class="card__image"><img src="{{$review->thumbnail_url}}" alt="site image"></div>
                            <div class="card__content">
                                <div class="card__heading">{{$review->title}}</div>
                                <div class="card__stars">
                                    @php
                                        $persent = ($review->rate / 5 * 100);
                                    @endphp
                                    <div class="star-rating"><span style="width:{{$persent}}%"></span></div>
                                    <div class="card__value">{{$review->rate}}/5</div>
                                </div>
                                <div class="card__buttons"><a class="btn btn--trsp" href="{{route('show.review', $review->slug)}}/">Read review</a></div>
                            </div>
                        </div>
                    @endforeach
                    @else
                        No Results ;(
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection


