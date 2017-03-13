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

///////////////////////////////////////// Datepicker
/*$('#date_arrivee').datepicker({
  dateFormat: 'dd/mm/yy', monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'], dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa']
});
$('#date_depart').datepicker({
  dateFormat: 'dd/mm/yy', monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'], dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa']
});

$('.datepicker').datepicker({
  dateFormat: 'dd/mm/yy', monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'], dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa']
});
$('.datepicker').datepicker({
  dateFormat: 'dd/mm/yy', monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'], dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa']
});*/

///////////////////////////////////////// DATEPICKER

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
dateD2 = $('.datepicker_ar').parent().next().find('input').datepicker({
  minDate: +1,
  firstDay:1
}).datepicker('setDate', 1);

// DATEPICKER POUR UNE DATE (RESTAURANT SPA)
$('.datepicker_a').datepicker({
  firtsDay:1, minDate : dateToday
}).datepicker('setDate', dateToday);

/*var dateToday = new Date();
$('.datepicker_a').datepicker({
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

//////////////////////////////////////// PAGE PRESSE

$('.article_presse').click(function(){
  if($(this).hasClass('article_presse_click')){
    $(this).removeClass('article_presse_click');
  }else{
    $(this).addClass('article_presse_click');
  }
});

///////////////////////////////////// PAGE RESERVATIONS
$('#reserver_chambre').click(function(){
  if($('#reserver_chambre').is(':checked')){
    $('#formulaire_reserver_chambre').slideDown();
    $('.required').each(function(){
      $(this).attr('required', true);
    });
  }else{
    $('#formulaire_reserver_chambre').slideUp();
    $('.required').each(function(){
      $(this).attr('required', false);
    });
  }
});
$('#reserver_table').click(function(){
  if($('#reserver_table').is(':checked')){
    $('#formulaire_reserver_table').slideDown();
    $('.required_restaurant').each(function(){
      $(this).attr('required', true);
    });
  }else{
    $('#formulaire_reserver_table').slideUp();
    $('.required_restaurant').each(function(){
      $(this).attr('required', false);
    });
  }
});
$('#reserver_soin').click(function(){
  if($('#reserver_soin').is(':checked')){
    $('#formulaire_reserver_soin').slideDown();
    $('.required_spa').each(function(){
      $(this).attr('required', true);
    });
  }else{
    $('#formulaire_reserver_soin').slideUp();
    $('.required_spa').each(function(){
      $(this).attr('required', false);
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
