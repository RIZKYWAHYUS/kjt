$(document).ready(function () {
  $('ul.nav > li').click(function (e) {
      e.preventDefault();
      $('ul.nav > li').removeClass('active');
      $(this).addClass('active');                
  });            
});


$(document).ready(function(){
  // Add smooth scrolling to all links
  $("li a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


$('#carouselExample').on('slide.bs.carousel', function (e) {
  
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 6;
      var totalItems = $('.carousel-item').length;
      
      if (idx >= totalItems-(itemsPerSlide-1)) {
          var it = itemsPerSlide - (totalItems - idx);
          for (var i=0; i<it; i++) {
              // append slides to end
              if (e.direction=="left") {
                  $('.carousel-item').eq(i).appendTo('.carousel-inner');
              }
              else {
                  $('.carousel-item').eq(0).appendTo('.carousel-inner');
              }
          }
      }
  });
