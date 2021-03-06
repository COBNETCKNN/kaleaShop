function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

jQuery(document).ready(function (jQuery) {
  var _jQuery$slick;

  // mobile menu
  jQuery(".nav-toggler").click(function () {
    jQuery("#navigation").toggle("slide");
    jQuery('.navbar_grid__dropdown').addClass('open');
  });
  jQuery(".nav_close__button").click(function () {
    jQuery('.navbar_grid__dropdown').removeClass('open');
  }); // header menu

  jQuery(".dropDown_toggler").click(function () {
    jQuery("#headerDropdown").slideToggle();
    jQuery('.navbar_grid__dropdown').addClass('open');
  });
  jQuery(".dropdown_close").click(function () {
    jQuery('.navbar_grid__dropdown').removeClass('open');
  }); // count animation

  jQuery('.count').each(function () {
    jQuery(this).prop('Counter', 0).animate({
      Counter: jQuery(this).text()
    }, {
      duration: 2000,
      easing: 'swing',
      step: function step(now) {
        jQuery(this).text(Math.ceil(now));
      }
    });
  }); // dropdown

  jQuery('.dropdown > .caption').on('click', function () {
    jQuery(this).parent().toggleClass('open');
  });
  jQuery('.dropdown > .list > .item').on('click', function () {
    jQuery('.dropdown > .list > .item').removeClass('selected');
    jQuery(this).addClass('selected').parent().parent().removeClass('open').children('.caption').text(jQuery(this).text());
  });
  jQuery(document).on('keyup', function (evt) {
    if ((evt.keyCode || evt.which) === 27) {
      jQuery('.dropdown').removeClass('open');
    }
  });
  jQuery(document).on('click', function (evt) {
    if (jQuery(evt.target).closest(".dropdown > .caption").length === 0) {
      jQuery('.dropdown').removeClass('open');
    }
  }); // scroll on reveal

  ScrollReveal().reveal(".slide_right", {
    duration: 1500,
    origin: "left",
    distance: "300px",
    easing: "ease-in-out"
  });
  ScrollReveal().reveal(".slide_left", {
    duration: 1500,
    origin: "right",
    distance: "300px",
    easing: "ease-in-out"
  });
  ScrollReveal().reveal(".slide_right__faster", {
    duration: 1000,
    origin: "left",
    distance: "300px",
    easing: "ease-in-out"
  });
  ScrollReveal().reveal(".slide_left__faster", {
    duration: 1000,
    origin: "right",
    distance: "300px",
    easing: "ease-in-out"
  });
  ScrollReveal().reveal(".slide_top", {
    duration: 2000,
    origin: "top",
    distance: "300px",
    easing: "ease-in-out"
  });
  ScrollReveal().reveal(".slide_top__aboutUsSvg", {
    duration: 2000,
    origin: "top",
    distance: "150px",
    easing: "ease-in-out"
  });
  ScrollReveal().reveal(".slide_bottom", {
    duration: 2000,
    origin: "bottom",
    distance: "300px",
    easing: "ease-in-out"
  });
  ScrollReveal().reveal('.scroll_short', {
    delay: 800,
    easing: "ease-in-out"
  });
  ScrollReveal().reveal('.scroll_fast', {
    delay: 1200,
    easing: "ease-in-out"
  });
  ScrollReveal().reveal('.scroll_faster', {
    delay: 1500,
    easing: "ease-in-out"
  }); // lightbox

  lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'maxHeight': 700,
    'maxWidth': 1300
  }); // Slick carousel

  jQuery('.single-item').slick();
  jQuery('.center').slick((_jQuery$slick = {
    centerMode: true,
    centerPadding: '350px',
    slidesToShow: 1
  }, _defineProperty(_jQuery$slick, "centerMode", true), _defineProperty(_jQuery$slick, "autoplay", true), _defineProperty(_jQuery$slick, "autoplaySpeed", 3000), _defineProperty(_jQuery$slick, "responsive", [{
    breakpoint: 768,
    settings: {
      arrows: false,
      centerMode: true,
      centerPadding: '40px',
      slidesToShow: 3
    }
  }, {
    breakpoint: 480,
    settings: {
      arrows: false,
      centerMode: true,
      centerPadding: '40px',
      slidesToShow: 1
    }
  }]), _jQuery$slick));
  jQuery('.singleProduct_slick').slick({
    centerMode: true,
    centerPadding: '200px',
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [{
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }, {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }]
  });
  jQuery('.singleProduct_pdf__slider').slick({
    slidesToShow: 3,
    responsive: [{
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }, {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }]
  });
  jQuery('.singlePost_slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: true,
    responsive: [{
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }, {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }]
  });
  var third = new Splide('#third', {
    type: 'loop',
    autoplay: true,
    padding: '25rem',
    cover: 'true',
    rewind: true,
    rewindSpeed: 10000,
    speed: 800,
    rewindByDrag: true,
    gap: '1.25rem',
    arrows: false,
    pagination: false
  }).mount();
  var splide2 = new Splide('.splide2', {
    type: 'loop',
    cover: 'true',
    rewind: true,
    rewindSpeed: 10000,
    speed: 800,
    rewindByDrag: true,
    gap: '1.25rem',
    arrows: true,
    pagination: true
  });
  splide2.mount();
});
