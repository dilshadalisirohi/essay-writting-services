<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create post</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->

    <link href="/css/admin.css" rel="stylesheet">
    <link href="/css/modal.css" rel="stylesheet">

    <style>
        html,
        body {
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
        let newProId = 0;
        let newConId = 0;
        let newFaqId = 0;
    </script>
    <script src="/js/faq.js" defer></script>
    <script src="/js/prosAndCons.js" defer></script>
</head>

<body>
    <div class="flex-center position-ref m-b-md">
        <div class="content">
            @if ($errors->any())
                {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
            @endif
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {!! session()->get('message') !!}
                </div>
            @endif
            <h1>Create post</h1>
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
                <form action="{{ route('post.post') }}" method="POST">
                    @csrf
                    <div class="form__element input-text">
                        <label for="title">Title</label>
                        <input name="title" type="text" maxlength="255" placeholder="Enter review title here"
                            value="{{ old('title') }}" required>
                    </div>

                    <div class="form__element input-text">
                        <label for="thumbnail_url">thumbnail url*</label>
                        <br />
                        <input name="thumbnail_url" type="text" maxlength="512"
                            placeholder="Enter review thumbnail image url here" value="{{ old('thumbnail_url') }}">
                    </div>
                    <div class="form__element input-text">
                        <label for="rate">Rate</label>
                        <br />
                        <input name="rate" type="text" maxlength="512" value="{{ old('rate') }}">
                    </div>
                    <div class="form__element input-text">
                        <label for="price_from">Price_from</label>
                        <br />
                        <input name="price_from" type="text" maxlength="512" value="{{ old('price_from') }}">
                    </div>
                    <div class="form__element input-text">
                        <label for="is_recommend">is_recommend</label>
                        <br />
                        <input name="is_recommend" type="text" maxlength="512" value="{{ old('is_recommend') }}">
                    </div>
                    <div class="form__element input-text">
                        <label for="discount">Discount</label>
                        <br />
                        <input name="discount" type="text" maxlength="512" value="{{ old('discount') }}">
                    </div>
                    <div class="form__element input-text">
                        <label for="deadline">Deadline</label>
                        <br />
                        <input name="deadline" type="text" maxlength="512" value="{{ old('deadline') }}">
                    </div>
                    <div class="form__element input-text">
                        <label for="visit_site">Visit Site</label>
                        <br />
                        <input name="visit_site" type="text" maxlength="512" value="{{ old('visit_site') }}"
                            required>
                    </div>
                    <div class="form__element input-text">
                        <label for="status">Status</label>
                        <br />
                        <input name="status" type="text" maxlength="512" value="{{ old('status') }}" required>
                    </div>
                    <div class="form__element input-text">
                        <label for="reff_link">Reff Link</label>
                        <br />
                        <input name="reff_link" type="text" maxlength="512" value="{{ old('reff_link') }}">
                    </div>
                    <br><br>
                    <hr align="right" size="3" color="#0000dd" />
                    <div class="form__element input-text">
                        <label for="is_sidebar">is_sidebar</label>
                        <br />
                        <input name="is_sidebar" type="text" maxlength="512" value="{{ old('is_sidebar') }}"
                            required>
                    </div>
                    <div class="form__element input-text">
                        <label for="sidebar_img">sidebar_img</label>
                        <br />
                        <input name="sidebar_img" type="text" maxlength="512" value="{{ old('sidebar_img') }}">
                    </div>
                    <div class="form__element input-text">
                        <label for="best_advantage">best_advantage</label>
                        <br />
                        <input name="best_advantage" type="text" maxlength="512"
                            value="{{ old('best_advantage') }}">
                    </div>
                    <hr align="right" size="3" color="#0000dd" /><br><br>
                    <div class="form__element input-html">
                        <label for="short_description">Short Content</label>
                        <textarea class="html-editor" name="short_description">{{ old('short_description') }}</textarea>
                    </div>
                    <div class="form__element input-html">
                        <label for="body">Post body*</label>
                        <textarea class="html-editor" name="body">{{ old('body') }}</textarea>
                    </div>
                    <div class="form__element input-faq">
                        <label>Faqs</label>
                        <div id="existing-faqs" class="existing-faqs__wrapper">

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

                                </div>
                                <div class="create-pro-or-con__wrapper">
                                    <input id="proInput" type="text" placeholder="Enter new pro value"
                                        maxlength="255">
                                    <button id="addProBtn" type="button" class="btn btn-primary add-btn pc-btn">Add
                                        pro</button>
                                </div>
                            </div>
                            <div class="cons__wrapper">
                                <div id="existingCons" class="existing-pros-or-cons__wrapper">

                                </div>
                                <div class="create-pro-or-con__wrapper">
                                    <input id="conInput" type="text" placeholder="Enter new con value"
                                        maxlength="255">
                                    <button id="addConBtn" type="button" class="btn btn-primary add-btn pc-btn">Add
                                        con</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form__element input-text">
                        <label for="meta_title">Meta title</label>
                        <input name="meta_title" type="text" maxlength="512" placeholder="Enter meta title here"
                            value="{{ old('meta_title') }}">
                    </div>
                    <div class="form__element input-html">
                        <label for="meta_description">Meta description</label>
                        <textarea class="meta-textarea" name="meta_description">{{ old('meta_description') }}</textarea>
                    </div>
                    <div class="form__element input-text">
                        <label for="slug">Slug*</label>
                        <input name="slug" type="text" maxlength="255" placeholder="Enter post slug here"
                            value="{{ old('slug') }}" onkeypress="return event.charCode != 32">
                    </div>
                    <div class="form__element">
                        <strong>Related reviews:</strong>
                        <button type="button" id="related-articles-btn" class="button btn-primary select-btn">Select
                            related reviews</button>
                    </div>
                    <div class="form__element input-date">
                        <label for="created_at">Created at</label>
                        <input name="created_at" type="datetime-local"
                            value="{{ old('created_at') ?? now()->format('Y-m-d\TH:i') }}">
                    </div>
                    <div class="form__element input-date">
                        <label for="updated_at">Updated at</label>
                        <input name="updated_at" type="datetime-local"
                            value="{{ old('updated_at') ?? now()->format('Y-m-d\TH:i') }}">
                    </div>
                    <div class="form__element">
                        <input class="submit-btn" type="submit" value="Create">
                    </div>
                    @include('admin/relatedReviewsModal', compact('relatedReviewsThumbnails'))
                </form>
            </div>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/relatedReviewsModal.js"></script>
    @include('admin.html-editor', ['selector' => '.html-editor'])
</body>

</html>
