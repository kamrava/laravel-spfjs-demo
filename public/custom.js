$(function() {
  $('header nav a').click(function() {
    if (!$(this).hasClass("active")) {
      $("header nav a").removeClass("active");
      $(this).addClass("active");
    }
  });
});
