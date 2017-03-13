<!DOCTYPE html>
 <html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Les avis des clients sur l'hôtel Parimis, ses chambres de luxe, son restaurant gourmet et ses soins dans le salon spa.">
    <meta name="keywords" content="parimis, Parimis, ParimiS, hotel, hôtel, hotel de luxe, hôtel de luxe, restaurant, spa, soin, soins, luxe, gourmet, avis, visiteurs, clients, client, visiteur">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hôtel Parimis - Avis des clients</title>
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" type="text/css" href="scripts/jquery-ui-1.12.1.tabs/jquery-ui.css" />
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
    <div id="avis">
      <h2>Avis</h2>
      <!-- FORMULAIRE COMMENTAIRE -->
      <div class="formulaire_avis">
        <h3>Partagez votre avis sur ParimiS <img src="images/fleche_bas.png" alt="flèche accéder au formulaire"></h3>
        <form method="post" action="avis.php" enctype="multipart/form-data">
          <label>Votre pseudo :</label>
          <input type="text" id="pseudo" name="pseudo" class="input"><br>
          <label for="image">Votre image : </label>
          <input type="file" id="image" name="image" class="input_file"><br>
          <label for="sujet_avis">Choisissez votre sujet :</label>
          <select id="sujet_avis">
            <option>Hôtel</option>
            <option>Chambres</option>
            <option>Restaurant</option>
            <option>Soins</option>
          </select><br>
          <label>Votre note sur 5 : </label>
          <div class="formulaire_note">
            <input type="hidden" name="note" id="note" value="">
            <img class="etoile star" id="star_1" src="images/etoile_vide.png" alt="étoile de notation">
            <img class="etoile star" id="star_2" src="images/etoile_vide.png" alt="étoile de notation">
            <img class="etoile star" id="star_3" src="images/etoile_vide.png" alt="étoile de notation">
            <img class="etoile star" id="star_4" src="images/etoile_vide.png" alt="étoile de notation">
            <img class="etoile star" id="star_5" src="images/etoile_vide.png" alt="étoile de notation">
          </div><br>
          <label for="titre_avis">Titre du message : </label>
          <input type="text" name="titre_avis" id="titre_avis" class="input"><br>
          <label for="message_avis">Votre message :</label><br>
          <textarea name="message_avis" id="message_avis"></textarea>
          <input type="submit" class="bouton_validation bouton_avis">
        <div class="clear"></div>
        </form>
      </div>
      <div id="avis_tabs">
        <ul>
          <li><a href="#hotel">Hôtel</a></li>
          <li><a href="#chambres">Chambres</a></li>
          <li><a href="#restaurant">Restaurant</a></li>
          <li><a href="#soins">Soins</a></li>
        </ul>
        <!-- TAB HOTEL -->
        <div id="hotel">
          <div class="avis_tot"> 
            <div class="infos_avis">
              <div class="date_avis">Le 16/12/2016</div>
              <div class="auteur_avis">
                <span>Thierry a écrit : </span>
              </div>
              <div class="image_avis">
                <img src="images/membre200x200.jpg" alt="illustration au message">
              </div>
              <div class="rating">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile_vide.png" alt="étoile de notation">
              </div>
            </div>
            <div class="text_avis">
              <h4>Titre du commentaire</h4>
              <div class="message_avis">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Suspendisse id fermentum dui, venenatis facilisis urna. 
              In hac habitasse platea dictumst. Duis ornare quam sed quam fringilla, nec efficitur nunc placerat. 
              Curabitur lobortis dignissim fringilla. Curabitur ac massa dictum ipsum rutrum ornare eu at lorem. 
              Praesent pellentesque viverra dolor at blandit. Pellentesque tempor facilisis lorem sit amet ornare. 
              Morbi aliquam cursus ante, at ultricies mi pretium id.
              </div>
            </div>
            <div class="clear"></div>
          </div> 

          <div class="avis_tot"> 
            <div class="infos_avis">
              <div class="date_avis">Le 16/12/2016</div>
              <div class="auteur_avis">
                <span>Thierry a écrit : </span>
              </div>
              <div class="image_avis">
                <img src="images/membre200x200.jpg" alt="illustration au message">
              </div>
              <div class="rating">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile_vide.png" alt="étoile de notation">
              </div>
            </div>
            <div class="text_avis">
              <h4>Titre du commentaire</h4>
              <div class="message_avis">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Suspendisse id fermentum dui, venenatis facilisis urna. 
              In hac habitasse platea dictumst. Duis ornare quam sed quam fringilla, nec efficitur nunc placerat. 
              Curabitur lobortis dignissim fringilla. Curabitur ac massa dictum ipsum rutrum ornare eu at lorem. 
              Praesent pellentesque viverra dolor at blandit. Pellentesque tempor facilisis lorem sit amet ornare. 
              Morbi aliquam cursus ante, at ultricies mi pretium id.
              </div>
            </div>
            <div class="clear"></div>
          </div> 

          <div class="avis_tot"> 
            <div class="infos_avis">
              <div class="date_avis">Le 16/12/2016</div>
              <div class="auteur_avis">
                <span>Thierry a écrit : </span>
              </div>
              <div class="image_avis">
                <img src="images/membre200x200.jpg" alt="illustration message">
              </div>
              <div class="rating">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile_vide.png" alt="étoile de notation">
              </div>
            </div>
            <div class="text_avis">
              <h4>Titre du commentaire</h4>
              <div class="message_avis">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Suspendisse id fermentum dui, venenatis facilisis urna. 
              In hac habitasse platea dictumst. Duis ornare quam sed quam fringilla, nec efficitur nunc placerat. 
              Curabitur lobortis dignissim fringilla. Curabitur ac massa dictum ipsum rutrum ornare eu at lorem. 
              Praesent pellentesque viverra dolor at blandit. Pellentesque tempor facilisis lorem sit amet ornare. 
              Morbi aliquam cursus ante, at ultricies mi pretium id.
              </div>
            </div>
            <div class="clear"></div>
          </div> 

        </div>

        <!-- TAB CHAMBRES -->
        <div id="chambres">
          <div class="avis_tot"> 
            <div class="infos_avis">
              <div class="date_avis">Le 16/12/2016</div>
              <div class="auteur_avis">
                <span>Thierry a écrit : </span>
              </div>
              <div class="image_avis">
                <img src="images/membre200x200.jpg" alt="illustration au message">
              </div>
              <div class="rating">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile_vide.png" alt="étoile de notation">
              </div>
            </div>
            <div class="text_avis">
              <h4>Titre du commentaire</h4>
              <div class="message_avis">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Suspendisse id fermentum dui, venenatis facilisis urna. 
              In hac habitasse platea dictumst. Duis ornare quam sed quam fringilla, nec efficitur nunc placerat. 
              Curabitur lobortis dignissim fringilla. Curabitur ac massa dictum ipsum rutrum ornare eu at lorem. 
              Praesent pellentesque viverra dolor at blandit. Pellentesque tempor facilisis lorem sit amet ornare. 
              Morbi aliquam cursus ante, at ultricies mi pretium id.
              </div>
            </div>
            <div class="clear"></div>
          </div> 

          <div class="avis_tot"> 
            <div class="infos_avis">
              <div class="date_avis">Le 16/12/2016</div>
              <div class="auteur_avis">
                <span>Thierry a écrit : </span>
              </div>
              <div class="image_avis">
                <img src="images/membre200x200.jpg" alt="illustration au message">
              </div>
              <div class="rating">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile_vide.png" alt="étoile de notation">
              </div>
            </div>
            <div class="text_avis">
              <h4>Titre du commentaire</h4>
              <div class="message_avis">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Suspendisse id fermentum dui, venenatis facilisis urna. 
              In hac habitasse platea dictumst. Duis ornare quam sed quam fringilla, nec efficitur nunc placerat. 
              Curabitur lobortis dignissim fringilla. Curabitur ac massa dictum ipsum rutrum ornare eu at lorem. 
              Praesent pellentesque viverra dolor at blandit. Pellentesque tempor facilisis lorem sit amet ornare. 
              Morbi aliquam cursus ante, at ultricies mi pretium id.
              </div>
            </div>
            <div class="clear"></div>
          </div> 

          <div class="avis_tot"> 
            <div class="infos_avis">
              <div class="date_avis">Le 16/12/2016</div>
              <div class="auteur_avis">
                <span>Thierry a écrit : </span>
              </div>
              <div class="image_avis">
                <img src="images/membre200x200.jpg" alt="illustration au message">
              </div>
              <div class="rating">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile_vide.png" alt="étoile de notation">
              </div>
            </div>
            <div class="text_avis">
              <h4>Titre du commentaire</h4>
              <div class="message_avis">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Suspendisse id fermentum dui, venenatis facilisis urna. 
              In hac habitasse platea dictumst. Duis ornare quam sed quam fringilla, nec efficitur nunc placerat. 
              Curabitur lobortis dignissim fringilla. Curabitur ac massa dictum ipsum rutrum ornare eu at lorem. 
              Praesent pellentesque viverra dolor at blandit. Pellentesque tempor facilisis lorem sit amet ornare. 
              Morbi aliquam cursus ante, at ultricies mi pretium id.
              </div>
            </div>
            <div class="clear"></div>
          </div> 
          
        </div>

        <!-- TAB RESTAURANT -->
        <div id="restaurant">
          <div class="avis_tot"> 
            <div class="infos_avis">
              <div class="date_avis">Le 16/12/2016</div>
              <div class="auteur_avis">
                <span>Thierry a écrit : </span>
              </div>
              <div class="image_avis">
                <img src="images/membre200x200.jpg" alt="illustration au message">
              </div>
              <div class="rating">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile_vide.png" alt="étoile de notation">
              </div>
            </div>
            <div class="text_avis">
              <h4>Titre du commentaire</h4>
              <div class="message_avis">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Suspendisse id fermentum dui, venenatis facilisis urna. 
              In hac habitasse platea dictumst. Duis ornare quam sed quam fringilla, nec efficitur nunc placerat. 
              Curabitur lobortis dignissim fringilla. Curabitur ac massa dictum ipsum rutrum ornare eu at lorem. 
              Praesent pellentesque viverra dolor at blandit. Pellentesque tempor facilisis lorem sit amet ornare. 
              Morbi aliquam cursus ante, at ultricies mi pretium id.
              </div>
            </div>
            <div class="clear"></div>
          </div> 

          <div class="avis_tot"> 
            <div class="infos_avis">
              <div class="date_avis">Le 16/12/2016</div>
              <div class="auteur_avis">
                <span>Thierry a écrit : </span>
              </div>
              <div class="image_avis">
                <img src="images/membre200x200.jpg" alt="illustration au message">
              </div>
              <div class="rating">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile_vide.png" alt="étoile de notation">
              </div>
            </div>
            <div class="text_avis">
              <h4>Titre du commentaire</h4>
              <div class="message_avis">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Suspendisse id fermentum dui, venenatis facilisis urna. 
              In hac habitasse platea dictumst. Duis ornare quam sed quam fringilla, nec efficitur nunc placerat. 
              Curabitur lobortis dignissim fringilla. Curabitur ac massa dictum ipsum rutrum ornare eu at lorem. 
              Praesent pellentesque viverra dolor at blandit. Pellentesque tempor facilisis lorem sit amet ornare. 
              Morbi aliquam cursus ante, at ultricies mi pretium id.
              </div>
            </div>
            <div class="clear"></div>
          </div> 

          <div class="avis_tot"> 
            <div class="infos_avis">
              <div class="date_avis">Le 16/12/2016</div>
              <div class="auteur_avis">
                <span>Thierry a écrit : </span>
              </div>
              <div class="image_avis">
                <img src="images/membre200x200.jpg" alt="illustration au message">
              </div>
              <div class="rating">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile_vide.png" alt="étoile de notation">
              </div>
            </div>
            <div class="text_avis">
              <h4>Titre du commentaire</h4>
              <div class="message_avis">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Suspendisse id fermentum dui, venenatis facilisis urna. 
              In hac habitasse platea dictumst. Duis ornare quam sed quam fringilla, nec efficitur nunc placerat. 
              Curabitur lobortis dignissim fringilla. Curabitur ac massa dictum ipsum rutrum ornare eu at lorem. 
              Praesent pellentesque viverra dolor at blandit. Pellentesque tempor facilisis lorem sit amet ornare. 
              Morbi aliquam cursus ante, at ultricies mi pretium id.
              </div>
            </div>
            <div class="clear"></div>
          </div> 
          
        </div>

        <!-- TAB SOINS -->
        <div id="soins">
          <div class="avis_tot"> 
            <div class="infos_avis">
              <div class="date_avis">Le 16/12/2016</div>
              <div class="auteur_avis">
                <span>Thierry a écrit : </span>
              </div>
              <div class="image_avis">
                <img src="images/membre200x200.jpg" alt="illustration au message">
              </div>
              <div class="rating">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile_vide.png" alt="étoile de notation">
              </div>
            </div>
            <div class="text_avis">
              <h4>Titre du commentaire</h4>
              <div class="message_avis">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Suspendisse id fermentum dui, venenatis facilisis urna. 
              In hac habitasse platea dictumst. Duis ornare quam sed quam fringilla, nec efficitur nunc placerat. 
              Curabitur lobortis dignissim fringilla. Curabitur ac massa dictum ipsum rutrum ornare eu at lorem. 
              Praesent pellentesque viverra dolor at blandit. Pellentesque tempor facilisis lorem sit amet ornare. 
              Morbi aliquam cursus ante, at ultricies mi pretium id.
              </div>
            </div>
            <div class="clear"></div>
          </div> 

          <div class="avis_tot"> 
            <div class="infos_avis">
              <div class="date_avis">Le 16/12/2016</div>
              <div class="auteur_avis">
                <span>Thierry a écrit : </span>
              </div>
              <div class="image_avis">
                <img src="images/membre200x200.jpg" alt="illustration au message">
              </div>
              <div class="rating">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile_vide.png" alt="étoile de notation">
              </div>
            </div>
            <div class="text_avis">
              <h4>Titre du commentaire</h4>
              <div class="message_avis">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Suspendisse id fermentum dui, venenatis facilisis urna. 
              In hac habitasse platea dictumst. Duis ornare quam sed quam fringilla, nec efficitur nunc placerat. 
              Curabitur lobortis dignissim fringilla. Curabitur ac massa dictum ipsum rutrum ornare eu at lorem. 
              Praesent pellentesque viverra dolor at blandit. Pellentesque tempor facilisis lorem sit amet ornare. 
              Morbi aliquam cursus ante, at ultricies mi pretium id.
              </div>
            </div>
            <div class="clear"></div>
          </div> 

          <div class="avis_tot"> 
            <div class="infos_avis">
              <div class="date_avis">Le 16/12/2016</div>
              <div class="auteur_avis">
                <span>Thierry a écrit : </span>
              </div>
              <div class="image_avis">
                <img src="images/membre200x200.jpg" alt="illustration au message">
              </div>
              <div class="rating">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile.png" alt="étoile de notation">
                <img src="images/etoile_vide.png" alt="étoile de notation">
              </div>
            </div>
            <div class="text_avis">
              <h4>Titre du commentaire</h4>
              <div class="message_avis">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Suspendisse id fermentum dui, venenatis facilisis urna. 
              In hac habitasse platea dictumst. Duis ornare quam sed quam fringilla, nec efficitur nunc placerat. 
              Curabitur lobortis dignissim fringilla. Curabitur ac massa dictum ipsum rutrum ornare eu at lorem. 
              Praesent pellentesque viverra dolor at blandit. Pellentesque tempor facilisis lorem sit amet ornare. 
              Morbi aliquam cursus ante, at ultricies mi pretium id.
              </div>
            </div>
            <div class="clear"></div>
          </div> 
          
        </div>

      </div>
    </div>
  </div>
  <?php include 'footer.php' ?>
  
  <script type="text/javascript" src="scripts/jquery-3.1.1.min.js"></script>
  <script src="scripts/jquery-ui-1.12.1.tabs/jquery-ui.js"></script>
  <script type="text/javascript" src="scripts/scripts_avis.js"></script>
  <script type="text/javascript" src="scripts/js/jquery.js"></script>
  <script type="text/javascript" src="scripts/js/fonctions.js"></script>

  </body>
</html>