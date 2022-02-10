var $ = jQuery;

$(document).ready(function() {
    $('.gp-site-header__menu-toggle').on('click', function() {
        if (!$(this).hasClass('is-active')) {
            window.scrollTo(0, 0);
        }

        $(this).toggleClass('is-active');
        $('.gp-mobile-header').toggleClass('is-active');
        $('body').toggleClass('stop-scrolling');
    });
});