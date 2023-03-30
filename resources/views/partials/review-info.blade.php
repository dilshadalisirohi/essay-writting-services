<ul class="review-info">
    <li class="review-info__item">
        <span>
            <svg class="review-info__icon review-info__icon--refresh" aria-hidden="true">
                <use xlink:href="../img/svg/symbol/sprite.svg#icon-refresh"></use>
            </svg>
            <span>Updated: <b>{{ $review->updated_at->toFormattedDateString() }}</b></span>
        </span>
    </li>
    <li class="review-info__item">
        <span>
            <svg class="review-info__icon review-info__icon--comment" aria-hidden="true">
                <use xlink:href="../img/svg/symbol/sprite.svg#icon-comment"></use>
            </svg>
            <span>Based on <b>
                    <a href="#section-comment">{{ count($review->comments->where('status', 1)) + 1 }} review(s)</a>
                </b></span>
        </span>
    </li>
    <li class="review-info__item">
        <span>
            <svg class="review-info__icon review-info__icon--pen" aria-hidden="true">
                <use xlink:href="../img/svg/symbol/sprite.svg#icon-pen"></use>
            </svg>
            <span>Author: <b>{{ $review->author ?? 'Davy Jones' }}</b></span>
        </span>
    </li>
</ul>
