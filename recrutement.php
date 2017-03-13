<!DOCTYPE html>
 <html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Réseau international d'hôtels de luxe Parimis propose de nombreuses opportunités de carrières dans le domaine de l'hôtellerie, de la restauration ou des soins spa">
    <meta name="keywords" content="emploi hotellerie, offres d'emploi hôtellerie, candidature spontanée hôtellerie, offres emploi restauration, emploi restauration, candidature spontanée restauration, candidature spontanee restauration, emploi soin, offres emploi soins, candidature spontanee soin, candidature spontanée soins, offres emploi spa, offre emploi spa, candidature spontanee spa, offres emploi parimis, offres emploi hôtel parimis">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ParimiS Hôtel - Recrutement</title>
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
    <div class="fond_contact fond_recrutement">
      <h2>Candidature spontanée</h2>
      <form method="post" action="recrutement.php" enctype="multipart/form-data" class="formulaire_contact 
      formulaire_recrutement">
        <input type="text" name="nom" placeholder="Votre nom" required>
        <input type="text" name="prenom" placeholder="Votre prénom" required><br>
        <input type="email" name="email" placeholder="Votre email" required>
        <input type="email" name="email" placeholder="Confirmez votre email" required><br>
        <label for="cv">Veuillez joindre votre CV :</label><br>
        <input type="file" name="cv" id="cv"><br>
        <label for="lm">et votre lettre de motivation :</label><br>
        <input type="file" name="cv" id="lm"><br>
        <input type="text" name="recru_entreprise" placeholder="Entreprise"><br>
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
  <?php include("footer.php") ?>
  
  <script type="text/javascript" src="scripts/jquery-3.1.1.min.js"></script>
  <script src="scripts/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
  <script type="text/javascript" src="scripts/scripts.js"></script>
  </body>
</html>