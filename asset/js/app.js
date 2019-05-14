$(function() {
  $('#button-menu').on('click', function(e) {
    $('#header').toggleClass('open');
  });


});



// Swipper script
var swiper = new Swiper('.swiper-container', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 0,
    stretch: 1,
    depth: 100,
    modifier: 10,
    slideShadows: false,
  },
  pagination: {
    el: '.swiper-pagination',
  },
  keyboard: {
    enabled: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});