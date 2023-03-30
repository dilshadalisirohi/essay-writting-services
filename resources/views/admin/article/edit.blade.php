<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Update Article</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->

    <link href="/css/admin.css" rel="stylesheet">
    <link href="/css/modal.css" rel="stylesheet">

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    <script>
        let newFaqId = {!! $article->faqs->count(); !!};
        let newProId = {!! $article->pros->count(); !!};
        let newConId = {!! $article->cons->count(); !!};
    </script>
    <script src="/js/faq.js" defer></script>
    <script src="/js/prosAndCons.js" defer></script>
</head>
<body>
<div class="flex-center position-ref m-b-md">
    <div class="content">
        @if($errors->any())
            {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
        @endif
        @if(session()->has('message'))
            <div class="alert alert-success">
                {!! session()->get('message') !!}
            </div>
        @endif
        <h1>Update Article</h1>
        <div class="btn-container">
            <a href="#">
                <div class="button btn-primary">
                    Navigation
                </div>
            </a>
            <a href="#">
                <div class="button btn-primary">
                    Post list
                </div>
            </a>
        </div>
        <div class="review form__container">
            <form action="{{route('article-update', $article->id)}}" method="POST">
                @csrf
                @method('POST')
                <div class="form__element input-text">
                    <label for="title">Title*</label>
                    <input name="title" type="text" maxlength="255" placeholder="Enter review title here" value="{{old('title') ?? $article->title}}" required>
                </div>

                <div class="form__element input-text">
                    <label for="thumbnail_url">thumbnail url*</label>
                    <input name="thumbnail_url" type="text" maxlength="512" placeholder="Enter review thumbnail image url here" value="{{old('thumbnail_url') ?? $article->thumbnail_url}}">
                </div>

                <div class="form__element input-html">
                    <label for="body">Short Description</label>
                    <textarea class="html-editor" name="short_description">{{old('short_description') ?? $article->short_description}}</textarea>
                </div>
                <div class="form__element input-html">
                    <label for="body">Description</label>
                    <textarea class="html-editor" name="description">{{old('description') ?? $article->description}}</textarea>
                </div>
                <div class="form__element input-faq">
                    <label>Faqs</label>
                    <div id="existing-faqs" class="existing-faqs__wrapper">
                        @foreach($article->faqs as $index => $faq)
                            <div class="faq-group">
                                <input name="faq[{{$index}}][id]" type="hidden" placeholder="Faq title" maxlength="256" value="{{$faq->id}}">
                                <input name="faq[{{$index}}][title]" type="text" placeholder="Faq title" maxlength="256" value="{{$faq->title}}">
                                <input name="faq[{{$index}}][description]" type="text" placeholder="Faq body" maxlength="512" value="{{$faq->description}}">
                            </div>
                        @endforeach
                    </div>
                    <div class="create-faq__wrapper">
                        <strong>Add new custom Faq:</strong>
                        <div class="faq-group">
                            <input id="newFaqTitleInput" type="text" placeholder="Faq title" maxlength="256">
                            <input id="newFaqBodyInput" type="text" placeholder="Faq body" maxlength="1024">
                        </div>
                        <div class="align-right">
                            <button id="addFaqBtn" type="button" class="button btn-primary add-btn">Add</button>
                        </div>
                    </div>
                </div>

                <div class="form__element input-pros-and-cons">
                    <label>Pros and cons</label>
                    <div class="pros-and-cons__wrapper">
                        <div class="pros__wrapper">
                            <div id="existingPros" class="existing-pros-or-cons__wrapper">
                                @foreach($article->pros as $index => $pro)
                                    <input name="pros[{{$index}}][id]" type="hidden" value="{{$pro->id}}">
                                    <input name="pros[{{$index}}][value]" type="text" placeholder="Enter new pro value" maxlength="255" value="{{$pro->value}}">
                                @endforeach
                            </div>
                            <div class="create-pro-or-con__wrapper">
                                <input id="proInput" type="text" placeholder="Enter pro value" maxlength="255">
                                <button id="addProBtn" type="button" class="btn btn-primary add-btn pc-btn">Add pro</button>
                            </div>
                        </div>
                        <div class="cons__wrapper">
                            <div id="existingCons" class="existing-pros-or-cons__wrapper">
                                @foreach($article->cons as $index => $con)
                                    <input name="cons[{{$index}}][id]" type="hidden" value="{{$con->id}}">
                                    <input name="cons[{{$index}}][value]" type="text" placeholder="Enter con value" maxlength="255" value="{{$con->value}}">
                                @endforeach
                            </div>
                            <div class="create-pro-or-con__wrapper">
                                <input id="conInput" type="text" placeholder="Enter new con value" maxlength="255">
                                <button id="addConBtn" type="button" class="btn btn-primary add-btn pc-btn">Add con</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form__element input-text">
                    <label for="meta_title">Meta title</label>
                    <input name="meta_title" type="text" maxlength="512" placeholder="Enter meta title here" value="{{old('meta_title') ?? $article->meta_title}}">
                </div>
                <div class="form__element input-html">
                    <label for="meta_description">Meta description</label>
                    <textarea class="meta-textarea" name="meta_description">{{old('meta_description') ?? $article->meta_description}}</textarea>
                </div>

                <div class="form__element input-text">
                    <label for="slug">Slug</label>
                    <input name="slug" type="text" maxlength="255" placeholder="Enter post slug here" value="{{old('slug') ?? $article->slug}}" onkeypress="return event.charCode != 32" required>
                </div>
                <div class="form__element">
                    <strong>Related Articles:</strong>
                    <button type="button" id="related-articles-btn" class="button btn-primary select-btn">Select Related Articles</button>
                </div>
                <div class="form__element input-date">
                    <label for="created_at">Created at</label>
                    <input name="created_at" type="datetime-local" value="{{old('created_at')  ?? $article->converted_created_at_meta  ??  now()->format('Y-m-d\TH:i')}}">
                </div>
                <div class="form__element input-date">
                    <label for="updated_at">Updated at</label>
                    <input name="updated_at" type="datetime-local" value="{{old('updated_at')  ?? $review->converted_updated_at_meta ?? now()->format('Y-m-d\TH:i')}}">
                </div>
                <div class="form__element">
                    <input class="submit-btn" type="submit" value="Update">
                </div>
                @include('admin/relatedArticlesModal', compact('relatedArticlesThumbnails'))
            </form>

        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/relatedReviewsModal.js"></script>
@include('admin.html-editor', ['selector' => '.html-editor'])
</body>
</html>
