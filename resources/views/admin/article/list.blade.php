<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Articles list</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->

    <link href="/css/admin.css" rel="stylesheet">
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
            width: 538px;
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
        <h1>Articles list</h1>
        <div class="btn-container">
            <a href="{{route('comments-navigation')}}">
                <div class="button btn-primary">
                    Comments List
                </div>
            </a>
            <a href="{{route('post.list')}}">
                <div class="button btn-primary">
                    Review List
                </div>
            </a>
            <a href="{{route('contact-us')}}">
                <div class="button btn-primary">
                    Contacts List
                </div>
            </a>
            <a href="{{route('article-create')}}">
                <div class="button btn-create">
                    Create Article
                </div>
            </a>
        </div>
        <div class="navigation__container">
            @if (count($articles) > 0)
                @foreach($articles as $article)
                    <div class="navigation__element">
                        <a class="hide-overflow-text" href="{{route('article-edit', $article->id)}}">
                            {{$article->title}}
                        </a>
                        <form action="{{route('article-delete', $article->id)}}" method="POST">
                            @csrf
                            @method('POST')
                            <input class="button btn-delete" type="submit" value="Delete">
                        </form>
                    </div>
                @endforeach
        </div>
            <div class="pagination__container flex-center">
                {{$articles->appends(request()->query())->links()}}
            </div>
            @endif

    </div>
</div>
</body>
</html>

