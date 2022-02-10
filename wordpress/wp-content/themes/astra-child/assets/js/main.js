var $ = jQuery;

$(document).ready(function() {
    $('.gp-site-header__menu-toggle').on('click', function() {
        if ($(this).hasClass('is-active')) {
            $(this).removeClass('is-active');
            $('.gp-mobile-header').removeClass('is-active');
            $('body').removeClass('stop-scrolling');
            $('html').removeClass('stop-scrolling');
        } else {
            $('body').addClass('stop-scrolling');
            $('html').addClass('stop-scrolling');
            window.scrollTo(0, 0);

            $(this).addClass('is-active');
            $('.gp-mobile-header').addClass('is-active');
        }
    });
});