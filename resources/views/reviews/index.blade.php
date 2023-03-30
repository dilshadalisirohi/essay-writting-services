@extends('layouts.layout')

@section('pageTitle', 'All Reviews')

@section('pageDescription', 'Reviews description')

@section('content')
    <main class="main">
        <section class="content-header content-header--reviews">
            <div class="container">
                <section class="section">
                    <div class="content-header__heading">
                        <h1>Top 5 Writing Services</h1>
                    </div>
                    @include('partials/main-top5-services')
                </section>
            </div>
        </section>
        <section class="section-all-reviews">
            <div class="container">
                <div class="section__heading">
                    <h2>All Writing Services</h2>
                </div>
                <div class="section__subheading">Check the list of the best writing services</div>
                <div class="all-reviews">
                    @foreach ($reviews->where('status', 1) as $review)
                        <div class="card">
                            <div class="card__image"><img src="{{ $review->thumbnail_url }}" alt="site image"></div>
                            <div class="card__content">
                                <div class="card__heading">{{ $review->title }}</div>
                                <div class="card__stars">
                                    @php
                                        $persent = ($review->rate / 5) * 100;
                                    @endphp
                                    <div class="star-rating"><span style="width:{{ $persent }}%"></span></div>
                                    <div class="card__value">{{ $review->rate }}/5</div>
                                </div>
                                <div class="card__buttons"><a class="btn btn--trsp"
                                        href="{{ route('show.review', $review->slug) }}/">Read review</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
