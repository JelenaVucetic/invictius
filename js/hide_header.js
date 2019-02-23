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

        var comment = $('#comments');
        var client = $('#clients');
      
        //console.log(comment);
        if (comment.isInViewport() || client.isInViewport()) {

          $('.Navbar').fadeOut();
        }
        else{
          $('.Navbar').fadeIn();

        }

       }, 500);

    });
  });