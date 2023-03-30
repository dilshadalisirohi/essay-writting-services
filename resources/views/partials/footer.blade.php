<footer class="footer" id="js-footer">
    <div class="footer__top">
        <div class="container">
            <div class="footer__wrap"><a class="footer__logo" href="/">
                    <!-- <img src="../img/logo_white.png" alt="">  -->

                    <img src="{{asset('img/logo_white.png')}}" alt=""> </a>
                <aside class="footer__text">

                </aside>
                <nav>
                    <ul class="footer-menu">
                        <li class="footer-menu__item"><a class="footer-menu__link" href="{{route('reviews')}}/">All reviews</a></li>
                        <li class="footer-menu__item"><a class="footer-menu__link" href="{{route('articles')}}/">Articles</a></li>
                        <li class="footer-menu__item"><a class="footer-menu__link" href="{{route('about')}}/">About</a></li>
                        <li class="footer-menu__item"><a class="footer-menu__link" href="{{route('contact')}}/">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="bottom__text">Copyright &copy; {{now()->year}}, GlobalHack.org. All rights reserved. </div>
        </div>
    </div>
</footer>
