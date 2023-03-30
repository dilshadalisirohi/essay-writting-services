<aside class="sidebar" id="sidebar">
    <div class="sidebar__heading">Top 3 essay writing services</div>
@foreach($reviews as $k => $review)
    @php
    $persent = ($review->rate / 5 * 100);
    if ($k == 0) {
        $color = "or";
        }
    elseif  ($k == 1) {
            $color = "gr";
            }
    elseif ($k == 2) {
        $color = "bl";
        }
    @endphp
    <a class="sidebar-item sidebar-item--best sidebar-item--best-{{$color}} top_1" href="{{$review->reff_link}}">
        <div class="sidebar-item__img"><img src="{{asset("$review->sidebar_img")}}" alt="alt"></div>
        <div class="star-rating"><span style="width:{{$persent}}%"></span></div>
        <div class="sidebar__best">BEST {{$review->best_advantage}}</div></a>
@endforeach
</aside>
