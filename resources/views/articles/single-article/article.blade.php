@extends('layouts.layout')

@section('pageTitle', $article->meta_title )

@section('pageDescription', $article->meta_description)

@section('content')
<main class="main">
    <div class="content-header content-header--review article-header" id="js-intro">
        <div class="container">
            <section class="article-section">

                <div class="content-header__content">
                    <div class="section__heading">
                        <h1>{{$article->title}}</h1>
                    </div>
                    <div class="section__date">{{$article->created_at->toFormattedDateString()}}</div>
                </div>
            </section>
        </div>
    </div>

    <div class="section-review">
        <div class="container" id="js-container">
            <div class="wrap">
                <div class="section-review__top">
                    <div class="top-review-block"></div>
                    <div class="section__image">
                        <img src="{{$article->thumbnail_url}}" alt="">
                    </div>
                    <div class="section__text">
                        {!! $article->short_description !!}
                    </div>
                    @if(count($article->pros) > 0)
                    <div class="boxes">
                        <div class="box">
                            <div class="box__heading">Pros
                            </div>
                            <div class="box__content">
                                <div class="box-list">
                                    @foreach($article->pros as $pros)
                                    <div class="box-list__item">
                                        <svg class="svg-sprite-icon icon-circle-check">
                                            <use xlink:href="{{asset('/img/svg/symbol/sprite.svg#circle-check')}}" />
                                        </svg>
                                        {{$pros->value}};

                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="box box--red">
                            <div class="box__heading">Cons</div>
                            <div class="box__content">
                                <div class="box-list">
                                    @foreach($article->cons as $cons)
                                    <div class="box-list__item">
                                        <svg class="svg-sprite-icon icon-circle-close">
                                            <use xlink:href="{{asset('/img/svg/symbol/sprite.svg#circle-close')}}" />
                                        </svg>
                                        {{$cons->value}};
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
                        {!! $article->description !!}
                    </div>
                    @if (count($article->faqs) > 0)
                    <div class="section-faq-block">
                        <div class="bottom-review-block"></div>
                        <section class="section">
                            <div class="section__heading">
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <div class="section__subheading">You ask, I answer</div>
                            <table class="faq-table faq-table--no-img">
                                <tbody class="faq-table__body">
                                    @foreach($article->faqs as $faq)
                                    <tr class="faq-table__row">
                                        <td class="faq-table__cell">{{$faq->title}}</td>
                                        <td class="faq-table__cell">
                                            {{$faq->description}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <script type="application/ld+json">
                            {
                                "@context": "https://schema.org",
                                "@type": "FAQPage",
                                "mainEntity": [

                                    @foreach($article->faqs as $faq) {

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
                    <section class="section-form">
                        <div class="section__heading">
                            <h2>Write a review</h2>
                        </div>
                        <div class="section__subheading">Your email address will not be published. Required fields are
                            marked *</div>
                        <form class="form form--review" method="post"
                            action="{{route('store-comment', $article->slug)}}">
                            @csrf
                            @method('POST')
                            <div class="form__group form__group--name">
                                <label class="form__label" for="name">Your Name</label>
                                <input class="form__input" type="text" name="name">
                            </div>
                            <div class="form__group form__group--email">
                                <label class="form__label" for="name">Email</label>
                                <input class="form__input" type="text" name="email">
                            </div>
                            <div class="form-item">
                                <input name="url" type="hidden" value="{{url()->current()}}">
                            </div>
                            <div class="form__group form__group--comment">
                                <label class="form__label" for="name">Your comment</label>
                                <textarea class="form__message" name="body" type="text"></textarea>
                            </div>
                             <div class="form-item">
                                <input name="url" type="hidden" value="{{url()->current()}}">
                            </div> 
                             <div class="form__group form__group--rating">
                                <label class="form__label_rating" for="name">Rating: </label>

                                <fieldset class="rating_field" name="rating_stars">
                                    <input type="radio" id="rating10" name="rating" value="5"
                                        onclick="setStarRating(5)" /><label for="rating10" title="5 stars"></label>
                                    <input type="radio" id="rating9" name="rating" value="4.5"
                                        onclick="setStarRating(4.5)" /><label class="half" for="rating9"
                                        title="4 1/2 stars"></label>
                                    <input type="radio" id="rating8" name="rating" value="4"
                                        onclick="setStarRating(4)" /><label for="rating8" title="4 stars"></label>
                                    <input type="radio" id="rating7" name="rating" value="3.5"
                                        onclick="setStarRating(3.5)" /><label class="half" for="rating7"
                                        title="3 1/2 stars"></label>
                                    <input type="radio" id="rating6" name="rating" value="3"
                                        onclick="setStarRating(3)" /><label for="rating6" title="3 stars"></label>
                                    <input type="radio" id="rating5" name="rating" value="2.5"
                                        onclick="setStarRating(2.5)" /><label class="half" for="rating5"
                                        title="2 1/2 stars"></label>
                                    <input type="radio" id="rating4" name="rating" value="2"
                                        onclick="setStarRating(2)" /><label for="rating4" title="2 stars"></label>
                                    <input type="radio" id="rating3" name="rating" value="1.5"
                                        onclick="setStarRating(1.5)" /><label class="half" for="rating3"
                                        title="1 1/2 stars"></label>
                                    <input type="radio" id="rating2" name="rating" value="1"
                                        onclick="setStarRating(1)" checked /><label for="rating2" title="1 star"></label>
                                </fieldset>
                                <div id="rating_value" value="1"> 1/5</div>
                            </div> 
                            <button class="btn btn--blue form__button" type="submit">Submit</button>
                        </form>
                    </section>
                    @if(count($article->comments) > 0)
                    @include('partials.comments')
                    @endif
                    @if(count($article->relatedArticles) > 0)
                    @include('partials.related-articles')
                    @endif
                </div>
                <aside class="sidebar" id="sidebar">
                    @include('partials.services-list')
                </aside>
            </div>
        </div>
    </div>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Article",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{route('show.article', $article->slug)}}/"
        },
        "author": {
            "@type": "Person",
            "name": "Davy Jones"
        },
        "publisher": {
            "@type": "Organization",
            "name": "GlobalHack.org",
            "logo": {
                "@type": "ImageObject",
                "url": "https://globalhack.org/img/loogoo.jpg"
            }
        },
        "headline": "{{$article->title}}",
        "image": "{{$article->thumbnail_url}}",
        "datePublished": "{{$article->created_at->toFormattedDateString()}}",
        "dateModified": "{{$article->updated_at->toFormattedDateString()}}"
    }
    </script>

    <script>
function setStarRating(starValue) {
    let ratingValue = document.getElementById('rating_value');
    ratingValue.innerHTML = starValue + '/5';
}
</script>
</main>
@endsection
