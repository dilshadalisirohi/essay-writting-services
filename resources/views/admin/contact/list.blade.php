<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contacts list</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->

    <link href="/css/admin.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/admin-search.js" defer></script>

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }


        .full-height {
            height: 100vh;
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
            width: 900px;
            margin-top: 30px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .text-align-left {
            text-align: left;
        }

        .navigation__container {
            border: 1px solid #636b6f;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            font-size: 16px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .navigation__element {
            height: 50px;
            padding-left: 15px;
            padding-right: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: row;
        }
        .navigation__element:not(:last-child) {
            border-bottom: 1px solid #636b6f;
        }
        .login-btn {
            background-color: dodgerblue;
            border: 1px solid #636b6f;
            color: white;
            border-radius: 2px;
        }
        ul.pagination li {
            display: inline;
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
        <h1>Contacts list</h1>
        <div class="btn-container">
            <a href="{{route('post.list')}}">
                <div class="button btn-primary">
                    Reviews List
                </div>
            </a>
            <a href="{{route('articles-navigation')}}">
                <div class="button btn-primary">
                    Articles List
                </div>
            </a>
            <a href="{{route('comments-navigation')}}">
                <div class="button btn-primary">
                    Comments List
                </div>
            </a>
        </div>

        <div class="navigation__container">
            @if (count($contacts) === 0)
                <div>
                    No Contacts
                </div>
            @endif
            @foreach($contacts as $comment)
                <div class="navigation__element">
                    <a class="hide-overflow-text" href="{{route('contact-edit', $comment->id)}}">
                        <b>User Name</b> - {{$comment->name}}
                    </a>
                    <span> <b>User email</b> - {{$comment->email}}</span>
                </div>
            @endforeach
        </div>
        <div class="pagination__container flex-center">
            {{--      {{$preloadChunk->appends(request()->query())->links()}}--}}
        </div>
    </div>
</div>
</body>
</html>
