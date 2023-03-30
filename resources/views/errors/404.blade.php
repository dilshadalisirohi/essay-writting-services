@extends('layouts.errors.errors')

@section('pageTitle', 'Not Found')

@section('pageDescription', '')

@section('content')
    <section class="err-404">
        <div class="err-404__wrapper">
            <header class="err-404__header">
                <h1>Ooops!<br/> Something went wrong!</h1>
            </header>
            <form action="{{ route('search') }}/" method="post">
                {{csrf_field()}}
            <div class="err-404__search">
                <label class="err-404__search-label" for="search-field">SEARCH</label>
                <input class="err-404__search-field" id="search-field" type="text" placeholder="Enter company name" name="search">
            </div>
            </form>
            <nav>
                <p class="err-404__nav-desc">Or choose one of the options below:</p>
                <ul class="err-404__list">
                    <li><a class="btn btn--gray" href="/">HOMEPAGE</a></li>
                    <li><a class="btn btn--gray" href="{{route('articles')}}/">Articles</a></li>
                    <li><a class="btn btn--gray" href="{{route('about')}}/">About us</a></li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
