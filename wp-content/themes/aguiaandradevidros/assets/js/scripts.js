/*Adicionar Loading no carregamento de telas*/
jQuery(document).ready(function() {
    jQuery('#loading').show();
    jQuery(window).load(function() {
        // Quando a página estiver totalmente carregada, remove o id
        jQuery('#loading').fadeOut('slow');
    });
});
jQuery(document).ready(function() {
    jQuery('#primary-mobile-menu').click(function() {
        if (jQuery('.primary-menu-container').hasClass('aparecer')) {
            jQuery('.primary-menu-container').removeClass('aparecer');



        } else {
            jQuery('.primary-menu-container').removeClass('aparecer');
            jQuery('.primary-menu-container').addClass('aparecer');
        }
    })
});
/*Ativação de Ícones de Seguros*/
jQuery(document).ready(function() {
    jQuery('.publicoAlvo a[href*=pessoa-fisica]').each(function() {
        jQuery('.simboloPf').addClass('simboloAtivo');
    })
    jQuery('.publicoAlvo a[href*=pessoa-juridica]').each(function() {
        jQuery('.simboloPj').addClass('simboloAtivo');
    })
});

/*Banners*/
jQuery(document).on('ready', function() {

    jQuery('.bannerVideo').slick({
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 6000,
        slidesToShow: 1,
        speed: 500,
        slidesToScroll: 1

    });
    
});

jQuery(document).ready(function(){
    jQuery('.slider').slick({
        autoplay: true
    });
  });

/*Carrossel Parceiros*/
jQuery(document).ready(function() {
    var owl =jQuery('.owl-carousel');
    owl.owlCarousel({
      items: 4,
      loop: true,
      margin: 0,
      autoplay: true,
      autoplayTimeout: 2500,
      autoplayHoverPause: true,
      animateOut: 'fadeOut',
      rewind: false,
      dots: true,
      fluidSpeed: 25,
      lazyLoad: true,
      responsiveClass: true,
        responsive: {
            0:{
            items: 1
            },
            480:{
            items: 1
            },
            700:{
            items: 2
            },
            1100:{
            items: 3
            },
            1330:{
            items: 4
            }
        }
    });
   jQuery('.play').on('click', function() {
      owl.trigger('play.owl.autoplay', [1000])
    })
   jQuery('.stop').on('click', function() {
      owl.trigger('stop.owl.autoplay')
    })
  })



// Wow JS intalação
jQuery(document).ready(function() {
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: true, // trigger animations on mobile devices (default is true)
        live: true, // act on asynchronously loaded content (default is true)
        callback: function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null // optional scroll container selector, otherwise use window
    });
    wow.init();
});

/*Travar Menu*/
jQuery(window).scroll(function() {
    if (jQuery(window).scrollTop() >= 300) {
        jQuery("header.site-header").addClass('menuSuspenso');
    } else {
        jQuery("header.site-header").removeClass('menuSuspenso');
    };
});