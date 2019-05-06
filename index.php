<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon Carnet d'Adresses</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <script src="js/vendor/modernizr.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="mainBodyContainer">
        <div class="row">
            <div class ="large-12 columns">
              <h1>Mon Carnet d'Adresses</h1>
              <a id="addContactBtn" class="add-btn button left small round" data-reveal-id="addModal">Ajouter Contact</a>
            </div>
            <div class ="large-6 columns">

                
                  <div id="addModal" class="reveal-modal" data-reveal>
                        <h2> Ajouter un Contact </h2>
                      <form id="addContact" action="#" method="post">

                        <div class="grid-container">
                          <div class="grid-x grid-padding-x">

                            <div class="medium-6 cell">
                              <label>Nom
                                <input name="nom" type="text" placeholder="Nom du Contact" required>
                              </label>
                            </div>

                            <div class="medium-6 cell">
                              <label>Prénom
                                <input name="prenom" type="text" placeholder="Prénom du Contact" required>
                              </label>
                            </div>

                            <div class="medium-6 cell">
                              <label>Email
                                <input name="email" type="email" placeholder="Email" class="email-input" required>
                              </label>
                            </div>

                            <div class="medium-6 cell">
                              <label>Téléphone
                                <input name="tel" type="text" maxlength="10" minlength="10" placeholder="Téléphone" class="phone-input" required>
                              </label>
                            </div>

                            <div class="medium-6 cell">
                              <label>Ville
                                <select name="ville">
                                  <option value="Paris">Paris</option>
                                  <option value="Lyon">Lyon</option>
                                  <option value="Marseille">Marseille</option>
                                </select>
                              </label>
                            </div>

                            <input id="addSubmitBtn" name="submit" type="submit" class="add-btn button right small round" value="Valider">
                              <a class="close-reveal-modal">&#215;</a>
                          </div>
                        </div>

                      </form>
                  </div>
             </div>
          </div>
        
    <!--loader -->
    <div id="loaderImage">
      <img src="img/ajax-loader.gif">
    </div>
    <!-- CONTENT -->

    <div id="pageContent"></div>

  </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
