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

// hide/show filter on page
$("#filter-toggle.opened").click(function(){
  $("#filter-area").toggle();
  $("#filter-toggle span").text($("#filter-toggle span").text() == 'Show' ? 'Hide' : 'Show');
  $("#product-listing-area").toggleClass("col-md-12");
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
    $(".combination:last-child").clone().appendTo("#combination-area");
    // $("#combination-area").append(new_block);
  }else{
    alert("You already have 6 combinations");
  }
  // alert(existing_count);
});

// remove combination
$(document).on("click",".remover",function(){
  $(this).closest(".combination").remove();
});