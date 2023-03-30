<section class="section-form" id="section-form">
    <div class="section__heading">
        <h2>Write a review</h2>
    </div>
    <div class="section__subheading">Your email address will not be published. Required fields are marked *</div>
    <form class="form form--review" method="post" action="{{route('store-comment', $review->slug)}}">
        @csrf
        @method('POST')
        <div class="form__group form__group--name">
            <label class="form__label" for="name">Your Name*</label>
            <input class="form__input" type="text" name="name" value="{{old('name')}}" required>
        </div>
        <div class="form__group form__group--email">
            <label class="form__label" for="name">Email*</label>
            <input class="form__input" type="text" name="email" value="{{old('email')}}" required>
        </div>
        <div class="form-item">
            <input name="url" type="hidden" value="{{url()->current()}}">
        </div>
        <div class="form__group form__group--comment">
            <label class="form__label" for="name">Your comment*</label>
            <textarea class="form__message" name="body" type="text" required>{{old('body')}}</textarea>
        </div>
        <div class="form-item">
            <input name="url" type="hidden" value="{{url()->current()}}/">
        </div>

        <div class="form__group form__group--rating">
            <label class="form__label_rating" for="name">Rating: </label>

            <fieldset class="rating_field" name="rating_stars">
                <input type="radio" id="rating10" name="rating" value="5" onclick="setStarRating(5)" /><label
                    for="rating10" title="5 stars"></label>
                <input type="radio" id="rating9" name="rating" value="4.5" onclick="setStarRating(4.5)" /><label
                    class="half" for="rating9" title="4 1/2 stars"></label>
                <input type="radio" id="rating8" name="rating" value="4" onclick="setStarRating(4)" /><label
                    for="rating8" title="4 stars"></label>
                <input type="radio" id="rating7" name="rating" value="3.5" onclick="setStarRating(3.5)" /><label
                    class="half" for="rating7" title="3 1/2 stars"></label>
                <input type="radio" id="rating6" name="rating" value="3" onclick="setStarRating(3)" /><label
                    for="rating6" title="3 stars"></label>
                <input type="radio" id="rating5" name="rating" value="2.5" onclick="setStarRating(2.5)" /><label
                    class="half" for="rating5" title="2 1/2 stars"></label>
                <input type="radio" id="rating4" name="rating" value="2" onclick="setStarRating(2)" /><label
                    for="rating4" title="2 stars"></label>
                <input type="radio" id="rating3" name="rating" value="1.5" onclick="setStarRating(1.5)"/><label
                    class="half" for="rating3" title="1 1/2 stars"></label>
                <input type="radio" id="rating2" name="rating" value="1" onclick="setStarRating(1)" checked /><label
                    for="rating2" title="1 star"></label>
            </fieldset>
            <div id="rating_value" value="1"> 1/5 </div>
        </div><br>
        <div class="form--review form__group--captcha">
        <div class="g-recaptcha" data-sitekey="{{config('captcha.captcha.key')}}"></div>
        </div>
        <button class="btn btn--green form__button" type="submit">Submit</button>

    </form>

</section>
<script>
function setStarRating(starValue) {
    let ratingValue = document.getElementById('rating_value');
    ratingValue.innerHTML = starValue + '/5';

}

</script>
