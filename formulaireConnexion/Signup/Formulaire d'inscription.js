// Déclaration des varaible
const nomComplet = document.getElementById("nomComplet"),
  email = document.getElementById("email"),
  mot_de_passe = document.getElementById("mot_de_passe"),
  agree_terms = document.getElementById("agree_terms");

// Varaible d'error
const messageErroNomComplet = document.getElementById("messageErroNomComplet"),
  messageErrorEmail = document.getElementById("messageErrorEmail"),
  messageErrorMotDePasse = document.getElementById("messageErrorMotDePasse");

// RegExpression
let regexNomCompet = /^[A-Za-z\- ]+$/,
  regexEmail = /.+@gmail.com$/;

nomComplet.addEventListener("focus", () => {
  messageErroNomComplet.innerText = "";
});
email.addEventListener("focus", () => {
  messageErrorEmail.innerText = "";
});
mot_de_passe.addEventListener("focus", () => {
  messageErrorMotDePasse.innerText = "";
});
mot_de_passe.addEventListener("input", () => {
  let valeurMDP = mot_de_passe.value;
  const contientMajuscules = /[a-zA-Z]/.test(valeurMDP),
    contientChiffres = /[0-9]/.test(valeurMDP),
    contientSpeciaux = /\W/.test(valeurMDP);
  if (
    contientMajuscules &&
    contientChiffres &&
    contientSpeciaux &&
    valeurMDP.length >= 8
  ) {
    messageErrorMotDePasse.innerText =
      "Le niveau de sécurité du mot de passe est : élevé";
    messageErrorMotDePasse.style.color = "green";
  } else if (contientMajuscules && contientChiffres && valeurMDP.length >= 8) {
    messageErrorMotDePasse.innerText =
      "Le niveau de sécurité du mot de passe est : moyen";
    messageErrorMotDePasse.style.color = "orange";
  } else if (
    !contientMajuscules ||
    !contientChiffres ||
    !contientSpeciaux ||
    valeurMDP.length <= 8
  ) {
    messageErrorMotDePasse.innerText =
      "Le niveau de sécurité du mot de passe est : faible ";
    messageErrorMotDePasse.style.color = "red";
  }
});
function validerDonnees(event) {
  event.preventDefault();
  let valeurMDP = mot_de_passe.value;
  const contientMajuscules = /[a-zA-Z]/.test(valeurMDP),
    contientChiffres = /[0-9]/.test(valeurMDP),
    contientSpeciaux = /\W/.test(valeurMDP);

  // Variable de la suivi
  estPassed = true;

  const nomCompletValue = nomComplet.value.trim(),
    emailValue = email.value.trim(),
    motDePasseValue = mot_de_passe.value;
  if (nomCompletValue.length === 0) {
    estPassed = false;
    messageErroNomComplet.innerText =
      "Veuillez remplir le champ de Nom complet.";
  } else if (
    nomCompletValue.length < 3 ||
    !regexNomCompet.test(nomCompletValue)
  ) {
    estPassed = false;
    messageErroNomComplet.innerText = "Veuillez saisir un nom valide.";
  }
  if (emailValue.length === 0) {
    estPassed = false;
    messageErrorEmail.innerText =
      "Veuillez remplir le champ de l'adresse e-mail.";
  } else if (!regexEmail.test(emailValue)) {
    estPassed = false;
    messageErrorEmail.innerText = "Veuillez saisir une adresse email valide.";
  }

  if (motDePasseValue.length === 0) {
    estPassed = false;
    messageErrorMotDePasse.innerText =
      "Veuillez remplir le champ du mot de passe.";
    messageErrorMotDePasse.style.color = "red";
  } else if (motDePasseValue.length <= 5) {
    estPassed = false;
    messageErrorMotDePasse.innerText =
      "Le mot de passe doit contenir au moins 8 caractères";
    messageErrorMotDePasse.style.color = "red";
  } else if (
    (!contientMajuscules || !contientChiffres || !contientSpeciaux) &&
    motDePasseValue.length >= 8
  ) {
    estPassed = false;
    messageErrorMotDePasse.innerText =
      "Veuillez saisir un mot de passe sécurisé en incluant des majuscules, des chiffres et des caractères spéciaux.";
    messageErrorMotDePasse.style.color = "orange";
  }

  if (!agree_terms.checked) {
    estPassed = false;
  }
  // Affichage de messages en utilisant Swal en fonction du résultat des validations
  if (estPassed) {
    Swal.fire("Succès !", "Le formulaire a été envoyé avec succès.", "success");
    setTimeout(() => {
      document.getElementById("formInscription").submit();
      // window.location.href = "../connexion/connexion.html";
    }, 1500);
  }
  // return estPassed ;
}
