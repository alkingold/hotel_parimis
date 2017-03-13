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
      width:'100%'
    });
  }else{
    $('#menu_page_chambres').css({
      position:'fixed',
      bottom:'10px'
    });
  }
});

//////////////////////////////////////// PAGE PRESSE

$('#article_presse1').click(function(){
  if($(this).hasClass('article_presse_click') && $(window).width()>700){
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.2,0.2) rotate(-400deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'5%',
      left:'17%'
    });
  }else if($(this).hasClass('article_presse_click') && $(window).width()<=700 && $(window).width()>=480){
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.15,0.15) rotate(-400deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'5%',
      left:'17%'
    });
  }else if($(this).hasClass('article_presse_click') && $(window).width()<480){
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.1,0.1) rotate(-400deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'5%',
      left:'17%'
    });
  }else{
    $(this).addClass('article_presse_click');
    $(this).css({
      width: '85%',
      transform: 'scale(1,1) rotate(0deg)',
      transformOrigin: '50% 50%',
      position:'relative',
      margin: 'auto',
      zIndex:'10', 
      left:'0',
      bottom:'0'
    });
  }
});

$('#article_presse2').click(function(){
  if($(this).hasClass('article_presse_click') && $(window).width()>700){
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.2,0.2) rotate(400deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'61%',
      left:'62%'
    });
  }else if($(this).hasClass('article_presse_click') && $(window).width()<=700 && $(window).width()>=480) {
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.15,0.15) rotate(376deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'61%',
      left:'62%'
    });
  }else if($(this).hasClass('article_presse_click') && $(window).width()<480){
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.1,0.1) rotate(376deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'61%',
      left:'62%'
    });
  }else{
    $(this).addClass('article_presse_click');
    $(this).css({
      width: '85%',
      transform: 'scale(1,1) rotate(0deg)',
      transformOrigin: '50% 50%',
      position:'relative',
      margin: 'auto',
      zIndex:'10', 
      left:'0',
      bottom:'0'
    });
  }
});

$('#article_presse3').click(function(){
  if($(this).hasClass('article_presse_click') && $(window).width()>700){
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.2,0.2) rotate(365deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'34%',
      left:'38%'
    });
  }else if($(this).hasClass('article_presse_click') && $(window).width()<=700 && $(window).width()>=480){
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.15,0.15) rotate(365deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'34%',
      left:'38%'
    });
  }else if($(this).hasClass('article_presse_click') && $(window).width()<480){
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.1,0.1) rotate(365deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'34%',
      left:'38%'
    });
  }else{
    $(this).addClass('article_presse_click');
    $(this).css({
      width: '85%',
      transform: 'scale(1,1) rotate(0deg)',
      transformOrigin: '50% 50%',
      position:'relative',
      margin: 'auto',
      zIndex:'10', 
      left:'0',
      bottom:'0'
    });
  }
});

$('#article_presse4').click(function(){
  if($(this).hasClass('article_presse_click') && $(window).width()>700){
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.2,0.2) rotate(-365deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'46%',
      left:'23%'
    });
  }else if($(this).hasClass('article_presse_click') && $(window).width()<=700 && $(window).width()>=480){
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.15,0.15) rotate(-365deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'46%',
      left:'23%'
    });
  }else if($(this).hasClass('article_presse_click') && $(window).width()<480){
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.1,0.1) rotate(-365deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'60%',
      left:'23%'
    });
  }else{
    $(this).addClass('article_presse_click');
    $(this).css({
      width: '85%',
      transform: 'scale(1,1) rotate(0deg)',
      transformOrigin: '50% 50%',
      position:'relative',
      margin: 'auto',
      zIndex:'10', 
      left:'0',
      bottom:'0'
    });
  }
});

$('#article_presse5').click(function(){
  if($(this).hasClass('article_presse_click') && $(window).width()>700){
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.2,0.2) rotate(370deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'3%',
      left:'57%'
    });
  }else if($(this).hasClass('article_presse_click') && $(window).width()<=700 && $(window).width()>=480){
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.15,0.15) rotate(370deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'3%',
      left:'57%'
    });
  }else if($(this).hasClass('article_presse_click') && $(window).width()<480){
    $(this).removeClass('article_presse_click');
    $(this).css({
      zIndex:'0',
      width:'800px',
      transform: 'scale(0.1,0.1) rotate(370deg)',
      transformOrigin: 'bottom left',
      position:'absolute',
      bottom:'3%',
      left:'57%'
    });
  }else{
    $(this).addClass('article_presse_click');
    $(this).css({
      width: '85%',
      transform: 'scale(1,1) rotate(0deg)',
      transformOrigin: '50% 50%',
      position:'relative',
      margin: 'auto',
      zIndex:'10', 
      left:'0',
      bottom:'0'
    });
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
