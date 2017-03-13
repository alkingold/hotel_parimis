<!DOCTYPE html>
 <html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Hôtel Parimis : réservez un séjour de rêve à Paris dans nos chambres luxueuses, un dîner dans notre restaurant gourmet et un soin parfaitement relaxant dans notre spa">
    <meta name="keywords" content="parimis, Parimis, ParimiS, parimis reservation, parimis reservations, Parimis réservation, Parimis réservations, reservation hotel parimis, réservations hôtel Parimis, hotel parimis reservations, hôtel Parimis réservations, réserver Parimis, reserver parimis, reserver hotel parimis, réserver hôtel Parimis, parimis reserver, Parimis réserver, hotel parimis reserver, reserver chambre hotel luxe, spa paris, reserver soin spa paris, table restaurant paris, table restaurant gourmet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Parimis Hôtel - Réservation</title>
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" type="text/css" href="scripts/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="icon" type="image/png" href="images/parimis_favicon.png" />
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
  <?php include("header.php") ?>
  <!-- CORPS DE LA PAGE -->
  <div class="conteneur">
    <div class="fond_contact">
      <h2>Réservations</h2>
      <!-- FORMULAIRE DE RESERVATION -->
      <form method="post" action="reservation.php" class="formulaire_contact formulaire_reservation">
        <input type="text" name="nom" placeholder="Votre nom" required>
        <input type="text" name="prenom" placeholder="Votre prénom" required><br>
        <input type="email" name="email" placeholder="Votre email" required>
        <input type="text" name="pays" placeholder="Votre pays d'origine"><br>
        <!-- RESERVER UNE CHAMBRE A L'HOTEL -->
        <input type="checkbox" class="option_reservation" id="reserver_chambre" name="options_reservation" 
        value="reserver_chambre">
        <label class="label_option_reservation" for="reserver_chambre">Réserver une <a href="chambres.php" target="_blank">chambre</a></label><br>
        <!-- AFFICHAGE FORMULAIRE CHAMBRE -->
        <div id="formulaire_reserver_chambre">
          <div class="reserver_chambre_date1">
            <label for="date_arrivee">Votre date d'arrivée : </label><br>
            <input id="date_arrivee" class="datepicker datepicker_ar required" name="date_arrivee" type="date">
          </div>
          <div class="reserver_chambre_date2">
            <label for="date_depart">Votre date de départ : </label><br>
            <input id="date_depart" class="datepicker datepicker_d required" name="date_depart" type="date">
          </div>
          <div class="clear"></div>
          <div class="nombre_clients">
            <div class="float reservation_adultes">
              <label for="nombre_adultes_chambre">Adultes</label><br>
              <input type="number" name="nombre_adultes_chambre" id="nombre_adultes_chambre" min="1" max="10" value="1" class="required">
            </div>
            <div class="float reservation_enfants">
              <label for="nombre_enfants_chambre">Enfants</label><br>
              <input type="number" name="nombre_enfants_chambre" id="nombre_enfants_chambre" min="0" max="20" value="0" class="required">
            </div>
            <div class="float reservation_bebes">
              <label for="nombre_bebes_chambre">Bébés</label><br>
              <input type="number" name="nombre_bebes_chambre" id="nombre_bebes_chambre" min="0" max="20" value="0" class="required">
            </div>
            <div class="clear"></div>
          </div>
          <div class="categorie_chambre">
            <label for="categorie">Catégorie de chambre : </label><br>
            <select id="categorie" name="categorie">
              <option value="classique" selected>Classique</option>
              <option value="confort">Confort</option>
              <option value="deluxe">Deluxe</option>
              <option value="suite">Suite</option>
            </select>
          </div>
          <input type="text" name="sujet" placeholder="Sujet (optionnel)"><br>
          <textarea placeholder="Veuillez entrer votre message"></textarea><br>
        </div>
        <!-- RESERVER UNE TABLE AU RESTAURANT -->
        <input class="option_reservation" id="reserver_table" name="options_reservation" value="reserver_table" type="checkbox">
        <label class="label_option_reservation" for="reserver_table">Réserver une table au <a href="restaurant.php" target="_blank">restaurant</a></label><br>
        <!-- AFFICHAGE FORMULAIRE RESTAURANT -->
        <div id="formulaire_reserver_table">
          <div class="reserver_chambre_date1">
            <label for="date_restaurant">Votre date de visite :</label><br>
            <input id="date_restaurant" name="date_restaurant" class="datepicker datepicker_a required_restaurant" type="date">
          </div>
          <div class="categorie_chambre horaire_resto">
            <label for="horaire_restaurant">Horaire de visite : </label><br>
            <select id="horaire_restaurant" name="horaire_restaurant">
              <option value="midi" selected>Midi (déjeuner)</option>
              <option value="apres_midi">Après-midi (apéritif)</option>
              <option value="soir">Soirée (dîner)</option>
            </select>
          </div>
          <div class="clear"></div>
          <div class="nombre_clients">
            <div class="float reservation_adultes">
              <label for="nombre_adultes_restaurant">Adultes</label><br>
              <input type="number" name="nombre_adultes_restaurant" id="nombre_adultes_restaurant" min="1" max="10" value="1" class="required_restaurant">
            </div>
            <div class="float reservation_enfants">
              <label for="nombre_enfants_restaurant">Enfants</label><br>
              <input type="number" name="nombre_enfants_restaurant" id="nombre_enfants_restaurant" min="0" max="20" value="0" class="required_restaurant">
            </div>
            <div class="float reservation_bebes">
              <label for="nombre_bebes_restaurant">Bébés</label><br>
              <input type="number" name="nombre_bebes_restaurant" id="nombre_bebes_restaurant" min="0" max="20" value="0" class="required_restaurant">
            </div>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>
        <!-- RESERVER UN SOIN -->
        <input class="option_reservation" id="reserver_soin" name="options_reservation" value="reserver_soin" type="checkbox">
        <label class="label_option_reservation" for="reserver_soin">Réserver un soin au <a href="spa.php" target="_blank">spa</a></label><br>
        <!-- AFFICHAGE FORMULAIRE RESERVER SOIN -->
        <div id="formulaire_reserver_soin">
          <div class="reserver_chambre_date1">
            <label for="date_soin">Date de soin :</label><br>
            <input id="date_soin" name="date_restaurant" class="datepicker datepicker_a required_spa" type="date">
          </div>
          <div class="categorie_chambre horaire_resto">
            <label for="type_soin">Type de soin : </label><br>
            <select id="type_soin" name="type_soin">
              <option value="detente" selected>Soin détente</option>
              <option value="decouverte">Soin découverte</option>
              <option value="plaisir">Soin plaisir</option>
              <option value="relaxant">Soin relaxant</option>
              <option value="evasion">Soin évasion</option>
            </select>
          </div>
          <div class="clear"></div>
          <div class="nombre_clients nombre_clients_spa">
            <div class="float reservation_adultes reservation_adultes_spa">
              <label class="label_nombre_spa" for="nombre_clients_spa">Nombre de personnes</label><br>
              <input class="nombre_spa required_spa" type="number" name="nombre_clients_spa" id="nombre_clients_spa" min="1" max="10" value="1">
            </div>
            <div class="clear"></div>
          </div>
          <div class="categorie_chambre horaire_resto horaire_soin">
            <label for="horaire_soin">Horaire de soin : </label><br>
            <select id="horaire_soin" name="horaire_soin">
              <option value="h10" selected>10h</option>
              <option value="h11">11h</option>
              <option value="h12">12h</option>
              <option value="h14">14h</option>
              <option value="h15">15h</option>
              <option value="h16">16h</option>
            </select>
          </div>
          <div class="clear"></div>
        </div>
        <label class="label_taxi">Services de taxi :</label>
        <div class="taxi_radio">
          <input class="radio" type="radio" name="taxi" value="oui">Oui
          <input class="radio" type="radio" name="taxi" value="non" checked>Non
        </div>
        <input type="submit" value="Ajouter">
      </form>
      <div class="contact_adresse">
        <h2>Adresse</h2>
        <div>
          <span>Hôtel ParimiS</span><br>
          1 avenue Montaigne<br>
          75008 Paris<br>
          <a href="mailto:reservations@parimis.com">reservations@parimis.com</a><br>
          Tél. 00 00 00 00 00
        </div>
      </div>
    </div>
  </div>
  <?php include("footer.php") ?>
  
  <script type="text/javascript" src="scripts/jquery-3.1.1.min.js"></script>
  <script src="scripts/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
  <script type="text/javascript" src="scripts/scripts_reservation.js"></script>
  </body>
</html>