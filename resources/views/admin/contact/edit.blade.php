<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Update Comment</title>

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
        <h1>Update Contact</h1>
        <div class="btn-container">
            <a href="{{route('post.list')}}">
                <div class="button btn-primary">
                    Reviews List
                </div>
            </a>
            <a href="{{route('comments-navigation')}}">
                <div class="button btn-primary">
                    Comments list
                </div>
            </a>
        </div>
        <div class="review form__container">
            <form action="{{route('contact-update', $contact->id)}}" method="POST">
                @csrf
                @method('POST')
                <div class="form__element input-text">
                    <label for="name">Name</label>
                    <br/>
                    <input name="name" type="text" maxlength="512" value="{{old('name') ?? $contact->name}}">
                </div>
                <div class="form__element input-text">
                    <label for="email">Email</label>
                    <br/>
                    <input name="email" type="email" maxlength="512" value="{{old('email') ?? $contact->email}}">
                </div>
                <div class="form__element input-html">
                    <label for="body">Contact body</label>
                    <textarea name="body">{{old('body') ?? $contact->body}}</textarea>
                </div>
                <div class="form__element input-date">
                    <label for="created_at">Created at</label>
                    <input name="created_at" type="datetime-local" value="{{old('created_at') ?? now()->format('Y-m-d\TH:i')}}">
                </div>
                <div class="form__element input-date">
                    <label for="updated_at">Updated at</label>
                    <input name="updated_at" type="datetime-local" value="{{old('updated_at') ?? now()->format('Y-m-d\TH:i')}}">
                </div>
                <div class="form__element">
                    <input class="submit-btn" type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/relatedReviewsModal.js"></script>
@include('admin.html-editor', ['selector' => '.html-editor'])
</body>
</html>
