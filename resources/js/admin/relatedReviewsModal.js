$(document).ready(function () {
    const modal = $('.modal');

    $('#related-articles-btn').on('click', function() {
        modal.toggleClass('open-modal');
        $('html').css('overflow', 'hidden');
        $('.modal-block').css('top', '0');
    })

    modal.on('click', function (e) {
        switch (true) {
            case modal.is(e.target):
                modal.toggleClass('open-modal');
                $('html').css('overflow', 'auto');
                $('.modal-block').css('top', '');
                break;
            case $(".close-modal").is(e.target):
                modal.toggleClass('open-modal');
                $('html').css('overflow', 'auto');
                $('.modal-block').css('top', '');
                break;
            default: return;
        }
    })
})