var $ = jQuery;

$(document).ready(function() {
    $('.gp-site-header__menu-toggle').on('click', function() {
        console.log('clicked');

        if ($(this).hasClass('is-active')) {
            $('body').css('overflow', 'visible');
            $('.gp-site-header__nav-container').slideUp();
        } else {
            $('body').css('overflow', 'hidden');
            $('.gp-site-header__nav-container').slideDown();
        }

        $(this).toggleClass('is-active');
    });
});