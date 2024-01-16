<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="Formulaire d'inscription.css" />
  <title>Signup Form | MRINI</title>

  <style>
      body{
  background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
  }
  </style>  
  <!--css file-->
  <style></style>
</head>

<body>
  <header>
    <div id="container_header">
      <div>
        <img width="64" height="64"
          src="https://img.icons8.com/external-icongeek26-outline-gradient-icongeek26/64/external-M-alphabet-icongeek26-outline-gradient-icongeek26-2.png"
          alt="external-M-alphabet-icongeek26-outline-gradient-icongeek26-2" />
        <h1 class="animated-heading">MRINI Elegance Hotel</h1>
      </div>
      <div>
        <nav>
          <ul>
            <li><a href="#accueil">Accueil</a></li>
            <li><a href="#chambres">Chambres</a></li>
            <li><a href="#equipements">Équipements</a></li>
            <li><a href="#offres">Offres</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#avis">Avis Clients</a></li>
          </ul>
        </nav>
        <div>
          <img width="45" height="45" id="traduction" src="https://img.icons8.com/nolan/64/google-translate.png"
            alt="google-translate" />
        </div>
        <button id="loginButton">
          <span>
            <img width="20" height="20" src="https://img.icons8.com/ios-glyphs/30/user--v1.png" id="imag_connexion"
              alt="user--v1" />
          </span>
          <!-- <span id="boutonReservation">Réserver maintenent</span> -->
        </button>
      </div>
    </div>
  </header>
  <div id="centrer_fomulaire">
    <div class="wrapper">

      <div class="title">Formulaire d'inscription</div>

      <form action="Formulaire d'inscription.php" method="post" id="formInscription">
        <div class="field">
            <input type="text" name="nomComplet" id="nomComplet" />
            <label id="lableNom" for="nomComplet">Nom complet</label>
        </div>
        <div>
            <p id="messageErroNomComplet" class="messageError">
                <?php
                if (isset($_GET['errors']) && strpos($_GET['errors'], 'nomComplet:') !== false) {
                    echo htmlspecialchars('Veuillez remplir le champ de Nom complet.');
                }
                ?>
            </p>
        </div>
        <div class="field">
            <input type="text" name="email" id="email" />
            <label id="labelEmail" for="email">Adresse e-mail</label>
        </div>
        <div>
            <p id="messageErrorEmail" class="messageError">
                <?php
                if (isset($_GET['errors']) && strpos($_GET['errors'], 'email:') !== false) {
                    echo htmlspecialchars('Veuillez remplir le champ d\'adresse e-mail.');
                }
                if (isset($_GET['error']) && ($_GET['error'] === 'email_duplicate')) {
                    echo htmlspecialchars('L\'adresse e-mail existe déjà. Veuillez choisir une autre adresse e-mail.');
                }
                ?>
            </p>
        </div>
        <div class="field">
            <input type="password" name="mot_de_passe" id="mot_de_passe" />
            <label id="labelMotDePasse" for="mot_de_passe">Mot de passe</label>
        </div>
        <div>
            <p id="messageErrorMotDePasse" class="messageError">
                <?php
                if (isset($_GET['errors']) && strpos($_GET['errors'], 'motDePasse:') !== false) {
                    echo htmlspecialchars('Veuillez remplir le champ du mot de passe.');
                }
                ?>
            </p>
        </div>
        <div class="content">
            <div class="checkbox">
                <input type="checkbox" name="agree_terms" id="agree_terms" />
                <label for="agree_terms">J'accepte les conditions</label>
              </div>
            </div>
            
            <div class="field">
              <!-- <button type="submit" id="button">Se connecter</button> -->
              <button type="button" id="button" onclick="validerDonnees(event)">Se connecter</button>
        </div>

        <div class="signup-link"> Déjà membre ? <a href="../Connexion/Connexion.html">Connectez-vous maintenant</a>
        </div>
    </form>
  </div>
  <script src="cdn.jsdelivr.net_npm_sweetalert2@11.7.18_dist_sweetalert2.all.min copy.js"></script>
  <script src="Formulaire d'inscription.js"></script>

</body>
</html>