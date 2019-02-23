$(function(){
    $.fn.isInViewport = function() {
      var elementTop = $(this).offset().top;
      var elementBottom = elementTop + $(this).outerHeight();
    
      var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();
    
      return elementBottom > viewportTop && elementTop < viewportBottom;
    };
    
  
      $('html').bind('mousewheel DOMMouseScroll', function (e) {
  
  
        setTimeout(function(){ 
  
          var card = $('#card');
          var client = $('#logo');
        
         
          if (card.isInViewport() || client.isInViewport()) {
            $(".card").css('opacity', '1');
            $(".clients_logo").css('opacity', '1');
          }
          else {

          }
  
         }, 3000);
  
      });
    });