import $ from 'jquery';
window.$ = window.jQuery = $;

$(document).ready(function(){
    $('.category-top__cards-inner').slick({
        infinite: true,
        arrows: false,
        slidesToShow: 5,
        swipeToSlide: true,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1899,
                settings: {
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 1599,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 1299,
                settings: {
                    slidesToShow: 3,
                    autoplay: false
                }
            },
            {
                breakpoint: 1099,
                settings: {
                    slidesToShow: 2,
                    autoplay: false
                }
            },
            {
                breakpoint: 740,
                settings: {
                    slidesToShow: 1,
                    autoplay: true,
                    autoplaySpeed: 4000
                }
            }
        ]
    });
});
