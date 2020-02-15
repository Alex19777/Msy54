$(document).ready(function(){
  $(".button_order").click(function () {
      $(".shadow_block").css("display", "block");
      $('body').css('overflow','hidden');
    });

  $("#content").click(function () {
      $(".shadow_block").css("display", "none");
      $('body').css('overflow','auto');
    });

});
