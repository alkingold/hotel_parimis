<!DOCTYPE html>
 <html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Les 4 gammes de chambres de l'hötel Parimis repondront aux goûts 
    de nos visiteurs les plus exigeants : chambre classique, chambre confort, chambre deluxe et la suite">
    <meta name="keywords" content="parimis, ParimiS, hôtel, hôtels, hotel, hotels, luxe, hôtel de luxe, 
    hôtel de luxe à Paris, hotel de luxe a paris, hébérgement, hebergement, chambre, chambres, suite, 
    chambres confortables, chambre confortable, paris, 8 arrondissement, centre de Paris">
    <meta property="og:title" content="Gammes de chambres à l'hôtel de luxe Parimis à Paris">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://hotel-parimis.a-bogdanova.fr/chambres.php">
    <meta property="og:image" content="http://hotel-parimis.a-bogdanova.fr/images/lit_confort1920x1000.jpg">
    <meta property="og:description" content="Réservez une chambre dans un nouveau hôtel de luxe en plein coeur de Paris">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Parimis Hôtel - Chambres</title>
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
  <!-- SLIDER CHAMBRE CLASSIQUE -->
  <div id="classique">
    <div id="slider_classique">
      <div data-src="images/lit_classique1920x1000.jpg"></div>
      <div data-src="images/bain_classique1920x1000.jpg"></div>
    </div>
    <div class="fleche_footer" id="fleche_classique">
      <a href="#confort"><img src="images/fleche_bas.png" alt="flèche vers chambre confort" 
        title="afficher la chambre confort"></a>
    </div>
    <?php include("header.php"); ?>
    <!-- CORPS DE LA PAGE CHAMBRE CLASSIQUE -->
    <div class="conteneur">
      <section class="section_chambres">
        <article>
          <div class="bouton_fleche">
            <h2>Chambre Classique</h2> 
            <img class="fleche_slide" src="images/fleche_bas.png" 
            alt="afficher la description de la chambre classique" title="afficher la description">
          </div>
          <div class="cacher">
            <div class="prix">
              À partir de <br>
              <span>450 €</span>
            </div>
            <p>
              La gamme de <strong>chambres</strong> <em>classique</em> avec son décor sobre et raffiné 
              conviendra aussi bien pour un voyage d'affaires que pour un séjour touristique avec ou sans 
              et sans enfants ou un week-end romantique en couple.
            </p>
            <h4>Caractéristiques de la gamme</h4>
            <ul class="caracteristiques_chambre">
              <li>Surface : 28m<sub>2</sub></li>
              <li>Lit double, possibilité de lit bébé</li>
              <li>Bureau, prise de courant</li>
              <li>Coin salon avec fauteuil</li>
              <li>Fer et planche à repasser</li>
              <li>Climatisation</li>
              <li>Salle de bain spacieuse, baignoire</li>
              <li>Miroir éclairé</li>
              <li>Sèche-cheveux</li>
              <li>2 peignoirs, serviettes</li>
              <li>Kit douche</li>
              <li>Wi-Fi gratuit</li>
              <li>TV écran plat</li>
              <li>Coffre-fort</li>
              <li>Mini-bar, payant</li>
            </ul>
            <div class="bouton_reserver_mobile">
              <a href="reservation.php">Réserver</a>
            </div>
          </div>
        </article>
        <!-- GAMMES CHAMBRES -->
        <div class="menu_chambres" id="menu_page_chambres">
          <h2>Toutes les gammes</h2>
          <div class="chambre menu_chambre_classique">
            <a href="#classique">
              <div class="type_chambre">
                <img src="images/lit_classique200x200.jpg" alt="image représentant le lit d'une chambre classique à l'hôtel Parimis">
                <div>Classique</div>
              </div>
            </a>
          </div>
          <div class="chambre menu_chambre_confort">
            <a href="#confort">
              <div class="type_chambre">
                <img src="images/lit_confort200x200.jpg" alt="image représentant le lit d'une chambre confort à l'hôtel Parimis">
                <div>Confort</div>
              </div>
            </a>
          </div>
          <div class="chambre menu_chambre_deluxe">
            <a href="#deluxe">
              <div class="type_chambre">
                <img src="images/lit_deluxe200x200.jpg" alt="image représentant le lit d'une chambre deluxe à l'hôtel Parimis">
                <div>Deluxe</div>
              </div>
            </a>
          </div>
          <div class="chambre menu_suite">
            <a href="#suite">
              <div class="type_chambre">
                <img src="images/lit_suite200x200.jpg" alt="image représentant le lit d'une suite à l'hôtel Parimis">
                <div>Suite</div>
              </div>
            </a>
          </div>
          <div class="clear"></div>
        </div>
      </section>
      <!-- FORMULAIRE RESERVATION -->
      <aside class="aside_chambres">
        <div class="reservation">
          <h2>Réserver cette chambre</h2>
          <img src="images/fleche_bas.png" class="fleche_slide2 fleche2" alt="afficher le formulaire de réservation"
          title="afficher le formulaire de réservation">
          <form method="post" action="chambres.php" class="reservation_rapide">
            <label for="date_arrivee_classique">Date d'arrivée <sup>*</sup></label><br>
            <input id="date_arrivee_classique" class="datepicker datepicker_ar" name="date_arrivee_classique" type="date" required><br>
            <label for="date_depart_classique">Date de départ <sup>*</sup></label><br>
            <input id="date_depart_classique" class="datepicker datepicker_d" name="date_depart" type="date" required><br>
            <label for="gamme_chambre_classique">Gamme de chambre souhaitée</label><br>
            <select id="gamme_chambre_classique" class="gamme_chambre" name="gamme_chambre">
              <option value="chambre_classique" selected>Chambre Classique</option>
              <option value="chambre_confort">Chambre Confort</option>
              <option value="chambre_deluxe">Chambre Deluxe</option>
              <option value="suite">Suite</option>
            </select><br>
            <label for="nombre_adultes_classique">Nombre d'adultes <sup>*</sup></label><br>
            <input class="nombre_adultes" id="nombre_adultes_classique" name="nombre_adultes_chambre" required type="number" min="1" max="10" value="1"><br>
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
  <!-- SLIDER CHAMBRE CONFORT -->
  <div id="confort">
  <div id="slider_confort">
      <div data-src="images/lit_confort1920x1000.jpg"></div>
      <div data-src="images/bain_confort1920x1000.jpg"></div>
  </div>
  <div class="fleche_footer fleche_chambre">
    <a href="#deluxe"><img src="images/fleche_bas.png" alt="aller vers la chambre Deluxe" title="afficher la chambre deluxe"></a>
  </div>
  <!-- CORPS DE LA PAGE CHAMBRE CONFORT -->
  <div class="conteneur conteneur_confort">
    <section class="section_chambres2">
      <article>
        <div class="bouton_fleche">
          <h2>Chambre Confort</h2> 
          <img class="fleche_slide" src="images/fleche_bas.png" 
          alt="afficher la description de la chambre confort" title="afficher la description">
        </div>
        <div id="contenu_confort" class="cacher">
          <div class="prix">
            À partir de <br>
            <span>600 €</span>
          </div>
          <p>
            La gamme de <strong>chambres</strong> <em>confort</em> séduira nos clients avec une ambiance à la fois
            chaleureuse et luxueuse. De couleurs pastèles cette gamme est idéale pour un séjour romantique, 
            mais conviendra aussi parfaitement à une famille.
          </p>
          <h4>Caractéristiques de la gamme</h4>
          <ul class="caracteristiques_chambre">
            <li>Surface : 40m<sub>2</sub></li>
            <li>Lit double Queen, possibilité de lit bébé</li>
            <li>Bureau, prise de courant</li>
            <li>Coin salon avec fauteuil</li>
            <li>Fer et planche à repasser</li>
            <li>Climatisation</li>
            <li>Salle de bain en marbre, baignoire</li>
            <li>Miroir éclairé</li>
            <li>Sèche-cheveux</li>
            <li>2 peignoirs, serviettes</li>
            <li>Kit beauté</li>
            <li>Wi-Fi gratuit</li>
            <li>TV écran plat, full HD</li>
            <li>Coffre-fort</li>
            <li>Mini-bar gratuit</li>
          </ul>
          <div class="bouton_reserver_mobile">
            <a href="reservation.php">Réserver</a>
          </div>
        </div>
      </article>
    </section>
    <!-- FORMULAIRE RESERVATION -->
    <aside class="aside_chambres2">
      <div class="reservation">
        <h2>Réserver cette chambre</h2>
        <img src="images/fleche_bas.png" class="fleche_slide2 fleche2" alt="afficher le formulaire de réservation" 
        title="afficher le formulaire">
        <form method="post" action="chambres.php" class="reservation_rapide">
          <label for="date_arrivee_confort">Date d'arrivée <sup>*</sup></label><br>
          <input id="date_arrivee_confort" class="datepicker datepicker_ar" name="date_arrivee" type="date" required><br>
          <label for="date_depart_confort">Date de départ <sup>*</sup></label><br>
          <input id="date_depart_confort" class="datepicker datepicker_d" name="date_depart" type="date" required><br>
          <label for="gamme_chambre_confort">Gamme de chambre souhaitée</label><br>
          <select id="gamme_chambre_confort" class="gamme_chambre" name="gamme_chambre">
            <option value="chambre_classique">Chambre Classique</option>
            <option value="chambre_confort" selected>Chambre Confort</option>
            <option value="chambre_deluxe">Chambre Deluxe</option>
            <option value="suite">Suite</option>
          </select><br>
          <label for="nombre_adultes_confort">Nombre d'adultes <sup>*</sup></label><br>
          <input class="nombre_adultes" id="nombre_adultes_confort" name="nombre_adultes_chambre" required type="number" min="1" max="10" value="1"><br>
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
  <!-- SLIDER CHAMBRE DELUXE -->
  <div id="deluxe">
  <div id="slider_deluxe">
      <div data-src="images/lit_deluxe1920x1000.jpg"></div>
      <div data-src="images/bain_deluxe1920x1000.jpg"></div>
  </div>
  <div class="fleche_footer fleche_chambre">
    <a href="#suite"><img src="images/fleche_bas.png" alt="aller vers la chambre suite" title="afficher la gamme suite"></a>
  </div>
  <!-- CORPS DE LA PAGE CHAMBRE DELUXE -->
  <div class="conteneur conteneur_confort">
    <section class="section_chambres2">
      <article>
        <div class="bouton_fleche">
          <h2>Chambre Deluxe</h2> 
          <img src="images/fleche_bas.png" alt="flèche : développer la description - chambre Deluxe" 
          title="afficher la description" class="fleche_slide">
        </div>
        <div class="cacher">
          <div class="prix">
            À partir de <br>
            <span>700 €</span>
          </div>
          <p>
            D'un décor audacieux et élégant, la gamme de <strong>chambres</strong> <em>deluxe</em> 
            vous séduira avec la générosité de son espace. Avec ses trois lits et une salle de bain spacieuse 
            comprenant une douche et une baignoire, elle accueillera confortablement une grande famille.
          </p>
          <h4>Caractéristiques de la gamme</h4>
          <ul class="caracteristiques_chambre">
            <li>Surface : 50m<sub>2</sub></li>
            <li>Lit double Queen, 2 lits simples, possibilité de lit bébé</li>
            <li>Bureau, prise de courant</li>
            <li>Salon séparé avec fauteuil</li>
            <li>Fer et planche à repasser</li>
            <li>Climatisation</li>
            <li>Salle de bain en marbre, baignoire et douche</li>
            <li>Miroir éclairé</li>
            <li>Sèche-cheveux</li>
            <li>2 peignoirs, serviettes</li>
            <li>Kit douche et kit beauté</li>
            <li>Wi-Fi gratuit</li>
            <li>TV écran plat, full HD (2postes)</li>
            <li>Coffre-fort</li>
            <li>Mini-bar gratuit</li>
          </ul>
          <div class="bouton_reserver_mobile">
            <a href="reservation.php">Réserver</a>
          </div>
        </div>
      </article>
    </section>
    <!-- FORMULAIRE RESERVATION -->
    <aside class="aside_chambres2">
      <div class="reservation">
        <h2>Réserver cette chambre</h2>
        <img src="images/fleche_bas.png" class="fleche_slide2 fleche2" alt="flèche développer formulaire de réservation"
        title="afficher le formulaire de réservation">
        <form method="post" action="chambres.php" class="reservation_rapide">
          <label for="date_arrivee_deluxe">Date d'arrivée <sup>*</sup></label><br>
          <input id="date_arrivee_deluxe" class="datepicker datepicker_ar" name="date_arrivee" type="date" required><br>
          <label for="date_depart_deluxe">Date de départ <sup>*</sup></label><br>
          <input id="date_depart_deluxe" class="datepicker datepicker_d" name="date_depart" type="date" required><br>
          <label for="gamme_chambre_deluxe">Gamme de chambre souhaitée</label><br>
          <select id="gamme_chambre_deluxe" class="gamme_chambre" name="gamme_chambre">
            <option value="chambre_classique">Chambre Classique</option>
            <option value="chambre_confort">Chambre Confort</option>
            <option value="chambre_deluxe" selected>Chambre Deluxe</option>
            <option value="suite">Suite</option>
          </select><br>
          <label for="nombre_adultes_deluxe">Nombre d'adultes <sup>*</sup></label><br>
          <input class="nombre_adultes" id="nombre_adultes_deluxe" name="nombre_adultes_chambre" required type="number" min="1" max="10" value="1"><br>
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
  <!-- SLIDER CHAMBRE SUITE -->
  <div id="suite">
  <div id="slider_suite">
      <div data-src="images/lit_suite1920x1000.jpg"></div>
      <div data-src="images/bain_suite1920x1000.jpg"></div>
  </div>
  <div class="fleche_footer fleche_chambre">
    <a href="#footer"><img src="images/fleche_bas.png" alt="flèche informations complémentaires" 
      title="afficher des informations complémentaires"></a>
  </div>
  <!-- CORPS DE LA PAGE CHAMBRE SUITE -->
  <div class="conteneur conteneur_confort">
    <section class="section_chambres2">
      <article>
        <div class="bouton_fleche">
          <h2>Suite</h2> 
          <img class="fleche_slide" src="images/fleche_bas.png" alt="flèche afficher la description de la suite" 
          title="afficher la description">
        </div>
        <div class="cacher">
          <div class="prix">
            À partir de <br>
            <span>850 €</span>
          </div>
          <p>
            La gamme <strong>suite</strong> luxueusement décorée dans un style inspiré de l'Empire 
            a tout pour séduire nos clients les plus exigeants. Spacieuses, avec leurs trois pièces, 
            deux salles de bain comprenant deux douches, deux baignoires et deux jacuzzi, nos suites
            satisferont des couples ainsi que des familles.
          </p>
          <h4>Caractéristiques de la gamme</h4>
          <ul class="caracteristiques_chambre">
            <li>Surface : 90m<sub>2</sub></li>
            <li>2 chambres</li>
            <li>1 salon avec quatre fauteuils et une table</li>
            <li>Lit double King, 2 lits simples, possibilité de lit bébé</li>
            <li>2 bureaux, prise de courant</li>
            <li>Fer et planche à repasser</li>
            <li>Climatisation</li>
            <li>2 Salles de bain en pierre, baignoires, douches, jacuzzi</li>
            <li>Miroirs éclairés</li>
            <li>Sèches-cheveux</li>
            <li>4 peignoirs, serviettes</li>
            <li>Kit douche et kit beauté</li>
            <li>Wi-Fi gratuit</li>
            <li>TV écran plat et home-cinéma</li>
            <li>Coffre-fort</li>
            <li>Mini-bar gratuit</li>
          </ul>
          <div class="bouton_reserver_mobile">
            <a href="reservation.php">Réserver</a>
          </div>
        </div>
      </article>
    </section>
    <!-- FORMULAIRE RESERVATION -->
    <aside class="aside_chambres2">
      <div class="reservation">
        <h2>Réserver cette chambre</h2>
        <img src="images/fleche_bas.png" class="fleche_slide2 fleche2" alt="flèche afficher le formulaire de réservation" 
        title="afficher le formulaire de réservation">
        <form method="post" action="chambres.php" class="reservation_rapide">
          <label for="date_arrivee_suite">Date d'arrivée <sup>*</sup></label><br>
          <input id="date_arrivee_suite" class="datepicker datepicker_ar" name="date_arrivee" type="date" required><br>
          <label for="date_depart_suite">Date de départ <sup>*</sup></label><br>
          <input id="date_depart_suite" class="datepicker datepicker_d" name="date_depart" type="date" required><br>
          <label for="gamme_chambre_suite">Gamme de chambre souhaitée</label><br>
          <select id="gamme_chambre_suite" class="gamme_chambre" name="gamme_chambre">
            <option value="chambre_classique">Chambre Classique</option>
            <option value="chambre_confort">Chambre Confort</option>
            <option value="chambre_deluxe">Chambre Deluxe</option>
            <option value="suite" selected>Suite</option>
          </select><br>
          <label for="nombre_adultes_suite">Nombre d'adultes <sup>*</sup></label><br>
          <input class="nombre_adultes" id="nombre_adultes_suite" name="nombre_adultes_chambre" required type="number" min="1" max="10" value="1"><br>
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
    $('header').addClass('header_chambres');
  </script>
  </body>
</html>