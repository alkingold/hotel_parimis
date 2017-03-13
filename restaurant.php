<!DOCTYPE html>
 <html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Venez découvrir les plats, les apéritifs et les desserts les plus exquis des maîtres cuisiniers au restaurant gourmet de l'hôtel Parimis">
    <meta name="keywords" content="parimis, Parimis, ParimiS, hôtel, hotel, hotels, hôtels, restaurant, restaurants, brasserie, brasseries, gourmet, plat, dessert, dîner, diner, restaurant gourmet à Paris, manger à paris">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ParimiS Hôtel - Restaurant</title>
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
  <!-- SLIDER RESTAURANT -->
  <div id="brasserie">
    <div id="slider_classique" class="slider_index">
      <div data-src="images/table_restaurant1920x1000.jpg"></div>
      <div data-src="images/sandwiches1920x1000.jpg"></div>
      <div data-src="images/plats_resto1920x1000.jpg"></div>
      <div data-src="images/antipasta1920x1000.jpg"></div>
      <div data-src="images/plat1920x1000.jpg"></div>
      <div data-src="images/table_couverts1920x1000.jpg"></div>
      <div data-src="images/sushi1920x1000.jpg"></div>
      <div data-src="images/gateau1920x1000.jpg"></div>
    </div>
    <a href="#degustation"><div class="fleche_footer" id="fleche_classique">
      <img src="images/fleche_bas.png" alt="flèche permettant de défiler la page vers le bas">
    </div></a>
    <?php include("header.php"); ?>
    <!-- CORPS DE LA PAGE RESTAURANT BRASSERIE -->
    <div class="conteneur">
      <section>
        <article>
          <div class="bouton_fleche">
            <h2>Restaurant : Brasserie</h2> 
            <img class="fleche_slide" src="images/fleche_bas.png" alt="flèche pour développer">
          </div>
          <div class="cacher">
            <h3>Menu Brasserie</h3>
            <div>
              <h3 class="titre_menu_restaurant">Entrées</h3>
              <div class="menu_restaurant">
                Oeufs durs mimosa <br>
                Tomates mozzarella basilique <br>
                Filet hareng et ses pommes de terre
              </div>
              <h3 class="titre_menu_restaurant">Plats</h3>
              <div class="menu_restaurant">
                Steak grillé aux pommes de terre <br>
                Poulet rôti aux légumes <br>
                Pavé du cabillaud au poivre
              </div>
              <h3 class="titre_menu_restaurant">Desserts</h3>
              <div class="menu_restaurant">
                Café gourmand <br>
                Crème caramel <br>
                Tarte du jour
              </div>
            </div>
            <div class="menu_telecharger">
              <a href="images/parimis_menu_restaurant150.pdf" target="_blank">Menu détaillé en pdf</a>
            </div>
            <div class="bouton_reserver_mobile">
              <a href="reservation.php" title="Vous allez être redirigés vers la page des réservations">Réserver</a>
            </div>
          </div>
        </article>
        <!-- MENUS RESTAURANT -->
        <div class="menu_chambres menus_restaurant" id="menu_page_restaurant">
          <h2>Tous les menus</h2>
          <div class="chambre menu_chambre_classique service">
            <a href="#brasserie">
              <div class="type_chambre">
                <img src="images/plat200x200.jpg" alt="image représentant un plat au restaurant de l'hôtel Parimis">
                <div>Brasserie</div>
              </div>
            </a>
          </div>
          <div class="chambre menu_chambre_confort service">
            <a href="#degustation">
              <div class="type_chambre">
                <img src="images/aperitif200x200.jpg" alt="image représentant un apéritif au restaurant de l'hôtel Parimis">
                <div>Dégustation</div>
              </div>
            </a>
          </div>
          <div class="chambre menu_chambre_deluxe service">
            <a href="#restaurant">
              <div class="type_chambre">
                <img src="images/dessert200x200.jpg" alt="image représentant un dessert au restaurant de l'hôtel Parimis">
                <div>Restaurant</div>
              </div>
            </a>
          </div>
          <div class="clear"></div>
        </div>
      </section>
      <!-- FORMULAIRE RESERVATION RESTAURANT -->
      <aside>
        <div class="reservation reservation_restaurant">
          <h2>Réserver une table</h2>
          <img src="images/fleche_bas.png" class="fleche2 fleche_slide2" alt="flèche développer">
          <form method="post" action="restaurant.php" class="reservation_rapide slide_down">
            <label for="date_restaurant">Date <sup>*</sup></label><br>
            <input id="date_restaurant" class="datepicker datepicker_a" name="date_restaurant" type="date" required><br>
            <label for="horaire_restaurant">Horaire <sup>*</sup></label><br>
            <select id="horaire_restaurant" class="gamme_chambre" name="horaire_restaurant">
              <option value="midi" selected>Midi (déjeuner)</option>
              <option value="apres_midi">Après-midi (apéritif)</option>
              <option value="soir">Soir (dîner)</option>
            </select><br>
            <label for="nombre_adultes_restaurant">Nombre de personnes <sup>*</sup></label><br>
            <input class="nombre_adultes" id="nombre_adultes_restaurant" name="nombre_personnes" required type="number" min="1" max="10" value="1"><br>
            <input class="bouton_validation bouton_reservation_restaurant" type="submit" value="Réserver"><br>
            <p>Les champs signalés par (<sub>*</sub>) sont obligatoires.</p>
          </form>
        </div>  
      </aside>
      <div class="clear"></div>
    </div>
  </div>
  <!-- RESTAURANT DEGUSTATION -->
  <div id="confort">
  <div id="degustation">
  <div class="fleche_footer fleche_chambre">
    <a href="#restaurant"><img src="images/fleche_bas.png" alt="flèche développer"></a>
  </div>
  <!-- CORPS DE LA PAGE RESTAURANT DEGUSTATION -->
  <div class="conteneur conteneur_confort">
    <section>
      <article>
        <div>
          <h2 class="titre_degustation">Restaurant : Dégustation</h2> 
          <img class="fleche_slide" src="images/fleche_bas.png" alt="flèche développer">
        </div>
        <div class="cacher">
            <h3>Nos amuses bouche</h3>
            <div>
              <h3 class="titre_menu_restaurant">À la viande</h3>
              <div class="menu_restaurant">
                Bouchées de jambon à la mozzarella <br>
                Manchons de canard au miel <br>
                Bonbons croustillants de foie gras
              </div>
              <h3 class="titre_menu_restaurant">Au poisson et fruits de mer</h3>
              <div class="menu_restaurant">
                Tomates cerises farcies à la chair de crabe <br>
                Verrines de carpaccio de Saint-Jacques <br>
                Roulés de saumon fumé au fromage
              </div>
              <h3 class="titre_menu_restaurant">Végétariens</h3>
              <div class="menu_restaurant">
                Canapés à l'avocat <br>
                Mini-sandwiches de légumes grillés <br>
                Boulettes de courgette
              </div>
            </div>
            <div class="menu_telecharger">
              <a href="images/parimis_menu_restaurant150.pdf" target="_blank">Menu détaillé en pdf</a>
            </div>
            <div class="bouton_reserver_mobile">
              <a href="reservation.php" title="Vous allez être redirigés vers la page des réservations">Réserver</a>
            </div>
          </div>
      </article>
    </section>
    <!-- FORMULAIRE RESERVATION -->
    <aside>
      <!--<div class="reservation">
        <h2>Réserver cette chambre</h2>
        <img src="images/fleche_bas.png" id="fleche2" alt="">
        <form method="post" action="" id="reservation_rapide">
          <label for="date_arrivee">Date d'arrivée <sup>*</sup></label><br>
          <input id="date_arrivee" name="date_arrivee" type="date" required placeholder="Veuillez choisir votre date d'arrivée"></input><br>
          <label for="date_depart">Date de départ <sup>*</sup></label><br>
          <input id="date_depart" name="date_depart" type="date" required placeholder="Veuillez choisir votre date de départ"></input><br>
          <label for="gamme_chambre">Gamme de chambre souhaitée</label><br>
          <select id="gamme_chambre" name="gamme_chambre">
            <option value="chambre_classique">Chambre Classique</option>
            <option value="chambre_confort" selected>Chambre Confort</option>
            <option value="chambre_deluxe">Chambre Deluxe</option>
            <option value="suite">Suite</option>
          </select><br>
          <label for="nombre_adutes">Nombre d'adultes <sup>*</sup></label><br>
          <input id="nombre_adultes" name="nombre_adultes" required type="number" min="1" max="10" value="1"><br>
          <div id="bouton_page_reservation">
            <a href="#" title="Vous allez être redirigé vers la page des réservations">Plus d'options</a>
          </div>
          <input id="bouton_validation" type="submit" value="Vérifier la disponibilité"><br>
          <p>Les champs signalés par (<sub>*</sub>) sont obligatoires.</p>
        </form>
      </div>  -->
    </aside>
    <div class="clear"></div>
  </div>
  </div>
  </div>
  <!-- PAGE RESTAURANT -->
  <div id="deluxe">
  <div id="restaurant">
  <div id="slider_deluxe">
      <div data-src="images/lit_deluxe1920x1000.jpg"></div>
      <div data-src="images/bain_deluxe1920x1000.jpg"></div>
  </div>
  <div class="fleche_footer fleche_chambre" id="fleche_deluxe">
    <a href="#footer"><img src="images/fleche_bas.png" alt="flèche pour aller aux informations complémentaires"></a>
  </div>
  <!-- CORPS DE LA PAGE RESTAURANT -->
  <div class="conteneur conteneur_confort">
    <section>
      <article>
        <div class="bouton_fleche">
          <h2>Restaurant : Dîner</h2> 
          <img class="fleche_slide" src="images/fleche_bas.png" alt="flèche développer">
        </div>
        <div class="cacher">
          <h3>Menu Restaurant</h3>
          <div>
            <h3 class="titre_menu_restaurant">Entrées</h3>
            <div class="menu_restaurant">
              Foie gras de canard <br>
              Verrine aux deux caviars <br>
              Noix de Saint-Jacques au pamplemousse
            </div>
            <h3 class="titre_menu_restaurant">Plats</h3>
            <div class="menu_restaurant">
              Suprême de poulet à la sauce truffé <br>
              Trio de poissons à la planche <br>
              Mignon de porc aux figues
            </div>
            <h3 class="titre_menu_restaurant">Desserts</h3>
            <div class="menu_restaurant">
              Tiramisu à l'italienne <br>
              Parfait glacé au chocolat et aux truffes <br>
              Crème de framboise meringuée
            </div>
          </div>
          <div class="menu_telecharger">
            <a href="images/parimis_menu_restaurant150.pdf" target="_blank">Menu détaillé en pdf</a>
          </div>
          <div class="bouton_reserver_mobile">
            <a href="reservation.php" title="Vous allez être redirigés vers la page des réservations">Réserver</a>
          </div>
        </div>
      </article>
    </section>
    <!-- FORMULAIRE RESERVATION -->
    <aside>
      <!--<div class="reservation">
        <h2>Réserver cette chambre</h2>
        <img src="images/fleche_bas.png" id="fleche2" class="fleche_slide" alt="">
        <form method="post" action="" id="reservation_rapide">
          <label for="date_arrivee">Date d'arrivée <sup>*</sup></label><br>
          <input id="date_arrivee" name="date_arrivee" type="date" required placeholder="Veuillez choisir votre date d'arrivée"></input><br>
          <label for="date_depart">Date de départ <sup>*</sup></label><br>
          <input id="date_depart" name="date_depart" type="date" required placeholder="Veuillez choisir votre date de départ"></input><br>
          <label for="gamme_chambre">Gamme de chambre souhaitée</label><br>
          <select id="gamme_chambre" name="gamme_chambre">
            <option value="chambre_classique">Chambre Classique</option>
            <option value="chambre_confort">Chambre Confort</option>
            <option value="chambre_deluxe" selected>Chambre Deluxe</option>
            <option value="suite">Suite</option>
          </select><br>
          <label for="nombre_adutes">Nombre d'adultes <sup>*</sup></label><br>
          <input id="nombre_adultes" name="nombre_adultes" required type="number" min="1" max="10" value="1"><br>
          <div id="bouton_page_reservation">
            <a href="#" title="Vous allez être redirigé vers la page des réservations">Plus d'options</a>
          </div>
          <input id="bouton_validation" type="submit" value="Vérifier la disponibilité"><br>
          <p>Les champs signalés par (<sub>*</sub>) sont obligatoires.</p>
        </form>
      </div>  -->
    </aside>
    <div class="clear"></div>
  </div>
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
    $('footer').addClass('footer_restaurant');
  </script>
  </body>
</html>