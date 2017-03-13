////////////////////////////////////// HEADER

// affichage de la nav en scroll
$(window).scroll(function(){
  if($(document).scrollTop() > 135 && $(window).width() >= 700){
    $('#cacher_header').hide();
    $('#nav_scroll').show();
  }else if($(document).scrollTop() <= 135 && $(window).width() >= 700){
    $('#cacher_header').show();
    $('#nav_scroll').hide();
  }
});

// AFFICHAGE NAVIGATION MOBILE

$('.menu_mobile').click(function(){
  $('#nav_scroll').animate({
    width:'250px'
  }, 'slow');
});
$('.croix_menu_mobile').click(function(){
  $('#nav_scroll').animate({
    width:'0px'
  }, 'slow');
});

// AFFICHAGE SOUS-MENUS MOBILE
if($(window).width() <= 800){
  $('.prevent').click(function(event){
    event.preventDefault();
  });
}

// Affichage champ recherche mobile
$('#icone_recherche').click(function(){
  if($('.recherche_mobile').css('display') == 'none' && $(window).width()<= 700){
    $('.recherche_mobile').fadeTo('slow',1);
  }else{
    $('.recherche_mobile').fadeTo('slow',0, function(){
      $('.recherche_mobile').css({display: 'none'});
    });
  }
});

///////////////////////////////////// SLIDE DOWN / SLIDE UP
$('.fleche_slide').click(function(){
  if($(this).attr('src') == 'images/fleche_bas.png'){
    $(this).attr('src', 'images/fleche_haut.png');
    $(this).parent().parent().animate({width:'100%'}, 'slow', function(){
      $(this).children('.cacher').slideDown('slow');
  });
  }else if($(this).attr('src') == 'images/fleche_haut.png' && $(window).width()<=700){
    $(this).attr('src', 'images/fleche_bas.png');
    $(this).parent().next().slideUp('slow');
  }else{
    $(this).attr('src', 'images/fleche_bas.png');
    $(this).parent().next().slideUp('slow', function(){
      $('article').animate({width:'326px'}, 'slow');
    });
  }
}); 

$('.fleche_slide2').click(function(){
  if($(this).attr('src') == 'images/fleche_bas.png'){
    $(this).attr('src', 'images/fleche_haut.png');
    $(this).next().slideDown('slow');
  }else{
    $('.fleche_slide2').attr('src', 'images/fleche_bas.png');
    $(this).next().slideUp('slow');
  }
});


///////////////////////////// RESTAURANT : fixe formulaire réservation scroll-down

$(window).scroll(function(){
  if($(document).scrollTop() > 135){
    $('.reservation_restaurant').css({
      position:'fixed',
      top:'55px'
    });
  }else{
    $('.reservation_restaurant').css({
      position:'absolute',
      top:'18px'
    });
  }
});

////////////////////////////// RESTAURANT : fixe menu scroll-down
$(window).scroll(function(){
  if($(document).scrollTop() >= $(window).height()*2.2){
    $('#menu_page_restaurant').css({
      position:'absolute',
      bottom:'-210vh',
      width:'100%'
    });
  }else{
    $('#menu_page_restaurant').css({
      position:'fixed',
      bottom:'10px'
    });
  }
});

////////////////////////////// CHAMBRES : fixe menu scroll-down
$(window).scroll(function(){
  if($(document).scrollTop() >= $(window).height()*3.3){
    $('#menu_page_chambres').css({
      position:'absolute',
      bottom:'-325vh',
      width:'93%'
    });
  }else{
    $('#menu_page_chambres').css({
      position:'fixed',
      bottom:'10px'
    });
  }
});

//////////////////////////// SPA : fixe menu scroll-down
$(window).scroll(function(){
  if($(document).scrollTop() >= $(window).height()*4.4){
    $('#menu_page_spa').css({
      position:'absolute',
      bottom:'-430vh',
      width:'93%'
    });
  }else{
    $('#menu_page_spa').css({
      position:'fixed',
      bottom:'10px'
    });
  }
});


/////////////////////////////////////// PAGE ACTUALITE

$('.actualite_suite').click(function(){
  if($(this).next().css('display') == 'none'){
    $(this).next().slideDown();
  }else{
    $(this).next().slideUp();
  }
});
      
///////////////////////////////////////// FOOTER

// Changement de l'apprence des icones au survol
// facebook
$('#facebook').mouseover(function(){
  $(this).attr('src', 'images/facebook_bleu.png');
  });
$('#facebook').mouseout(function(){
  $(this).attr('src', 'images/facebook_alpha.png');
});
// twitter
$('#twitter').mouseover(function(){
  $(this).attr('src', 'images/twitter_bleu.png');
});
$('#twitter').mouseout(function(){
  $(this).attr('src', 'images/twitter_alpha.png');
});
// google plus
$('#google_plus').mouseover(function(){
  $(this).attr('src', 'images/google_plus_rouge.png');
});
$('#google_plus').mouseout(function(){
  $(this).attr('src', 'images/google_plus_alpha.png');
});
// vimeo
$('#vimeo').mouseover(function(){
  $(this).attr('src', 'images/vimeo_bleu.png');
});
$('#vimeo').mouseout(function(){
  $(this).attr('src', 'images/vimeo_alpha.png');
});
// tripadvisor
$('#tripadvisor').mouseover(function(){
  $(this).attr('src', 'images/tripadvisor_vert.png');
});
$('#tripadvisor').mouseout(function(){
  $(this).attr('src', 'images/tripadvisor_alpha.png');
});
