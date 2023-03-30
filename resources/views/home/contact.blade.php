@extends('layouts.layout')

@section('pageTitle', 'Contact page')

@section('pageDescription', 'Contact description')

@section('content')
    <main class="main">
        <section class="section-contact">
            <div class="container">
                <div class="section__heading">
                    <h1>Contact</h1>
                </div>
                <form class="form" method="post" action="{{route('store-contact-us')}}">
                    @csrf
                    <svg class="svg-sprite-icon icon-letters">
                        <use xlink:href="../img/svg/symbol/sprite.svg#letters"/>
                    </svg>
                    <div class="form__group form__group--name">
                        <label class="form__label" for="name">Your Name</label>
                        <input class="form__input" name="name" type="text" required>
                    </div>
                    <div class="form__group form__group--email">
                        <label class="form__label" for="name">Email</label>
                        <input class="form__input" name="email" type="text" required>
                    </div>
                    <div class="form__group form__group--comment">
                        <label class="form__label" for="name">Your comment</label>
                        <textarea class="form__message" name="body" type="text" required></textarea>
                    </div>
                    <button class="btn btn--green form__button" type="submit">Send</button>
                </form>
            </div>
        </section>
    </main>
@endsection
