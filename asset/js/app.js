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



// animation 

if(is_loaded("viewportChecker")) {

  //SI LA PAGE EST "viewport-checker-animation.html"
  if(is_page_viewport_checker) {

    //POUR TOUTES LES SECTIONS
    $('section').addClass("hidden").viewportChecker({
      classToAdd: 'animated fadeIn', //Les classes ajoutées quand l'élément est visible
      classToRemove: 'hidden', //Les classes enlevées quand l'élément est en dehors du viewport
      repeat: false, //repeter les animations à chaque fois quand l'élément arrive dans le viewport ?
      offset: 100 //active les classes seulement quand l'élément est rentré dans le viewport d'au moins 100px
    });

    //POUR TOUS LES TITRES DE SECTIONS
    $('section h2').viewportChecker({
      classToAdd: 'animated slideInDown',
      repeat: false,
      offset: 80
    });

    //POUR LES PARAGRAPHES DE LA SECTION 1
    $('.section-1 p').addClass("hidden").viewportChecker({
      classToAdd: 'animated fadeInLeft',
      classToRemove: 'hidden',
    });

    //POUR LES PARAGRAPHES DE LA SECTION 2
    $('.section-2 p').addClass("hidden").viewportChecker({
      classToAdd: 'animated fadeInRight',
      classToRemove: 'hidden',
    });

    //POUR LES PARAGRAPHES DE LA SECTION 3
    $('.section-3 p').addClass("hidden").viewportChecker({
      classToAdd: 'animated fadeInUp',
      classToRemove: 'hidden',
    });

  } //END CODE PAGE "viewport-checker-animation.html"
}