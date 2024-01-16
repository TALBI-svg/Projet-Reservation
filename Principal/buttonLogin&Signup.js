function connecter() {
  window.location.href = "/formulaireConnexion/Connexion/ConnexionSite.php";
}
function inscrire() {
  window.location.href = "/formulaireConnexion/Signup/inscription.php";
}
let loginButton = document.getElementById("loginButton");
const divConnexion = document.getElementById("divConnexion");
divConnexion.style.display = "none";
loginButton.addEventListener("click", () => {
  if (divConnexion.style.display === "none") {
    divConnexion.style.display = "block";
  } else {
    divConnexion.style.display = "none";
  }
});
