<!DOCTYPE html>
 <html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Parimis est un nouveau hôtel de luxe avec le Spa 
    et le Restaurant gourmet en plein coeur de Paris">
    <meta name="keywodrs" content="parimis, ParimiS, hôtel, hôtels, hotel, hotels, hôtel-spa, hôtel-spa Parimis, hotel spa, hotel spa parimis, luxe, hôtel de luxe, 
    hôtel de luxe à Paris, hotel de luxe a paris, spa, soins, relaxation, restaurant, gourmet, hébérgement, hebergement,
    chambre, chambres, suite, paris, 8 arrondissement, centre de Paris">
    <meta property="og:title" content="Parimis : hôtel de luxe, restaurant et spa à Paris">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://hotel-parimis.a-bogdanova.fr/">
    <meta property="og:image" content="http://hotel-parimis.a-bogdanova.fr/images/facade_canal1920x1000.jpg">
    <meta property="og:description" content="Réservez votre séjour à Paris dans un nouveau hôtel de luxe 
    au centre de Paris avec son spa et son restaurant gourmet.">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ParimiS ***** Hôtel | Spa | Restaurant à Paris</title>
    <link rel="stylesheet" type="text/css" href="styles/style_slider.css">
    <link rel="stylesheet" type="text/css" href="scripts/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="icon" type="image/png" href="images/parimis_favicon.png" />
    <link rel="stylesheet" type="text/css" href="scripts/Camera-master/css/camera.css">
  </head>
  
  <body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <!-- SLIDER PAGE INDEX PARIMIS -->
  <div id="classique">
    <div id="slider_classique" class="slider_index">
      <div data-src="images/facade_canal1920x1000.jpg"></div>
      <div data-src="images/hotel_accueil1920x1000.jpg"></div>
      <div data-src="images/plats_resto1920x1000.jpg"></div>
      <div data-src="images/table_restaurant1920x1000.jpg"></div>
      <div data-src="images/piscine1920x1000.jpg"></div>
      <div data-src="images/spa1920x1000.jpg"></div>
    </div>
    <div class="fleche_footer" id="fleche_classique">
      <a href="#footer"><img src="images/fleche_bas.png" 
        alt="flèche vers les informations complémentaires" title="afficher des informations complémentaires"></a>
    </div>
    <?php include("header.php"); ?>
    <!-- CORPS DE LA PAGE INDEX -->
    <div class="conteneur">
      <section>
        <article>
          <div class="bouton_fleche">
            <h2>Bienvenue chez ParimiS</h2> 
            <img class="fleche_slide" src="images/fleche_bas.png" alt="article Hotel Restaurant Spa">
          </div>
          <div class="cacher">
            <h3>Hotel | Restaurant | Spa</h3>
            <p>
              Parimis est un groupe international d'<strong>hôtels de luxe</strong> qui vient récemment 
              d'ouvrir à <em>Paris</em> un <em>hôtel chic</em> avec son <a href="restaurant.php" target="_blank">restaurant gourmet</a> et son <a href="spa.php" target="_blank">spa</a>. 
            </p>
            <p>
              <strong>Hôtel de luxe Parimis</strong> bénéficie d'une <a href="acces.php" target="_blank">situation idéale</a>  
              dans un quartier chic en plein coeur de Paris à proximité de la tour Eiffel et des bateaux-mouches. 
              Pour son nouveau <strong>hôtel de luxe</strong> la société Parimis a choisi un magnifique palais ancien
              dont elle s'est chargé de la restauration.
            </p>
            <p>
              Nos clients pourront profiter ainsi à la fois du <em>charme</em> des intérieurs de l'époque 
              et du maximum de <em>confort</em> dans nos <a href="chambres.php">chambres équipées</a> 
              avec toutes les dernières technologies.
            </p>
            <div class="bouton_reserver_mobile">
              <a href="reservation.php">Réserver</a>
            </div>
          </div>
        </article>
        <!-- GAMMES CHAMBRES -->
        <div class="services_accueil menu_chambres">
          <h2>Tous nos services</h2>
          <div class="chambre menu_chambre_classique service">
            <a href="chambres.php">
              <div class="type_chambre">
                <img src="images/lit_confort200x200.jpg" alt="lit double, chambre confort">
                <div>Chambres</div>
              </div>
            </a>
          </div>
          <div class="chambre menu_chambre_confort service">
            <a href="restaurant.php">
              <div class="type_chambre">
                <img src="images/table_restaurant200x200.jpg" alt="salle du restaurant">
                <div>Restaurant</div>
              </div>
            </a>
          </div>
          <div class="chambre menu_chambre_deluxe service">
            <a href="spa.php">
              <div class="type_chambre">
                <img src="images/spa200x200.jpg" alt="salon spa">
                <div>Spa</div>
              </div>
            </a>
          </div>
          <div class="clear"></div>
        </div>
      </section>
      <!-- FORMULAIRE RESERVATION -->
      <aside>
        <div class="reservation">
          <h2>Réservation rapide</h2>
          <img src="images/fleche_bas.png" class="fleche_slide2 fleche2" alt="Hôtel : réservation rapide">
          <form method="post" action="index.php" class="reservation_rapide">
            <label for="date_arrivee">Date d'arrivée <sup>*</sup></label><br>
            <input id="date_arrivee" name="date_arrivee" type="date" required><br>
            <label for="date_depart">Date de départ <sup>*</sup></label><br>
            <input id="date_depart" name="date_depart" type="date" required><br>
            <label for="nombre_adultes">Nombre d'adultes <sup>*</sup></label><br>
            <input id="nombre_adultes" name="nombre_adultes" type="number" min="1" max="10" value="1"><br>
            <div class="bouton_page_reservation">
              <a href="reservation.php" title="Vous allez être redirigé vers la page des réservations">Plus d'options</a>
            </div>
            <input class="bouton_validation" type="submit" value="Vérifier la disponibilité"><br>
            <p>Les champs signalés par (<sub>*</sub>) sont obligatoires.</p>
          </form>
        </div>  
      </aside>
      <div class="clear"></div>

    </div>
  </div>
  
  <?php include("footer.php"); ?>
  
  <script type="text/javascript" src="scripts/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="scripts/Camera-master/scripts/jquery.min.js"></script>
  <script src="scripts/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
  <script type="text/javascript" src="scripts/Camera-master/scripts/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="scripts/Camera-master/scripts/jquery.mobile.customized.min.js"></script>
  <script type="text/javascript" src="scripts/Camera-master/scripts/camera.js"></script>
  <script type="text/javascript" src="scripts/scripts.js"></script>
  <script type="text/javascript">
    $('footer').addClass('footer_index');
  </script>
  </body>
</html>