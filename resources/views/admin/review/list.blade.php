<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Post list</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->

    <link href="/css/admin.css" rel="stylesheet">
    <script>var selectedTypeId {!! isset($selectedTypeId) ? "= $selectedTypeId" : "" !!}</script>
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
        <h1>Reviews list</h1>
        <div class="btn-container">
            <a href="{{route('comments-navigation')}}">
                <div class="button btn-primary">
                    Comments
                </div>
            </a>
            <a href="{{route('articles-navigation')}}">
                <div class="button btn-primary">
                    Articles
                </div>
            </a>
            <a href="{{route('contact-us')}}">
                <div class="button btn-primary">
                    Contacts
                </div>
            </a>
            <a href="{{route('sitemap')}}">
                <div class="button btn-primary">
                    Generate Sitemap
                </div>
            </a>
            <a href="{{route('post.create')}}">
                <div class="button btn-create">
                    Create Review
                </div>
            </a>
        </div>

        <div class="search-container">
            <input id="searchInput" class="search-input" type="text" placeholder="Enter gear title here..." value="{{$searchQuery}}" maxlength="100">
            <button id="searchSubmit" class="search-submit">Find</button>
        </div>
        <div class="navigation__container">
            @if (count($reviews) === 0)
                <div>
                    No posts
                </div>
            @endif
            @foreach($reviews as $review)
                <div class="navigation__element">
                    <a class="hide-overflow-text" href="{{route('post.edit', $review)}}">
                        {{$review->title}}
                    </a>
                    <form action="{{route('post.delete', $review)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="button btn-delete" type="submit" value="Delete">
                    </form>
                </div>
            @endforeach
        </div>
        <div class="pagination__container flex-center">
            {{$reviews->appends(request()->query())->links()}}
        </div>
    </div>
</div>
</body>
</html>

