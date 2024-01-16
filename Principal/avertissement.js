// Pour afficher une message d'avertissement stylée dans la console.
const stylingConsole =
  "color: #990000; font-size: 18px; background-color: #FFD700; border: 1px solid #990000; border-radius: 5px; padding: 8px; text-align: center; font-family: 'Arial', sans-serif; font-weight: bold;";
const messageErreur =
  "L'utilisation de cette console expose à un risque potentiel d'usurpation d'identité et de vol d'informations par le biais d'une attaque appelée Self-XSS. Ne saisissez pas ou ne copiez pas de code que vous ne comprenez pas.";
const styleMessageErreur = "font-size:19px";
console.log(
  `%c ⚠️ AVERTISSEMENT ! %c${messageErreur}`,
  stylingConsole,
  styleMessageErreur
);
//

// Pour désactiver le click droit avec une message de la sécurité.
document.oncontextmenu = function (event) {
  event.preventDefault();
  const divContenuProteger = document.getElementById("divContenuProteger");
  divContenuProteger.classList.add("show");
  setTimeout(function () {
    divContenuProteger.classList.remove("show");
  }, 2500);
};
//
