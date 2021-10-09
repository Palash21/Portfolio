$(function(){
     $('.counter').counterUp({
                delay: 10,
                time: 1000,
            });
});
/*counter js*/

$('.navigation nav a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            return false;
          } else {
            $target.attr('tabindex','-1');
            $target.focus();
          };
        });
      }
    }
  });
/*smooth scroll js*/

$top_to_btn=400;
$('.top_to').click(function(){
    $('html,body').animate({
        scrollTop: 0
    },1000);
});
/*top_to*/

$navOffset=$('.navigation').offset().top;
$(window).scroll(function(){
    $scrolling=$(this).scrollTop();
    if($scrolling > $navOffset){
        $('.navigation').addClass('fixed');   
    }
    else{
        $('.navigation').removeClass('fixed');  
    } 
    //nav ends
     if($scrolling >= $top_to_btn){
       $('.top_to').fadeIn();
    }else{
        $('.top_to').fadeOut();
    }
});

/*smooth scroll js*/

$('.slide_team').slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
    dots: true,
    arrows:false,
    autoplay: true,
    
     responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
          infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
/*slick js*/


$(function(){	
    $('.thumbnail').viewbox();
    $('.thumbnail-2').viewbox({fullscreenButton: true});

    (function(){
        var vb = $('.popup-link').viewbox();
        $('.popup-open-button').click(function(){
            vb.trigger('viewbox.open');
        });
        $('.close-button').click(function(){
            vb.trigger('viewbox.close');
        });
    })();
});
/*viewbo js*/












