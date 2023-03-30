<section class="section-related">
    <div class="section__heading">
        <h2>Related reviews</h2>
    </div>
    <div class="section__subheading">You might also be interested in</div>
    <div class="columns columns--three">
        @foreach($review->relatedPosts as $review)
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
    </div>
</section>
