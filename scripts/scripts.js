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

////////////////////////////////////// SLIDESHOW

$(function(){
  $('#slider_classique').camera({
    fx:'simpleFade',
    alignment: 'center',
    height: 'auto',
    time:4000, 
    transPeriod:2000,
    navigation:false,
    playPause:false
  });
});
$(function(){
  $('#slider_confort').camera({
    fx:'simpleFade',
    alignment: 'center',
    height: 'auto',
    time:4000, 
    transPeriod:2000,
    navigation:false,
    playPause:false
  });
});
$(function(){
  $('#slider_deluxe').camera({
    fx:'simpleFade',
    alignment: 'center',
    height: 'auto',
    time:4000, 
    transPeriod:2000,
    navigation:false,
    playPause:false
  });
});
$(function(){
  $('#slider_suite').camera({
    fx:'simpleFade',
    alignment: 'center',
    height: 'auto',
    time:4000, 
    transPeriod:2000,
    navigation:false,
    playPause:false
  });
});
$(function(){
  $('#slider_spa_evasion').camera({
    fx:'simpleFade',
    alignment: 'center',
    height: 'auto',
    time:4000, 
    transPeriod:2000,
    navigation:false,
    playPause:false
  });
});
$(function(){
  $('#camera_wrap').camera({
    fx:'simpleFade',
    alignment: 'center',
    height: 'auto',
    time:4000, 
    transPeriod:2000,
    navigation:false,
    playPause:false
  });
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

///////////////////////////////////////// DATEPICKER INDEX

// jour d'aujourd'hui objet date
var dateToday = new Date();
// options de tous les datepickers
var descDate = {
  dateFormat: 'dd/mm/yy', 
  monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'], 
  dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
  firtsDay:1,
  showAnim: 'slideDown'
};

// Appliquer des paramètres par défaut à tous les datepickers
$.datepicker.setDefaults(descDate);

// options particulières pour la date d'arrivée et appel datepicker arrivée
var dateA;
dateA = $('#date_arrivee').datepicker({
  minDate: dateToday,
  firstDay:1
}).datepicker('setDate', dateToday).on('change', function(){
  // au choix de la date d'arrivée changer la date de départ
  var dateArriveeMili = Date.parse($('#date_arrivee').datepicker('getDate'));
  var dateDepartMinMili = dateArriveeMili + 86400000; // ajouter 1 jour
  var dateDepartMin = new Date(dateDepartMinMili); // convertir en objet date départ
  dateD.datepicker('option', 'minDate', dateDepartMin).datepicker('setDate', dateDepartMin);
});


// options particulières pour la date de départ et appel datepicker départ
var dateD;
dateD = $('#date_depart').datepicker({
  minDate: +1,
  firstDay:1
}).datepicker('setDate', 1);

/////////////////////////////////////////////////////// DATEPICKER CLASSE (CHAMBRES)

// options particulières pour la date d'arrivée et appel datepicker arrivée
var dateA2;
dateA2 = $('.datepicker_ar').datepicker({
  minDate: dateToday,
  firstDay:1
}).datepicker('setDate', dateToday).on('change', function(){
  // au choix de la date d'arrivée changer la date de départ
  var dateArriveeMili = Date.parse($(this).datepicker('getDate'));
  var dateDepartMinMili = dateArriveeMili + 86400000; // ajouter 1 jour
  var dateDepartMin = new Date(dateDepartMinMili); // convertir en objet date départ
  dateD2.datepicker('option', 'minDate', dateDepartMin).datepicker('setDate', dateDepartMin);
});

// options particulières pour la date de départ et appel datepicker départ
var dateD2;
dateD2 = $('.datepicker_ar').next().next().next().next().datepicker({
  minDate: +1,
  firstDay:1
}).datepicker('setDate', 1);

// DATEPICKER POUR UNE DATE (RESTAURANT SPA)
$('.datepicker_a').datepicker({
  firtsDay:1, minDate : dateToday
}).datepicker('setDate', dateToday);

/*$('.datepicker_a').datepicker({
  dateFormat: 'dd/mm/yy', monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'], 
  dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'], minDate: dateToday, maxDate: '+6m'
}).datepicker('setDate', dateToday);
$('.datepicker_d').datepicker({
  dateFormat: 'dd/mm/yy', monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'], 
  dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'], minDate: '+1d'
}).datepicker('setDate', 7);*/

///////////////////////////////////////// PAGE AVIS

// Tabs
$('#avis_tabs').tabs();

/////////////////////////////////////// PAGE ACTUALITE

$('.actualite_suite').click(function(){
  if($(this).next().css({display:'none'})){
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
