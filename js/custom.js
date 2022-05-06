$('body').on( 'click', '#main_nav_trigger', function () {
        
  $('#main_nav').toggleClass('active');
  
  $(this).toggleClass('selected').toggleClass('active');
  
});

$('#testimonial-slider').slick({
  centerMode: true,
  dots: true,
  centerPadding: '0px',
  slidesToShow: 1,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    }
  ]
});