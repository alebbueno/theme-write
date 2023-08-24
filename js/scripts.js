document.addEventListener('DOMContentLoaded', function() {
  var customMarginHeader = document.querySelector('header');
  var headerNavbar = document.querySelector('header .navbar');

  window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY;

    if (scrollPosition >= 45) {
      headerNavbar.classList.add('fixed');
      customMarginHeader.classList.add('custom-margin');

    } else {
      headerNavbar.classList.remove('fixed');
      customMarginHeader.classList.remove('custom-margin');
    }
  });
});

$('.slider-home').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  arrows: true,
  prevArrow: $('.prev-slider'),
  nextArrow: $('.next-slider'),
  rows: 0, // Fix vor v1.8.0-1
});

$('.slide-teans').slick({
  slidesToShow: 2,
  slidesToScroll: 2,
  centerPadding: '60px',
  dots: true,
  arrows: false,
  rows: 0, // Fix vor v1.8.0-1
  responsive: [
    {
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    },
    {
        breakpoint: 480,
        settings: {
            centerMode: false,
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }
  ]
});


$('.slide-abouts').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
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

$('.content-box-benefits').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  arrows: false,
  rows: 0, // Fix vor v1.8.0-1
  responsive: [
    {
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    },
    {
        breakpoint: 480,
        settings: {
            centerMode: false,
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