// JavaScript pour afficher l'année en cours d'un manière très beau
document.getElementById("annee").textContent = new Date().getFullYear();

const email = document.getElementById("email"),
  emailRegex = /.+@gmail.com$/;
email.addEventListener("input", function () {
  email.style.border = "";
});
function verifier(event) {
  if (!emailRegex.test(email.value)) {
    email.style.border = "1px solid red";
    event.preventDefault();
    Swal.fire({
      icon: "error",
      title: "Adresse email invalide",
      text: "Veuillez entrer une adresse email valide avant de continuer.",
    });
  } else {
    email.style.border = "1px solid green";
    event.preventDefault();
    Swal.fire({
      icon: "success",
      title: "Email envoyé avec succès",
      text: "Nous vous remercions pour votre abonnement.",
    });
    setTimeout(() => {
      document.getElementById("subscriptionForm").submit();
    }, 2000);
  }
}
