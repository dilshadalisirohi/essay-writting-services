<section class="section-related">
    <div class="section__heading">
        <h2>Related articles</h2>
    </div>
    <div class="section__subheading">You might also be interested in</div>
    <div class="columns columns--three">
        @foreach($article->relatedArticles as $article)
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
    </div>
</section>
