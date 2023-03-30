@php
    $topServices = [
        [
            'isBest' => true,
            'class' => 'top-services__card--value',
            'service_type' => 'Best Value',
            'bedge_color' => 'badge_blue',
            'imgSrc' => 'top-services-ep.svg',
            'imgWidth' => '135',
            'imgHeight' => '70',
            'name' => 'Essaypro',
            'rating' => '4.7',
            'siteLink' => '/go-to/essaypro-com/',
            'reviewLink' => 'https://globalhack.org/essaypro-com/',
            'logoId' => 'bestLogo3',
            'btnId' => 'bestButton3',
        ],
        [
            'isBest' => true,
            'class' => 'top-services__card--best',
            'bedge_color' => 'badge_green',
            'service_type' => 'Best Service',
            'imgSrc' => 'top-services-sp.svg',
            'imgWidth' => '135',
            'imgHeight' => '70',
            'name' => 'SpeedyPaper',
            'rating' => '4.9',
            'siteLink' => '/go-to/speedypaper-com/',
            'reviewLink' => 'https://globalhack.org/speedypaper-com/',
            'logoId' => 'bestLogo1',
            'btnId' => 'bestButton1',
        ],
        [
            'isBest' => true,
            'class' => 'top-services__card--price',
            'bedge_color' => 'badge_orange',
            'service_type' => 'Best Price',
            'imgSrc' => 'top-services-wpf.svg',
            'imgWidth' => '135',
            'imgHeight' => '70',
            'name' => 'Writepaperfor.me',
            'rating' => '4.8',
            'siteLink' => '/go-to/writepaperfor-me/',
            'reviewLink' => 'https://globalhack.org/writepaperfor-me/',
            'logoId' => 'bestLogo2',
            'btnId' => 'bestButton2',
        ],
    ];
@endphp

<section>
    <div class="top-services">
        <h2 class="top-services__title">Our Top Rated Essay Services</h2>
    </div>

    <div class="top-services__inner">
        @foreach ($topServices as $topService)
            <div class="top-services__card {{ $topService['class'] ?? '' }}">
                @if (isset($topService['isBest']))
                    <p class="top-services__badge {{ $topService['bedge_color'] ?? '' }}">
                        {{ $topService['service_type'] }}</p>
                @endif
                <a class="top-services__link" id="{{ $topService['logoId'] }}" href="{{ $topService['siteLink'] }}"
                    target="_blank" rel="nofollow noopener noreferrer">
                    <img class="top-services__img service-image" src="/img/top-services/{{ $topService['imgSrc'] }}"
                        alt="" width="{{ $topService['imgWidth'] }}" height="{{ $topService['imgHeight'] }}">
                </a>
                <div class="top-services__card-info">
                    <h3 class="top-services__name">{{ $topService['name'] }}</h3>
                    <div class="top-services__rating">
                        <div class="star-rating"><span style="width: {{ ($topService['rating'] / 5) * 100 }}%"></span>
                        </div>
                        <p class="top-services__rating-text">{{ $topService['rating'] }}/5.0</p>
                    </div>
                </div>
                <div class="top-services__btns">
                    <a class="top-services__btn btn btn--gray-trsp" href="{{ $topService['reviewLink'] }}"
                        target="_blank" rel="nofollow noopener noreferrer">Read review</a>
                    <a class="top-services__btn btn btn--green" id="{{ $topService['btnId'] }}"
                        href="{{ $topService['siteLink'] }}" target="_blank" rel="nofollow noopener noreferrer">Visit
                        site</a>
                </div>
            </div>
        @endforeach
    </div>


</section>
