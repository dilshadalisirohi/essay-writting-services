<section class="section-comment" id="section-comment">
    <div class="container">
        <div class="section__heading">
            <h2>Comments</h2>
        </div>
        <div class="section-reviews">
            @php
                if (isset($review)) {
                    $entity = $review;
                } else {
                    $entity = $article;
                }
            @endphp
            @foreach ($entity->comments->where('status', 1) as $comment)
                <div class="review">
                    <!-- <div class="review__image"><img src="{{ asset('img/review-image.jpg') }}">
                        </div> -->

                    <div class="review__rating">
                        @php
                            $persent = ($comment->rating / 5) * 100;
                        @endphp
                        <div class="star-rating"><span style="width:{{ $persent }}%"></span></div>
                        <div class="rating__value">{{ $comment->rating }}/5</div>
                    </div>

                    <div class="review__wrap">
                        <div class="review__text ShowContent">
                            <p>{{ $comment->body }}</p>
                        </div>
                        <div class="review__bottom">
                            <div class="review__bottom-wrap">
                                <div class="review__author">By: {{ $comment->name }}</div>
                                <div class="review__date">{{ $comment->created_at->toFormattedDateString() }}</div>
                            </div>
                        </div>
                    </div>

                    <a href="javascript:void();" class="review__link">read more</a>


                </div>
            @endforeach
        </div>
    </div>

    <div class="load_more ShowContent">
        <span> <a href="javascript:void();" class='load-btn'>Load More</a> </span>

    </div>
</section>
@if (isset($entity->comments))
    <!-- SEO script for comments will be added later -->

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Organization",
    "@id": "{{url()->current()}}/",
    "name": "{{$entity->title}}",
    "url": "{{$entity->reff_link}}",
    "image": {
        "@type": "ImageObject",
        "url": "{{$entity->thumbnail_url}}",
        "width": 580,
        "height": 296
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "worstRating": "1",
        "bestRating" : "5",
        "ratingValue": "{{$entity->rate}}",
        "reviewCount": "{{count($entity->comments->where('status', 1)) + 1}}"
    }
        ,
        "review": [
                {
            "@type": "Review",
            "itemReviewed": {
                "@type": "Organization",
                "image" : "{{$entity->thumbnail_url}}",
                "name": "{{$entity->title}}"
            },
            "author": {
                "@type": "Person",
                "name": "Davy Jones"
            },
            "reviewRating": {
                "@type": "Rating",
                "ratingValue": "{{$entity->rate}}"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Globalhack",
                "sameAs": "https://globalhack.org"
            },
            "datePublished" : "{{$entity->created_at->toFormattedDateString()}}",
            "reviewBody" : "{{strip_tags($entity->short_description)}}"
        },
                    @foreach($entity->comments->where('status', 1) as $comment)
                    {
            "@type": "Review",
            "itemReviewed": {
                "@type": "Organization",
                "image" : "{{$comment->commentable->thumbnail_url}}",
                "name": "{{$comment->commentable->title}}"
            },
            "author": {
                "@type": "Person",
                "name": "{{ $comment->name }}"
            },
            "reviewRating": {
                "@type": "Rating",
                "ratingValue": "{{ $comment->rating }}"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Globalhack",
                "sameAs": "https://globalhack.org"
            },
            "datePublished" : "{{$comment->created_at->toFormattedDateString()}}",
            "reviewBody" : "{{ $comment->body }}"
        @if($loop->last)
            }
@else
            },
@endif
@endforeach
            ]
    }
</script>
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script>
    $(".review__link").on('click', function() {
        $($(this).parent().get(0).querySelector(".review__text")).toggleClass("ShowContent");
        let replaceText = $($(this).parent().get(0).querySelector(".review__text")).hasClass("ShowContent") ?
            "Read More" : "Read Less";
        $(this).text(replaceText);
    })
</script>

<script>
    $(function onLoad() {
        $(".section-reviews").each(function(e) {
            let $item = $(this).find(".review");
            if ($item.length <= 3) return;
            $item.slice(3).hide();
        });
    });

    $(".load-btn").on('click', function() {

        if ($(".load_more").hasClass("ShowContent")) {
            $(".load-btn").text(' Show Less');
            $(".section-reviews").each(function(e) {
                let $item = $(this).find(".review");
                $item.show();
            });
        } else {
            $(".load-btn").text('Load More');
            $(".section-reviews").each(function(e) {
                let $item = $(this).find(".review");
                if ($item.length <= 3) return;
                $item.slice(3).hide();
            });
        }
        $(".load_more").toggleClass("ShowContent");
    });
</script>
