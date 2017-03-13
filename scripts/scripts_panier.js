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
    $('.recherche_mobile').slideDown();
  }else{
    $('.recherche_mobile').slideUp();
  }
});

////////////////////////////////////// PANIER
document.getElementById('payer_reserver').addEventListener('click', function(event){
  if($('#cgv').is(':checked') == false){
    event.preventDefault();
    $('#cgv_erreur').css({
      display:'block'
    });
  }
})
      
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
