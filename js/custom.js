// testimonial slider
// slick slider

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

// for billing address input hide
$('input#sameAsShipping').click(function(){
  $("#billing-address").toggle();
});

$("#filter-toggle.opened").click(function(){
  $("#filter-area").toggle();
  $("#filter-toggle span").text($("#filter-toggle span").text() == 'Show' ? 'Hide' : 'Show');
  $("#product-listing-area").toggleClass("col-md-12");
});