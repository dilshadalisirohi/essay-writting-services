<style>
    .modal-block {
        width: 100%;
        max-width: 1050px;
    }

    .modal-body {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        flex-direction: row;
        height: 700px;
        overflow-y: auto;
    }

    .modal-article {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 24%;
        margin: 15px 0;
    }

    .modal-article img {
        width: auto;
        height: 150px;
        cursor: pointer;
        border-radius: 10px;
        max-width: 220px;
    }

    .modal-article label {
        position: relative;
        display: flex;
        justify-content: center;
    }

    .modal-article label .glyphicon {
        display: none;
        position: absolute;
    }

    .modal-article input {
        display: none;
    }

    .modal-article input:checked ~ label img {
        filter: brightness(0.2);
    }

    .modal-article input:checked ~ label .glyphicon {
        display: block;
        color: green;
        font-size: 40px;
        top: calc(50% - 23px);
    }

    .modal-article__name {
        font-weight: bold;
        font-size: 16px;
    }
</style>

<div class="modal">
    <div class="modal-block">
        <div class="modal-header">
            <span class="close-modal"></span>
            Related posts
        </div>
        <div class="modal-body">
            @foreach($relatedReviewsThumbnails as $reviewThumbnail)
                <div class="modal-article">
                    <input name="related_posts[]" type="checkbox" id="{{$reviewThumbnail->id}}" value="{{$reviewThumbnail->id}}" {!! $reviewThumbnail->checked ? "checked" : "" !!}>
                    <label for="{{$reviewThumbnail->id}}">
                        <img src="{{$reviewThumbnail->thumbnail_url}}">
                        <span class="glyphicon glyphicon-ok">✔</span>
                    </label>
                    <span class="modal-article__name">{{ $reviewThumbnail->title }} </span>
                </div>
            @endforeach
        </div>
    </div>
</div>
