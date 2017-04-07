$(document).ready(function () {
    $('#close-nav, #open-nav' ).click(function () {
        $('.navigation').slideToggle(300);
        $('#close-nav').toggleClass("remove-btn");
        $('#open-nav').toggleClass("remove-btn");
    });
});

//slider
$('.slider-hero').slick({
    dots: true,
    arrows: true,
    cssEase: 'ease-in'
});

