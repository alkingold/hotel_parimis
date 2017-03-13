<!DOCTYPE html>
 <html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hôtel Parimis - Panier</title>
    <link rel="stylesheet" href="styles/style.css" />
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
  <!-- CORPS DE LA PAGE ACTUALITE -->
  <div class="conteneur">
    <section class="qui_sommes_nous actualite page_panier">
      <article>
        <h2>Votre panier</h2>
        <h3>Récapitulatif de votre commande</h3>
        <h3>Votre choix de <a href="chambres.php" target="_blank" title="voir la page chambres">chambres</a></h3>
        <table>
          <tr>
            <th>Gamme</th>
            <th>Date d'arrivée</th>
            <th>Date de départ</th>
            <th>Nuits</th>
            <th>Prix</th>
          </tr>
          <tr>
            <td>Classique</td>
            <td>27/12/2016</td>
            <td>01/01/2017</td>
            <td>5</td>
            <td>450€</td>
          </tr>
          <tr>
            <td>Deluxe</td>
            <td>28/12/2016</td>
            <td>01/01/2017</td>
            <td>4</td>
            <td>700€</td>
          </tr>
          <tr>
            <td colspan="4" class="total">Prix total chambres</td>
            <td class="total">5050€</td>
          </tr>
        </table>

        <h3>Votre choix de <a href="spa.php" target="_blank" title="voir la page spa">soins</a></h3>
        <table>
          <caption><sub>*</sub> Le montant est donné à titre indicatif, à régler sur place</caption>
          <tr>
            <th>Type</th>
            <th>Date de soin</th>
            <th>Horaire</th>
            <th>Nombre</th>
            <th>Prix</th>
          </tr>
          <tr>
            <td>Détente</td>
            <td>29/12/2016</td>
            <td>11h</td>
            <td>2</td>
            <td>100€</td>
          </tr>
          <tr>
            <td>Évasion</td>
            <td>29/12/2016</td>
            <td>11h</td>
            <td>1</td>
            <td>230€</td>
          </tr>
          <tr>
            <td colspan="4" class="total">Prix total soins <sub>*</sub> </td>
            <td class="total">(430€)</td>
          </tr>
        </table>

        <h3>Votre réservation <a href="restaurant.php" target="_blank" title="voir la page restaurant">restaurant</a></h3>
        <table>
          <tr>
            <th>Date</th>
            <th>Horaire</th>
            <th>Nombre</th>
          </tr>
          <tr>
            <td>28/12/2016</td>
            <td>Déjeuner (11h - 14h)</td>
            <td>4</td>
          </tr>
          <tr>
            <td>31/12/2016</td>
            <td>Dîner (18h - 01h)</td>
            <td>4</td>          
          </tr>
        </table>

        <h3>Options demandées</h3>
        <table>
          <caption><sub>*</sub> Le montant et la durée du trajet sont donnés à titre indicatif, à régler sur place</caption>
          <tr>
            <th>Option</th>
            <th>Détail</th>
            <th>Prix</th>
          </tr>
          <tr>
            <td>Chaise de bébé</td>
            <td>Coussin et bavoirs en textile compris</td>
            <td>Gratuit</td>
          </tr>
          <tr>
            <td>Lit de bébé</td>
            <td>Lit bébé fixe, matelas et draps compris</td>
            <td>Gratuit</td>          
          </tr>
          <tr>
            <td>Taxi de l'aéroport</td>
            <td>Horaire 9h; trajet 50min environ <sup>*</sup></td>
            <td>(50€)</td>          
          </tr>
          <tr>
            <td colspan="2" class="total">Total options <sup>*</sup></td>
            <td class="total">(50€)</td>          
          </tr>
        </table>
        <p class="total_payer">
          Total à payer : <span>5050€</span>
        </p>
        <form class="form_panier">
          <input id="cgv" name="cgv" type="checkbox">
          <label for="cgv">Accepter <a href="cgv.php" target="_blank">les conditions générales de vente</a></label><br>
          <p id="cgv_erreur">
            Afin de continuer, veuillez accepter les conditions générales de vente
          </p>
          <div class="centrer_payer_reserver">
            <input id="payer_reserver" class="payer_reserver" type="submit" value="Payer et réserver">
          </div>
        </form>
      </article>
    </section>
    <div class="clear"></div>
  </div>
  <?php include("footer.php") ?>
  <script type="text/javascript" src="scripts/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="scripts/scripts_panier.js"></script>
  </body>
</html>