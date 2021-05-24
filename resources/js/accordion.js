$('.phones-accordion__btn').click(function () {
    $('.phones-accordion__item').toggleClass('phones-accordion__item--active').next().slideToggle();
    $('.terms__top').not(this).removeClass('phones-accordion__item--active').next().slideUp();
});
