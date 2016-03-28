$( document ).ready(function() {
  
  $(function() {
    $('body').css('display', 'none');
    $('body').fadeIn(1000);
  });

  $("a").click(function() {
    $('body').fadeOut(1000);
  });

  $(".item").hover(
    function(){
      $(".item-info", this).css({opacity:1});
      $(this).children(".darken").css('background','rgba(0,0,0,.7)');
    }, function(){
      $(this).children(".darken").css('background','rgba(0,0,0,0)');
      $(".item-info").css({opacity:0});
    });

  $('.item-info').hover(
    function(){
      $(this).siblings(".darken").css('background','rgba(0,0,0,.7)');
      console.log("hovered");
    }, function(){
      console.log("unhovered");
    });
  });