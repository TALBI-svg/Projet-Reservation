// Déclaration des constantes pour les éléments du formulaire
const nom = document.getElementById("nom");
const email = document.getElementById("email");
const telephone = document.getElementById("telephone");
const date_depart = document.getElementById("date_depart");
const date_arrivee = document.getElementById("date_arrivee");
const nombre_personnes = document.getElementById("nombre_personnes");
const type_chambre = document.getElementById("type_chambre");

// Déclaration des expressions régulières pour la validation
const regex_nom = /^[a-zA-Z\s]{3,}$/;
const regex_email = /.+@gmail.com$/;
const regex_telephone = /^[0-9]{10}$/;
const regex_nombre_personnes = /^[1-9][0-9]*$/;

// Styles de bordure pour les champs valides et non valides
const style_border_true = "1px solid green";
const style_border_false = "1px solid red";

// Fonction pour réinitialiser le style de bordure lors du focus sur un champ
function resetBorderStyle() {
  this.style.border = "";
}

// Ajout des écouteurs de focus pour réinitialiser le style de bordure
nom.addEventListener("focus", resetBorderStyle);
email.addEventListener("focus", resetBorderStyle);
telephone.addEventListener("focus", resetBorderStyle);
date_depart.addEventListener("focus", resetBorderStyle);
date_arrivee.addEventListener("focus", resetBorderStyle);
nombre_personnes.addEventListener("focus", resetBorderStyle);
type_chambre.addEventListener("focus", resetBorderStyle);

// Fonction pour vérifier les dates
function verifierDates() {
  // Obtenir la date actuelle
  let dateActuelle = new Date();

  // Convertir les chaînes de date en objets Date
  let dateDepart = new Date(date_depart.value);
  let dateArrivee = new Date(date_arrivee.value);

  // Vérifier si la date de départ est supérieure ou égale à la date actuelle
  if (dateDepart >= dateActuelle) {
    date_depart.style.border = style_border_true;

    // Vérifier si la date d'arrivée est postérieure à la date de départ
    if (dateArrivee >= dateDepart) {
      date_arrivee.style.border = style_border_true;
      return true;
    } else {
      date_arrivee.style.border = style_border_false;
    }
  } else {
    date_depart.style.border = style_border_false;
  }

  return false;
}

// Fonction pour appliquer la validation sur un champ
function applyValidation(regex, inputElement) {
  if (regex.test(inputElement.value)) {
    inputElement.style.border = style_border_true;
    return true;
  } else {
    inputElement.style.border = style_border_false;
    return false;
  }
}

// Fonction principale de validation du formulaire
function valider(event) {
  event.preventDefault(); // Empêcher la soumission du formulaire par défaut
  let validationPassed = true;

  // Valider les dates
  if (!verifierDates()) {
    validationPassed = false;
  }

  // Valider les autres champs
  validationPassed = applyValidation(regex_nom, nom) && validationPassed;
  validationPassed = applyValidation(regex_email, email) && validationPassed;
  validationPassed =
    applyValidation(regex_telephone, telephone) && validationPassed;
  validationPassed =
    applyValidation(regex_nombre_personnes, nombre_personnes) &&
    validationPassed;

  // Valider le type de chambre
  if (type_chambre.value !== "") {
    type_chambre.style.border = style_border_true;
  } else {
    type_chambre.style.border = style_border_false;
    validationPassed = false;
  }

  // Vérifier si tous les champs sont valides
  if (validationPassed) {
    // Si tout est valide, vous pouvez envoyer le formulaire
    document.getElementById("form-reservation").submit(); // Cela suppose que votre formulaire est le premier (et seul) formulaire sur la page
  } else {
    Swal.fire({
      icon: "error",
      title: "Erreur de validation",
      text: "Veuillez remplir correctement tous les champs du formulaire.",
    });
  }
}
