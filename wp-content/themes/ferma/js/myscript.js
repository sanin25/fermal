jQuery(document).ready(function($) {
jQuery.fn.exist = function() {
   return $(this).length;
}
  function setHeiHeight() {
      $('.heigh').css({
          height: $(window).height() + 'px'
      });
  }

  setHeiHeight(); // устанавливаем высоту окна при первой загрузке страницы
  $(window).resize( setHeiHeight ); // обновляем при изменении размеров окна

/*Конец высоты*/
/*Текст к картинкам контакты*/


    $("#tab-container").easytabs({
        animate: true,
        animationSpeed: 500,
        tabActiveClass: "active",
        tabs: "> div > ul > li "

    });

    /*tab Питомник*/
    $("#tab-pitomnik").easytabs({
        animate: true,
        animationSpeed: 500,
        tabs: "> div > ul > li "

    });

  /*Паралакс*/
  $(window).scroll(function() {
  var par = $(this).scrollTop();
  /*Лого*/
  $("#logo").css({
  	"transform" :"translate3d(0px , " + par /3 + "%, .0px)",
  	"-webkit-transform" : "translate3d(0px , " + par /3 + "%, .0px)",
  	"-moz-transform" : "translate3d(0px , " + par /3 + "%, .0px)"

  });
  /*Облока*/
  if($('.cont4').exist()){
  var cont4 = $('.cont4').offset().top - par;
  if( cont4 < 450){

  	$('.kyri').css('visibility', 'visible').addClass('animated bounceInRight');

  var i = $('.cont4').offset().top - par;
  $("#obl1").css({
  	 "transform" :"translate3d(" + i / 2 + "%," + i/8  + "%, 0px)",
    "-webkit-transform" : "translate3d(" + i * 1 + "%, 0%, .0px)",
    "-moz-transform" : "translate3d(" + i / 2 + "%, "+ i/8  +"%, 0px)"
  	});
   $("#obl2").css({
  	"right" :"" + par /60 + "%",
  	});
  }
  }
/* Конец облока*/

  if($('.cont5').exist()){
  var cont5 = $('.cont5').offset().top - par;
    if( cont5 < 450){
    
    $('.gusi').css('visibility', 'visible').addClass('animated bounceInLeft');
    
  }
  }
      if($('.cont6').exist()){
          var cont6 = $('.cont6').offset().top - par;
          if( cont6 < 450){

              $('.pavlin').css('visibility', 'visible').addClass('animated fadeInUpBig');

          }
      }

      if($('.cont7').exist()){
          var cont7 = $('.cont7').offset().top - par;
          if( cont7 < 450){

              $('.fazan').css('visibility', 'visible').addClass('animated zoomInRight');

          }
      }

    /*Часть About */
  if ($(this).scrollTop() > 300) {
          $('.fotoin').css('visibility', 'visible').addClass('animated bounceInLeft');
          $('.textunber').css('visibility', 'visible').addClass('animated bounceInRight');
          $('.about h3').css('visibility', 'visible').addClass('animated bounceInUp');
      }
  });
  /* Форма отправки письма*/
  $('#emailform').click(function() {
    $('.semdmail').animate({
      marginRight: '0px'},
      400);
  });


  $('#close').click(function() {
     $('.semdmail').animate({
      marginRight: '-500px'},
      700);
  });
    /*Контакты */

    $('.popup-modal').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: true,
        // Delay in milliseconds before popup is removed
        removalDelay: 300,

        // Class that is added to popup wrapper and background
        // make it unique to apply your CSS animations just to this exact popup
        mainClass: 'mfp-fade'
    });
    $('#close2').click( function (e){
        e.preventDefault();
        $.magnificPopup.close();
    });

    

  /*Слайдер*/
  
    $('.bxslider').bxSlider({
          minSlides: 4,
    	  maxSlides: 4,
          tickerHover: true,
    	  slideWidth: 600,
    	  slideMargin: 5,
    	  ticker: true,
          responsive: true,
    	  speed: 49000

    	});
    /*Слайден Питомника*/
    $('.pitomnik').bxSlider({
        mode : 'fade',
        minSlides: 1,
        slideWidth: 1178,
        controls: true,
        wrapperClass: 'pitomnikcarusel',
        auto: true,
        nextText: 'Вперед',
        prevText:'Назад',
        pager:false,
        pause:5000
        
    	});

    /*Отправка письма*/

    $("#form").submit(function() {
    $.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: $(this).serialize()
    }).done(function(vot) {
      
      alert(vot);
      $("#form")[0].reset();
      $('.semdmail').animate({
      marginRight: '-500px'},
      700);
    });
    return false;
  });

  $('img').addClass('responsive-img');




});