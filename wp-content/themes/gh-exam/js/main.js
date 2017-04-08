$(document).ready(function () {
    $('#close-nav, #open-nav' ).click(function () {
        $('.navigation').slideToggle(300);
        $('#close-nav').toggleClass("remove-btn");
        $('#open-nav').toggleClass("remove-btn");
    });
});

//slider
$('.slider-clients').slick({
    dots: true,
    arrows: false,
    cssEase: 'ease-in',
    slidesToShow: 4,
    slidesToScroll: 4,
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

$(".scroll").click(function() {
    $('html, body').animate({
        scrollTop: $(".welcome").offset().top
    }, 700);
});

var $container = $('.isotope');
$('#filters button').click(function(){
    var $this = $(this);
    if ( !$this.hasClass('is-checked') ) {
        $this.parents('#options').find('.is-checked').removeClass('is-checked');
        $this.addClass('is-checked');
    }
    var selector = $this.attr('data-filter');
    $container.isotope({  itemSelector: '.item', filter: selector });
    return false;
});

var maxHeight = 0;
$('.height-block').each(function(){
    if ( $(this).outerHeight() > maxHeight )
    {
        maxHeight = $(this).outerHeight();
    }
});
$('.height-block').outerHeight(maxHeight);