////////////////////////////////////// HEADER

// AFFICHAGE DES LANGUES


// affichage de la nav en scroll
$(window).scroll(function(){
  if($(document).scrollTop() > 135 && $(window).width() >= 700){
    $('#cacher_header').hide();
    $('#nav_scroll').show();
  }else{
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

///////////////////////////////////////// PAGE AVIS

// Affichage formulaire avis
$('.formulaire_avis h3').click(function(){
  if($('.formulaire_avis form').css('display') == 'none'){
    $('.formulaire_avis h3 img').attr('src', 'images/fleche_haut.png');
    $('.formulaire_avis form').slideDown();
  }else{
    $('.formulaire_avis h3 img').attr('src', 'images/fleche_bas.png');
    $('.formulaire_avis form').slideUp();
  }
});

// formulaire avis rating
/*$('.formulaire_note img').function(){
  
  $(this).attr('src', 'images/etoile.png');
});*/
var srcIn = 'images/etoile.png';
var srcOut = 'images/etoile_vide.png';

function idNum(id){
  var id = id.split('_');
  var id = id[1];
  return id;
}
$('formulaire_note img').hover(function(){
  var id = idNum($(this).attr('id'));
  var nbStars = $('.formulaire_note img').length;
  var i;
  for(i=1; i<= nbStars; i++){
    if(i<=id) $('#etoile' + i).attr({src:srcIn});
    else if(i>id) $('#etoile' + i).attr({src:srcOut});
    if(i == id)$('#note').attr({value:i});
  }
});

// Tabs
$('#avis_tabs').tabs();
      
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
