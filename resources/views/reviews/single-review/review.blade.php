@extends('layouts.layout')
@php
    $countReviews = count($review->comments->where('status', 1)) + 1;
@endphp
@section('pageTitle', $review->title . ' Review ✪ Read ' . $countReviews . ' Reviews - ' . now()->year)

@section('pageDescription', $review->meta_description)

@section('content')
    <main class="main">
        <div class="content-header content-header--review" id="js-intro">
            <div class="container">
                <section class="section">
                    <div class="content-header-wrapper">
                        <div class="section__heading">
                            <h1>{{ $review->title }} Review</h1>
                            <div class="rating">
                                <div class="rating-stars-div">
                                    @php
                                        $persent = ($review->rate / 5) * 100;
                                    @endphp
                                    <div class="rating__value">{{ $review->rate }}/5</div>
                                    <div class="star-rating"><span style="width:{{ $persent }}%"></span></div>
                                </div>
                                <div class="review-info__item">

                                    <svg class="review-info__icon review-info__icon--comment" aria-hidden="true">
                                        <use xlink:href="../img/svg/symbol/sprite.svg#icon-comment"></use>
                                    </svg>
                                    <span>Based on Author and<b>
                                            <a href="#section-comment">{{ count($review->comments->where('status', 1)) + 1 }}
                                                review(s)</a>
                                        </b></span>


                                </div>
                            </div>
                        </div>

                        <div class="content-header-row-two">
                            <div class="picture picture--desktop">
                                <img src="{{ $review->thumbnail_url }}" alt="{{ $review->title }}">
                            </div>
                            <div class="header-offer-items">
                                <div class="header-offer-items-inner">
                                    <ul>
                                        <li>Minimal price per page: <span>{{ $review->price_from }}</span></li>
                                        <li>Deadline: <span>{{ $review->deadline }}</span></li>
                                        <li>Discount: <span>{{ $review->discount }}</span></li>
                                        <li>Refund policy: <span>Yes</span></li>
                                    </ul>
                                </div>
                                <div class="line-divider"></div>
                                <div class="review-info__item" style="padding: 0;">
                                    <svg class="review-info__icon review-info__icon--refresh" aria-hidden="true">
                                        <use xlink:href="../img/svg/symbol/sprite.svg#icon-refresh"></use>
                                    </svg>
                                    <span>Updated: <b>{{ $review->updated_at->toFormattedDateString() }}</b></span>
                                </div>
                            </div>
                            <div class="content-header__content">
                                <div class="review-btns">
                                    <a class="btn btn--gray-trsp" href="#section-form">Write a review</a>
                                    <a class="btn btn--green" href="/go-to/{{ $review->slug }}/" target="_blank"
                                        rel="nofollow noopener noreferrer">Visit site</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                {{-- @include('partials.review-info') --}}
            </div>
        </div>
        <div class="section-review">
            <div class="container" id="js-container">
                <div class="wrap">
                    <div class="section-review__top">
                        <!-- <section class="review-features">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <h2 class="review-features__title">Short info</h2>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <table class="review-features__table">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <tbody>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 @if (isset($review->price_from))
    <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <td>Minimal price per page</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <td><b>${{ $review->price_from }}</b></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           </tr>
    @endif
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             @if (isset($review->deadline))
    <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <td>Deadline</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <td><b>{{ $review->deadline }}</b></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               </tr>
    @endif
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            @if (isset($review->discount))
    <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <td>Discount</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <td><b>{{ $review->discount }}</b></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             </tr>
    @endif
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <td>Refund policy</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <td><b>Yes</b></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </tbody>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </section> -->

                        @include('partials.top-services')

                        @include('partials.table-of-content')
                        @include('partials.banner')

                        <div class="top-review-block"></div>
                        <div class="section__text">
                            <h2 id="Company">Company Overview</h2>
                            <p>{!! $review->short_description !!}</p>
                        </div>
                        @if (count($review->pros) > 0)
                            <div class="boxes">
                                <div class="box">
                                    <div class="box__heading" id="Pros">Pros</div>
                                    <div class="box__content">
                                        <div class="box-list">
                                            @foreach ($review->pros as $pros)
                                                <div class="box-list__item">
                                                    <svg class="svg-sprite-icon icon-circle-check">
                                                        <use
                                                            xlink:href="{{ asset('/img/svg/symbol/sprite.svg#circle-check') }}" />
                                                    </svg>
                                                    {{ $pros->value }};
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="box box--red">
                                    <div class="box__heading">Cons</div>
                                    <div class="box__content">
                                        <div class="box-list">
                                            @foreach ($review->cons as $cons)
                                                <div class="box-list__item">
                                                    <svg class="svg-sprite-icon icon-circle-close">
                                                        <use
                                                            xlink:href="{{ asset('/img/svg/symbol/sprite.svg#circle-close') }}" />
                                                    </svg>
                                                    {{ $cons->value }};
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="section-review__content">
                        <div class="section__text">
                            {!! $review->body !!}
                            <a class="btn btn--green" href="/go-to/{{ $review->slug }}/" target="_blank"
                                rel="nofollow noopener noreferrer">Visit site</a>
                        </div>
                        @if (count($review->faqs) > 0)
                            <div class="section-faq-block">
                                <div class="bottom-review-block"></div>
                                <section class="section">
                                    <div class="section__heading">
                                        <h2 id="Frequently">Frequently Asked Questions</h2>
                                    </div>
                                    <div class="section__subheading">You ask, I answer</div>
                                    <table class="faq-table faq-table--no-img">
                                        <tbody class="faq-table__body">
                                            @foreach ($review->faqs as $faq)
                                                <tr class="faq-table__row">
                                                    <td class="faq-table__cell">{{ $faq->title }}</td>
                                                    <td class="faq-table__cell">
                                                        {{ $faq->description }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- SEO Script will be added later -->
                                    <script type="application/ld+json">
                                {
                                    "@context": "https://schema.org",
                                    "@type": "FAQPage",
                                    "mainEntity": [

                                        @foreach($review->faqs as $faq) {

                                            "@type": "Question",
                                            "name": "{{$faq->title}}",
                                            "acceptedAnswer": {
                                                "@type": "Answer",
                                                "text": "{{$faq->description}}"
                                            }
                                            @if($loop->last)
                                        }
                                        @else
                                    },
                                    @endif
                                    @endforeach
                                ]
                                }
                            </script>


                                </section>
                            </div>
                        @endif
                        @include('partials.comment-form')
                        @if (count($review->comments->where('status', 1)) > 0)
                            @include('partials.comments')
                        @endif
                        @if (count($review->relatedPosts) > 0)
                            @include('partials.related-reviews')
                        @endif
                    </div>
                    <div class="sidebar-new">
                        @include('partials.services-list')

                        <div class="sidebar-trigger">
                            <img class="services-arrow" src="/img/icons/arrow-left.svg" />
                            <p>Top Services</p>
                        </div>
                    </div>
                    {{-- <aside class="sidebar" id="sidebar">
                    </aside> --}}
                </div>
            </div>
        </div>


    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

    <script>
        $(".services-arrow").on("click", function() {
            if ($(".sidebar-new").width() <= 0) {
                $(".sidebar-new").animate({
                    width: "70%"
                }, 250);
            } else {
                $(".sidebar-new").animate({
                    width: 0
                }, 250);
            }
        })
    </script>
@endsection
