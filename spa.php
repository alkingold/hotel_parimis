<!DOCTYPE html>
 <html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Le spa de l'hôtel Parimis propose plusieurs types de soin (soin détente, soin découverte, soin relaxant, soin plaisir et soin évasion) qui satisferons tous les goûts">
    <meta name="keywords" content="parimis, Parimis, ParimiS, hôtel-spa, hotel-spa, spa, soins, soin, massage, détente, detente, relaxation, soin relaxant">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Parimis Hôtel - Spa</title>
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
  <!-- SLIDER SPA DETENTE -->
  <div id="detente">
    <div id="slider_classique">
      <div data-src="images/serviette1920x1000.jpg"></div>
      <div data-src="images/nage1920x1000.jpg"></div>
    </div>
    <div class="fleche_footer" id="fleche_classique">
      <a href="#decouverte"><img src="images/fleche_bas.png" alt="flèche vers soin découverte" 
        title="afficher le soin découverte"></a>
    </div>
    <?php include("header.php"); ?>
    <!-- CORPS DE LA PAGE SPA DETENTE -->
    <div class="conteneur">
      <section class="section_spa section_spa1">
        <article>
          <div class="bouton_fleche">
            <h2>Soin Détente</h2> 
            <img class="fleche_slide" src="images/fleche_bas.png" 
            alt="afficher la description du soin détente" title="afficher la description">
          </div>
          <div class="cacher ">
            <div class="prix">
              Durée 1h<br>
              <span>100 €</span>
            </div>
            <p>
              Notre soin détente utilise des techniques traditionnelles vérifiées dans le temps pour 
              enlever la fatigue et le stress et instaurer le calme et le bien-être.
            </p>
            <h4>Caractéristiques du soin</h4>
            <ul class="caracteristiques_chambre">
              <li>Durée 1h</li>
              <li>Massage classique</li>
              <li>Aromathérapie, huiles essentielles</li>
              <li>Soin eau thermale</li>
              <li>Masque visage</li>
              <li>Gommage</li>
              <li>Sauna</li>
              <li>Piscine et jacuzzi</li>
            </ul>
            <div class="bouton_reserver_mobile">
              <a href="reservation.php">Réserver</a>
            </div>
          </div>
        </article>
        <!-- TOUS LES SOINS -->
        <div class="menu_chambres menu_spa" id="menu_page_spa">
          <h2>Tous nos soins</h2>
          <div class="chambre menu_chambre_classique spa">
            <a href="#detente">
              <div class="type_chambre">
                <img src="images/serviette200x200.jpg" alt="image soin détente">
                <div>Détente</div>
              </div>
            </a>
          </div>
          <div class="chambre menu_chambre_confort spa">
            <a href="#decouverte">
              <div class="type_chambre">
                <img src="images/masque200x200.jpg" alt="image soin découverte">
                <div>Découverte</div>
              </div>
            </a>
          </div>
          <div class="chambre menu_chambre_deluxe spa">
            <a href="#relaxant">
              <div class="type_chambre">
                <img src="images/serviette_huile200x200.jpg" alt="image soin relaxant">
                <div>Relaxant</div>
              </div>
            </a>
          </div>
          <div class="chambre menu_suite spa">
            <a href="#plaisir">
              <div class="type_chambre">
                <img src="images/fleur_rouge200x200.jpg" alt="image soin plaisir">
                <div>Plaisir</div>
              </div>
            </a>
          </div>
          <div class="chambre menu_suite spa">
            <a href="#evasion">
              <div class="type_chambre">
                <img src="images/spa200x200.jpg" alt="image soin évasion">
                <div>Évasion</div>
              </div>
            </a>
          </div>
          <div class="clear"></div>
        </div>
      </section>
      <!-- FORMULAIRE RESERVATION -->
      <aside class="aside_spa aside_spa1">
        <div class="reservation">
          <h2>Réserver le soin</h2>
          <img src="images/fleche_bas.png" class="fleche_slide2 fleche2" alt="afficher le formulaire de réservation"
          title="afficher le formulaire de réservation">
          <form method="post" action="spa.php" class="reservation_rapide">
            <label for="date_soin_detente">Date du soin <sup>*</sup></label><br>
            <input id="date_soin_detente" class="datepicker datepicker_ar" name="date_soin" type="date" required><br>
            <label for="type_soin_detente">Type de soins souhaité</label><br>
            <select id="type_soin_detente" class="gamme_chambre" name="type_soins">
              <option value="detente" selected>Détente</option>
              <option value="decouverte">Découverte</option>
              <option value="relaxant">Relaxant</option>
              <option value="plaisir">Plaisir</option>
              <option value="evasion">Évasion</option>
            </select><br>
            <label for="nombre_adultes_detente">Nombre d'adultes <sup>*</sup></label><br>
            <input class="nombre_adultes" id="nombre_adultes_detente" name="nombre_adultes_soin" required type="number" min="1" max="10" value="1"><br>
            <input class="bouton_validation reserver_soin" type="submit" value="Réserver le soin"><br>
            <p>Les champs signalés par (<sub>*</sub>) sont obligatoires.</p>
          </form>
        </div>  
      </aside>
      <div class="clear"></div>
    </div>
  </div>
  <!-- SLIDER SPA DECOUVERTE -->
  <div id="confort">
  <div id="decouverte">
  <div id="slider_confort">
      <div data-src="images/masque1920x1000.jpg"></div>
      <div data-src="images/soin_detente1920x1000.jpg"></div>
  </div>
  <div class="fleche_footer fleche_chambre">
    <a href="#relaxant"><img src="images/fleche_bas.png" alt="aller vers le soin relaxant" title="afficher le soin relaxant"></a>
  </div>
  <!-- CORPS DE LA PAGE SPA DECOUVERTE -->
  <div class="conteneur conteneur_confort">
    <section class="section_spa">
      <article>
        <div>
          <h2>Soin Découverte</h2> 
          <img class="fleche_slide" src="images/fleche_bas.png" 
          alt="afficher la description de la chambre confort" title="afficher la description">
        </div>
        <div id="contenu_confort" class="cacher">
          <div class="prix">
            Durée 30 min <br>
            <span>60 €</span>
          </div>
          <p>
            Notre soin découverte est un excellent moyen de tester nos différents soins : détente, 
            relaxant, plaisir, évasion. 
          </p>
          <h4>Caractéristiques du soin</h4>
          <ul class="caracteristiques_chambre">
            <li>Durée 30min</li>
            <li>Massage classique</li>
            <li>Massage relaxation</li>
            <li>Massage plaisir</li>
            <li>Massage oriental</li>
            <li>Aromathérapie, huiles essentielles</li>
            <li>Soin eau thermale</li>
            <li>Masque visage</li>
            <li>Gommage</li>
            <li>Sauna</li>
            <li>Piscine et jacuzzi</li>
          </ul>
          <div class="bouton_reserver_mobile">
            <a href="reservation.php">Réserver</a>
          </div>
        </div>
      </article>
    </section>
    <!-- FORMULAIRE RESERVATION -->
      <aside class="aside_spa">
        <div class="reservation">
          <h2>Réserver le soin</h2>
          <img src="images/fleche_bas.png" class="fleche_slide2 fleche2" alt="afficher le formulaire de réservation"
          title="afficher le formulaire de réservation">
          <form method="post" action="spa.php" class="reservation_rapide">
            <label for="date_soin_decouverte">Date du soin <sup>*</sup></label><br>
            <input id="date_soin_decouverte" class="datepicker datepicker_ar" name="date_soin" type="date" required><br>
            <label for="type_soin_decouverte">Type de soins souhaité</label><br>
            <select id="type_soin_decouverte" class="gamme_chambre" name="type_soins">
              <option value="detente">Détente</option>
              <option value="decouverte" selected>Découverte</option>
              <option value="relaxant">Relaxant</option>
              <option value="plaisir">Plaisir</option>
              <option value="evasion">Évasion</option>
            </select><br>
            <label for="nombre_adultes_decouverte">Nombre d'adultes <sup>*</sup></label><br>
            <input class="nombre_adultes" id="nombre_adultes_decouverte" name="nombre_adultes" required type="number" min="1" max="10" value="1"><br>
            <input class="bouton_validation reserver_soin" type="submit" value="Réserver le soin"><br>
            <p>Les champs signalés par (<sub>*</sub>) sont obligatoires.</p>
          </form>
        </div>  
      </aside>
    <div class="clear"></div>
  </div>
  </div>
  </div>
  <!-- SLIDER SOIN RELAXANT -->
  <div id="deluxe">
  <div id="relaxant">
  <div id="slider_deluxe">
      <div data-src="images/serviette_huile1920x1000.jpg"></div>
      <div data-src="images/piscine1920x1000.jpg"></div>
  </div>
  <div class="fleche_footer fleche_chambre">
    <a href="#suite"><img src="images/fleche_bas.png" alt="aller vers la page soin plaisir" title="afficher la page Soin Plaisir"></a>
  </div>
  <!-- CORPS DE LA PAGE SOIN RELAXANT -->
  <div class="conteneur conteneur_confort">
    <section class="section_spa">
      <article>
        <div class="bouton_fleche">
          <h2>Soin Relaxant</h2> 
          <img src="images/fleche_bas.png" alt="flèche : développer la description du soin relaxant" 
          title="afficher la description" class="fleche_slide">
        </div>
        <div class="cacher">
          <div class="prix">
            Durée 1h30 <br>
            <span>200 €</span>
          </div>
          <p>
            L'expérience des techniques classiques avec des éléments exotiques de notre soin relaxant 
            vous aidera à retrouver l'harmonie parfaite de votre corps et de l'esprit.
          </p>
          <h4>Caractéristiques du soin</h4>
          <ul class="caracteristiques_chambre">
            <li>Durée 1h30</li>
            <li>Massage classique avec des éléments exotiques</li>
            <li>Aromathérapie, huiles essentielles</li>
            <li>Soin eau thermale</li>
            <li>Masque visage</li>
            <li>Gommage</li>
            <li>Sauna</li>
            <li>Piscine et jacuzzi</li>
          </ul>
          <div class="bouton_reserver_mobile">
            <a href="reservation.php">Réserver</a>
          </div>
        </div>
      </article>
    </section>
    <!-- FORMULAIRE RESERVATION -->
      <aside class="aside_spa">
        <div class="reservation">
          <h2>Réserver le soin</h2>
          <img src="images/fleche_bas.png" class="fleche_slide2 fleche2" alt="afficher le formulaire de réservation"
          title="afficher le formulaire de réservation">
          <form method="post" action="spa.php" class="reservation_rapide">
            <label for="date_soin_relaxant">Date du soin <sup>*</sup></label><br>
            <input id="date_soin_relaxant" class="datepicker datepicker_ar" name="date_soin" type="date" required><br>
            <label for="type_soin_relaxant">Type de soins souhaité</label><br>
            <select id="type_soin_relaxant" class="gamme_chambre" name="type_soins">
              <option value="detente">Détente</option>
              <option value="decouverte">Découverte</option>
              <option value="relaxant" selected>Relaxant</option>
              <option value="plaisir">Plaisir</option>
              <option value="evasion">Évasion</option>
            </select><br>
            <label for="nombre_adultes_relaxant">Nombre d'adultes <sup>*</sup></label><br>
            <input class="nombre_adultes" id="nombre_adultes_relaxant" name="nombre_adultes_soin" required type="number" min="1" max="10" value="1"><br>
            <input class="bouton_validation reserver_soin" type="submit" value="Réserver le soin"><br>
            <p>Les champs signalés par (<sub>*</sub>) sont obligatoires.</p>
          </form>
        </div>  
      </aside>
    <div class="clear"></div>
  </div>
  </div>
  </div>
  <!-- SLIDER SPA PLAISIR -->
  <div id="suite">
  <div id="plaisir">
  <div id="slider_suite">
      <div data-src="images/fleur_rouge1920x1000.jpg"></div>
      <div data-src="images/massage1920x1000.jpg"></div>
  </div>
  <div class="fleche_footer fleche_chambre">
    <a href="#footer"><img src="images/fleche_bas.png" alt="flèche : aller vers la page soin évasion" 
      title="afficher la page Soin Évasion"></a>
  </div>
  <!-- CORPS DE LA PAGE SOIN PLAISIR -->
  <div class="conteneur conteneur_confort">
    <section class="section_spa">
      <article>
        <div class="bouton_fleche">
          <h2>Soin Plaisir</h2> 
          <img class="fleche_slide" src="images/fleche_bas.png" alt="flèche afficher la description du soin évasion" 
          title="afficher la description">
        </div>
        <div class="cacher">
          <div class="prix">
            Durée 1h30 <br>
            <span>230 €</span>
          </div>
          <p>
            Le soin plaisir propose un massage complet associé au soin de la peau et à l'aromatherapie 
            pour une relaxation totale en naturalité et en douceur.
          </p>
          <h4>Caractéristiques du soin</h4>
          <ul class="caracteristiques_chambre">
            <li>Durée 1h30</li>
            <li>Massage classique avec des éléments exotiques</li>
            <li>Aromathérapie, huiles essentielles</li>
            <li>Soin eau thermale</li>
            <li>Masque visage</li>
            <li>Gommage</li>
            <li>Sauna</li>
            <li>Piscine et jacuzzi</li>
          </ul>
          <div class="bouton_reserver_mobile">
            <a href="reservation.php">Réserver</a>
          </div>
        </div>
      </article>
    </section>
    <!-- FORMULAIRE RESERVATION -->
      <aside class="aside_spa">
        <div class="reservation">
          <h2>Réserver le soin</h2>
          <img src="images/fleche_bas.png" class="fleche_slide2 fleche2" alt="afficher le formulaire de réservation"
          title="afficher le formulaire de réservation">
          <form method="post" action="spa.php" class="reservation_rapide">
            <label for="date_soin_plaisir">Date du soin <sup>*</sup></label><br>
            <input id="date_soin_plaisir" class="datepicker datepicker_ar" name="date_soin" type="date" required><br>
            <label for="type_soin_plaisir">Type de soins souhaité</label><br>
            <select id="type_soin_plaisir" class="gamme_chambre" name="type_soins">
              <option value="detente">Détente</option>
              <option value="decouverte">Découverte</option>
              <option value="relaxant">Relaxant</option>
              <option value="plaisir" selected>Plaisir</option>
              <option value="evasion">Évasion</option>
            </select><br>
            <label for="nombre_adultes_plaisir">Nombre d'adultes <sup>*</sup></label><br>
            <input class="nombre_adultes" id="nombre_adultes_plaisir" name="nombre_adultes_soin" required type="number" min="1" max="10" value="1"><br>
            <input class="bouton_validation reserver_soin" type="submit" value="Réserver le soin"><br>
            <p>Les champs signalés par (<sub>*</sub>) sont obligatoires.</p>
          </form>
        </div>  
      </aside>
    <div class="clear"></div>
  </div>
  </div>
  </div>

  <!-- SLIDER SPA EVASION -->
  <div id="evasion">
  <div id="slider_spa_evasion">
      <div data-src="images/spa1920x1000.jpg"></div>
      <div data-src="images/sauna1920x1000.jpg"></div>
  </div>
  <div class="fleche_footer fleche_chambre">
    <a href="#footer"><img src="images/fleche_bas.png" alt="flèche ver les informations complémentaires" 
      title="afficher les informations complémentaires"></a>
  </div>
  <!-- CORPS DE LA PAGE SOIN EVASION -->
  <div class="conteneur conteneur_confort">
    <section class="section_spa">
      <article>
        <div class="bouton_fleche">
          <h2>Soin Évasion</h2> 
          <img class="fleche_slide" src="images/fleche_bas.png" alt="flèche afficher la description du soin évasion" 
          title="afficher la description">
        </div>
        <div class="cacher">
          <div class="prix">
            Durée 1h30 <br>
            <span>230 €</span>
          </div>
          <p>
            Le soin évasion plus exotique relève des traditions orientales et du shiatsu chinois. 
            Alliant la relaxation et le dépaysement ce soin procure une détente et un repos parfait.
          </p>
          <h4>Caractéristiques du soin</h4>
          <ul class="caracteristiques_chambre">
            <li>Durée 1h30</li>
            <li>Massages exotiques, shiatsu</li>
            <li>Aromathérapie, huiles essentielles</li>
            <li>Soin eau thermale</li>
            <li>Masque visage</li>
            <li>Gommage</li>
            <li>Sauna</li>
            <li>Piscine et jacuzzi</li>
          </ul>
          <div class="bouton_reserver_mobile">
            <a href="reservation.php">Réserver</a>
          </div>
        </div>
      </article>
    </section>
    <!-- FORMULAIRE RESERVATION -->
      <aside class="aside_spa">
        <div class="reservation">
          <h2>Réserver le soin</h2>
          <img src="images/fleche_bas.png" class="fleche_slide2 fleche2" alt="afficher le formulaire de réservation"
          title="afficher le formulaire de réservation">
          <form method="post" action="spa.php" class="reservation_rapide">
            <label for="date_soin_evasion">Date du soin <sup>*</sup></label><br>
            <input id="date_soin_evasion" class="datepicker datepicker_ar" name="date_soin" type="date" required><br>
            <label for="type_soin_evasion">Type de soins souhaité</label><br>
            <select id="type_soin_evasion" class="gamme_chambre" name="type_soins">
              <option value="detente">Détente</option>
              <option value="decouverte">Découverte</option>
              <option value="relaxant">Relaxant</option>
              <option value="plaisir">Plaisir</option>
              <option value="evasion" selected>Évasion</option>
            </select><br>
            <label for="nombre_adultes_evasion">Nombre d'adultes <sup>*</sup></label><br>
            <input class="nombre_adultes" id="nombre_adultes_evasion" name="nombre_adultes_soin" required type="number" min="1" max="10" value="1"><br>
            <input class="bouton_validation reserver_soin" type="submit" value="Réserver le soin"><br>
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
  <script type="text/javascript" src="scripts/scripts.js">
  </script>
  <script type="text/javascript">
    $('footer').addClass('footer_spa');
    $('header').addClass('header_chambres');
  </script>
  </body>
</html>