<!DOCTYPE html>
 <html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Contacter Parimis, hôtel de luxe, spa, restaurant">
    <meta name="keywords" content="parimis, Parimis, ParimiS, hotel parimis, hôtel Parimis, hotel-spa parimis, contact hôtel Parimis, contact hotel parimis, contacter hotel parimis, contacter hôtel Parimis, contact parimis">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Parimis Hôtel - Contact</title>
    <link rel="stylesheet" href="styles/style.css" />
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
      <h2>Contact</h2>
      <form method="post" action="contact.php" class="formulaire_contact">
        <input type="text" name="nom" placeholder="Votre nom" required>
        <input type="text" name="prenom" placeholder="Votre prénom" required><br>
        <input type="email" name="email" placeholder="Votre email" required>
        <input type="email" name="email" placeholder="Confirmez votre email" required><br>
        <input type="text" name="entreprise" placeholder="Entreprise">
        <input type="text" name="pays" placeholder="Votre pays d'origine"><br>
        <label for="categorie">Choisissez une catégorie : </label><br>
        <select id="categorie" name="contact_categorie">
          <option value="chambre" selected>Chambre</option>
          <option value="restaurant">Restaurant</option>
          <option value="spa">Spa</option>
          <option value="general">Ordre général</option>
        </select>
        <input type="text" name="sujet" placeholder="Sujet (optionnel)"><br>
        <textarea placeholder="Veuillez entrer votre message"></textarea><br>
        <input type="submit">
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
  <?php include ("footer.php") ?>
  
  <script type="text/javascript" src="scripts/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="scripts/scripts.js"></script>
  </body>
</html>