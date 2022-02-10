var $ = jQuery;

$(document).ready(function() {
    $('.gp-site-header__menu-toggle').on('click', function() {
        $(this).toggleClass('is-active');
        $('.gp-mobile-header').toggleClass('is-active');
        $('body').toggleClass('stop-scrolling');
    });
});