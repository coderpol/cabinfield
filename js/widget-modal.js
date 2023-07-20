// widget close button
$('.btn-dismiss, .widget-trigger').click(function(e){
    $('.widget-area').toggleClass('active');
    var target = $(this).data('target');
    $("#"+target).slideToggle(200);
});

$('#coupon_modal_trigger').click(function(e){
   $('#coupon_modal').addClass("show").show(); 
});
$('#coupon_modal_close').click(function(e){
   $('#coupon_modal').removeClass("show").hide(); 
});