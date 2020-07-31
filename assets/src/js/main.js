const $ = require('jquery');
require('slick-carousel');

$(document).ready(function () {
    $('body').addClass('loaded');
});

$('.hamburger-menu').click(function () {
    if( $(this).hasClass("open")) {
        $(this).removeClass("open");
        $('aside').removeClass("opened");
        $('html').css("overflow", "initial");
    } else {
        $(this).addClass("open");
        $('aside').addClass("opened");
        $('html').css("overflow", "hidden");

    }
});