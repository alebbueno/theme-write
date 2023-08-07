$('.slider-home').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  arrows: true,
  prevArrow: $('.prev-slider'),
  nextArrow: $('.next-slider'),
  rows: 0, // Fix vor v1.8.0-1
});


$('.slide-logos').slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  arrows: true,
  prevArrow: $('.prev-logos'),
  nextArrow: $('.next-logos'),
  rows: 0, // Fix vor v1.8.0-1
  responsive: [
    {
        breakpoint: 768,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
        }
    },
    {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }
  ]
});

$('.slide-solucoes').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  infinite: true,
  arrows: true,
  prevArrow: $('.prev-solucoes'),
  nextArrow: $('.next-solucoes'),
  rows: 0, // Fix vor v1.8.0-1
  responsive: [
    {
        breakpoint: 768,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
        }
    },
    {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }
  ]
});