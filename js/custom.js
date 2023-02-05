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
$('input#shipping_address_trigger').click(function(){
  $("#billing-address").toggle();
});

// hide/show filter on page
$("#filter-toggle").click(function(){
  $("#filter-area").toggle();
  $("#filter-toggle span").text($("#filter-toggle span").text() == 'Show' ? 'Hide' : 'Show');
  $("#product-listing-area").toggleClass("col-lg-12");
});

// add combination
$("#btn-addition").on("click", function(){
  var existing_count = $('.combination').length;
  var new_id ="combination-"+(existing_count+1);
  
  var new_block = "";  
  new_block +='<div class="col-md-6 combination" id="'+new_id+'">';
  new_block +='<div class="form-part">';
  new_block +='<span class="remover" data-cabin-target="#'+new_id+'">&times Remove</span>';
  new_block +='<h4 class="heading-20">Combination '+(existing_count+1)+'</h4>';
  new_block +='<div class="row form-line">';
  new_block +='<div class="col">';
  new_block +='<label for="" class="form-label">Select Wood</label>';
  new_block +='<select class="form-select" aria-label="Select Wood">';
  new_block +='<option selected>Select wood here</option>';
  new_block +='<option value="1">One</option>';
  new_block +='<option value="2">Two</option>';
  new_block +='<option value="3">Three</option>';
  new_block +='</select>';
  new_block +='</div>';
  new_block +='</div>';
  new_block +='<div class="row form-line">';
  new_block +='<div class="col">';
  new_block +='<label for="" class="form-label">Select Strain</label>';
  new_block +='<select class="form-select" aria-label="Select Wood">';
  new_block +='<option selected>Select wood here</option>';
  new_block +='<option value="1">One</option>';
  new_block +='<option value="2">Two</option>';
  new_block +='<option value="3">Three</option>';
  new_block +='</select>';
  new_block +='</div>';
  new_block +='</div>';
  new_block +='</div>';
  new_block +='</div>';
  if(existing_count<6){
    // $(".combination:last-child").clone().appendTo("#combination-area");
    $("#combination-area").append(new_block);
  }else{
    alert("You already have 6 combinations");
  }
  // alert(existing_count);
});

// remove combination
$(document).on("click",".remover",function(){
  $(this).closest(".combination").remove();
});

// shop cart counter
// $("span .count").data("count");

$(".counter .btn").on("click",function(){
  
  let action = $(this).data("action");
  // alert(action);
  if(action=="decrease"){
    let target = $(this).next(".count");
    let value = target.val();
    if(value!=0){
      value--;
    }
    target.val(value);
  }else if(action=="increase"){
    let target = $(this).prev(".count");
    let value = target.val();
    value++;
    target.val(value);
  }
});

// remove cart-item
$(document).on("click",".cart-item-remover",function(){
  $(this).closest(".cart-item").remove();
});
// remove wishlist-item
$(document).on("click",".wishlist-item-remover",function(){
  $(this).closest(".wishlist-item").remove();
});

// close nav bar on phone

$("#nav-close").on("click",function(){
  $("#main_nav").removeClass("show");
});

// product slider
$('.product-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  centerPadding: '20px',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        centerPadding: '20px',
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        centerPadding: '20px',
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        centerPadding: '20px',
        slidesToScroll: 1
      }
    }
  ]
});

// product gallery
$('#thumbnail-horizontal').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 2,
  centerPadding: '40px',
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// tooltip script
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

// for mobile navigation
$('.nav-toggle').click(function(e){
  $('.main-navigation').slideDown('100').addClass('active');
  $('#nav-close').slideDown('1000');
});
$('#nav-close').click(function(e){
  $('#nav-close').slideUp('100');
  $('.main-navigation').removeClass('active').slideUp('300');
});

// for mobile
$('.heading-link').click(function(e){
  var target = $(this).data('target');
  $("#"+target).toggleClass('active');
  $(this).toggleClass('active');
});
// widget close button
$('.btn-dismiss, .widget-trigger').click(function(e){
  $('.widget-area').toggleClass('active');
  var target = $(this).data('target');
  $("#"+target).slideToggle();
});

// for desktop
// $('.heading-link').hover(function(e){
//   $('.submenu-block').removeClass('visible');
//   var target = $(this).data('target');
//   $(".megamenu  #"+target).addClass('visible');
// });
// if ($(window).width() > 991) {
//   document.onclick = function(e){
//       if(
//         e.target.tagName != 'BUTTON'
//       ){
//         $(".megamenu .submenu-block").removeClass("visible");
//       }
//   };
// }

