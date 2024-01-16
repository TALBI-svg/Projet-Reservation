function ValiderFormsContact() {
  const nom = document.getElementById("nom"),
    email = document.getElementById("email"),
    numero = document.getElementById("numero"),
    message = document.getElementById("message");

  let isPassed = false;

  const regExNom = /^[a-zA-Z\s]{3,}$/,
    regExEmail = /.+@gmail.com$/,
    regExNumero = /^[0-9]{9,}$/,
    regExMessage = /^[\s\S]{10,100}$/;

  function StyleBorder() {
    this.style.border = "";
  }
  nom.addEventListener("focus", StyleBorder);
  email.addEventListener("focus", StyleBorder);
  numero.addEventListener("focus", StyleBorder);
  message.addEventListener("focus", StyleBorder);
  if (
    nom.value === "" &&
    email.value === "" &&
    numero.value === "" &&
    message.value === ""
  ) {
    // Swal.fire(
    //   "Erreur !",
    //   "Veuillez remplir correctement tous les champs du formulaire.",
    //   "error"
    // );
  }

  if (!regExNom.test(nom.value)) {
    nom.style.border = "1px solid red";
    isPassed = false;
  } else {
    isPassed = true;
  }
  if (!regExEmail.test(email.value)) {
    email.style.border = "1px solid red";
    isPassed = false;
  } else {
    isPassed = true;
  }
  if (!regExNumero.test(numero.value)) {
    numero.style.border = "1px solid red";
    isPassed = false;
  } else {
    isPassed = true;
  }
  if (!regExMessage.test(message.value)) {
    message.style.border = "1px solid red";
    isPassed = false;
  } else {
    isPassed = true;
  }
  if (isPassed) {
    Swal.fire("Succès !", "Le formulaire a été envoyé avec succès.", "success");
    setTimeout(() => {
      document.getElementById("form").submit();
    }, 1000);
  }
  return false;
}
