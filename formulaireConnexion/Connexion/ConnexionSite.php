<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="Connexion.css" />
  <title>Login Form | MRINI</title>
  <style>
      body{
  background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
  }
  </style>  
</head>

<body>
  <!-- <img width="20" height="20" src="https://img.icons8.com/fluency/48/spam.png" alt="spam" /> -->
  <div id="centrer_fomulaire">
    <div class="wrapper">
      <div class="title">Formulaire de connexion</div>

      <form action="Connexion.php" method="post" id="PasserConnexion">
        <div class="field">
          <input type="text" name="email" id="email" />
          <label for="">Adresse e-mail</label>
          <div id="divErrorMere">
            <div>
              <img width="20" height="20" src="https://img.icons8.com/fluency/48/spam.png" alt="" class="warning"
                id="warning" />
            </div>
            <div>
              <span id="messageErrorEmail"></span>
            </div>
          </div>
        </div>
        <div class="field">
          <input type="password" name="mot_de_passe" id="mot_de_passe" />
          <label for="">Mot de passe</label>
          <div id="divErrorMere">
            <div>
              <img width="20" height="20" src="https://img.icons8.com/fluency/48/spam.png" alt="" class="warning"
                id="warning_2" />
            </div>
            <div>
              <span id="messageErrorMotDePasse"></span>
            </div>
          </div>
        </div>
        <br>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember_me" />
            <label for="remember-me">Rester connecté</label>
          </div>

          <div class="pass-link">
            <a href="../forgotPassword/ForgotPassword.html">Mot de passe oublié ?</a>
          </div>
        </div>

        <div class="field">
          <button onclick="validerConnexion(event)">Login</button>
        </div>

        <div class="signup-link">Pas un membre ? <a href="../Signup/Signup.html">S'inscrire maintenant</a>
        </div>
      </form>
    </div>
  </div>
</body>
<script src="cdn.jsdelivr.net_npm_sweetalert2@11.7.18_dist_sweetalert2.all.min copy.js"></script>
<script>
  // Déclaration des variables
  const email = document.getElementById("email");
  const mot_de_passe = document.getElementById("mot_de_passe");
  const remember_me = document.getElementById("remember_me");

  const messageErrorEmail = document.getElementById("messageErrorEmail");
  const messageErrorMotDePasse = document.getElementById("messageErrorMotDePasse");
  const iconWarning = document.getElementById("warning");
  const iconWarning_2 = document.getElementById("warning_2");

  const regexEmail = /.+@gmail.com$/;

  email.addEventListener("focus", resetError);
  mot_de_passe.addEventListener("focus", resetError);

  function resetError() {
    messageErrorEmail.innerHTML = "";
    messageErrorMotDePasse.innerHTML = "";
    hideIconsWarning();
  }

  function hideIconsWarning() {
    iconWarning.style.display = "none";
    iconWarning_2.style.display = "none";
  }

  function validerConnexion(event) {
    // Varaible de passage
    event.preventDefault();
    let estPassed = true;
    const valeurEmailSansEspace = email.value.trim();
    if (email.value.length === 0) {
      estPassed = false;
      iconWarning.style.display = "block";
      messageErrorEmail.innerText =
        "Veuillez remplir le champ de l'adresse e-mail.";
    } else if (!regexEmail.test(valeurEmailSansEspace)) {
      estPassed = false;
      iconWarning.style.display = "block";
      messageErrorEmail.innerText = "Veuillez saisir une adresse email valide.";
    }
    if (mot_de_passe.value.length === 0) {
      estPassed = false;
      iconWarning_2.style.display = "block";
      messageErrorMotDePasse.innerText =
        "Veuillez remplir le champ de l'adresse e-mail.";
    } else if (mot_de_passe.value.length < 8) {
      estPassed = false;
      iconWarning_2.style.display = "block";
      messageErrorMotDePasse.innerText = "Le mdp doit contenir au moins 8 caractères.";
    }
    if (!remember_me.checked) {
      estPassed = false;
    }
    // return estPassed
    if (estPassed) {
    //   function submitFormAndRedirect() {
    //     // Soumettre le formulaire 
        document.getElementById("PasserConnexion").submit();
    //   }
    }
  }

</script>

<?php
// ... (autres codes PHP)
if (isset($_GET['msgErreur'])) {
  $messageErreur = urldecode($_GET['msgErreur']);
  // Afficher le message d'erreur à l'utilisateur, par exemple avec SweetAlert2
  echo "<script>
          Swal.fire({
              icon: 'error',
              title: 'Erreur',
              text: '{$messageErreur}',
          });
       </script>";
}

  // if (isset($_GET["msgSuccees"]) && !empty($_GET["msgSuccees"])) {
  //   $messageSuccees = urldecode($_GET["msgSuccees"]);
  //   echo "
  //   <script>
  //   const Toast = Swal.mixin({
  //       toast: true,
  //       position: 'top-end',
  //       showConfirmButton: false,
  //       timer: 2000,
  //       timerProgressBar: true,
  //       didOpen: (toast) => {
  //         toast.addEventListener('mouseenter', Swal.stopTimer);
  //         toast.addEventListener('mouseleave', Swal.resumeTimer);
  //       }
  //     });

  //     Toast.fire({
  //       icon: 'success',
  //       title: '{$messageSuccees}'
  //     });
  //     </script>";
  // }

?>

</html>
