$(document).ready(function () {
    $('#close-nav').click(function () {
        $('.navigation').slideUp(300);
        $('#open-nav').removeClass("remove-btn");
        $('#close-nav').addClass("remove-btn")
    });

    $('#open-nav').click(function () {
        $('.navigation').slideDown(300);
        $('#close-nav').removeClass("remove-btn");
        $('#open-nav').addClass("remove-btn")
    });
});

//slider
$('.slider-hero').slick({
    dots: true,
    arrows: false,
    cssEase: 'ease-in'
});
$('.slider-clients').slick({
    dots: true,
    arrows: false,
    cssEase: 'ease-in',
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
        {
            breakpoint: 680,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }
    ]
});

$('.slider-partners').slick({
    dots: true,
    arrows: false,
    cssEase: 'ease-in',
    slidesToShow: 6,
    slidesToScroll: 6,
    responsive: [
        {
            breakpoint: 680,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
        }
    ]
});

