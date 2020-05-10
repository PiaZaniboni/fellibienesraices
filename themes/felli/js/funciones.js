$(document).ready(function(){

     $('.galeria-portada').css('height' , $(window).innerHeight() );

     /*--------------------------------------------------------------
     # Slider propiedad
     --------------------------------------------------------------*/
     $('.multiple-items').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,

      nextArrow: '<buton class="slick-arrow slick-next" type="button"><i class="fa fa-angle-right" aria-hidden="true"></i></buton>',
      prevArrow: '<buton class="slick-arrow slick-prev" type="button"><i class="fa fa-angle-left" aria-hidden="true"></i></buton>'
    });

     $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: true,
      centerMode: false,
      focusOnSelect: true,
      arrows: false
    });

    /*--------------------------------------------------------------
    # Scroll Nice
    --------------------------------------------------------------*/
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

    /*--------------------------------------------------------------
    # Responsive Nav
    --------------------------------------------------------------*/
    $('.menu-toggle').click(function(){
	    $('.site-header.responsive').addClass('active');
	});
    $('.menu-close').click(function(){
	    $('.site-header.responsive').removeClass('active');
	});
    $('#primary-menu li a').click(function(){
        $('.site-header.responsive').removeClass('active');
    });

});
