<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="@yield('pageDescription')">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>@yield('pageTitle')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&amp;display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="icon" href="/img/gh.ico">
    <link rel="shortcut icon" href="/img/gh.ico" type="image/x-icon">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="/img/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <meta name="google-site-verification" content="frfbYmJcQ5eCxXTnRy8fa2GEtthJ_tXgNguj1hz6b5k" />
    <link rel="alternate" href="{{Request::url()}}/" hreflang="en-us">
    <link rel="canonical" href="{{Request::url()}}/">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5ND6J3X');</script>
    <!-- End Google Tag Manager -->
    @php
        $pages = ['about', 'contact', 'terms-of-use', 'disclaimer', 'search'];
    @endphp
    @if (in_array(Route::currentRouteName(), $pages) OR request()->getHost() === 'globalhack.space')
        <meta name="robots" content="noindex">
    @endif
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ND6J3X"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__wrap"><a class="header__logo" href="/"><img src="{{asset('img/logo2x.jpg')}}" alt=""></a>
                <nav>
                    <ul class="menu menu--desktop">
                        <li class="menu__item"><a class="menu__link" href="{{route('reviews')}}/">All reviews</a></li>
                        <li class="menu__item"><a class="menu__link" href="{{route('articles')}}/">Articles</a></li>
                        <li class="menu__item"><a class="menu__link" href="{{route('about')}}/">About</a></li>
                        <li class="menu__item"><a class="menu__link" href="{{route('contact')}}/">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div id="hamburger">
        <div></div>
    </div>
    <nav id="overlay">
        <ul class="menu menu--mobile">
            <li class="menu__item"><a class="menu__link" href="{{route('reviews')}}/">All reviews</a></li>
            <li class="menu__item"><a class="menu__link" href="{{route('articles')}}/">Articles</a></li>
            <li class="menu__item"><a class="menu__link" href="{{route('about')}}/">About</a></li>
            <li class="menu__item"><a class="menu__link" href="{{route('contact')}}/">Contact</a></li>
        </ul>
</nav>
    @yield('content')
    @include('partials.footer')
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    {!! Toastr::message() !!}
    @if(count($errors) > 0)
        <script>
            toastr.options =
                {
                    "positionClass": "toast-top-center"
                }
            toastr.error("All comments fields and Captcha must be filled");
        </script>
    @endif
</div>
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
<script>
var hamburger = document.getElementById("hamburger"),
    menu = document.getElementById("overlay"),
    open = !1,
    change = function() {
        open
            ? (hamburger.classList.remove("open"),
              menu.classList.remove("menu"))
            : (hamburger.classList.add("open"), menu.classList.add("menu")),
            (open = !open);
    };

hamburger.addEventListener("click", change),
    document
        .querySelectorAll('.contents-list__item a[href^="#"]')
        .forEach(function(e) {
            e.onclick = function(e) {
                e.preventDefault();
                var t = this.getAttribute("href"),
                    n = document.querySelector(t),
                    i = 0,
                    r = n.offsetTop,
                    o = r - i;
                window.scrollTo({ top: o, behavior: "smooth" }),
                    hamburger.classList.remove("open"),
                    menu.classList.remove("menu"),
                    open = !open;

            };
        });
        </script>
