let Para_1 = document.getElementById("Para_1");
let Para_2 = document.getElementById("Para_2");
let Para_3 = document.getElementById("Para_3");
let image_chevron_1 = document.getElementById("image_chevron_1");
let image_chevron_2 = document.getElementById("image_chevron_2");
let image_chevron_3 = document.getElementById("image_chevron_3");
let Remis_des_cles = document.getElementById("Remis_des_cles");
let Communication_avec_votre_hotel = document.getElementById(
  "Communication_avec_votre_hotel"
);
let Enregistrement = document.getElementById("Enregistrement");
const urlIconcollapse = "https://img.icons8.com/nolan/64/collapse-arrow.png";
const urlIconexpand = "https://img.icons8.com/nolan/64/expand-arrow.png";

Remis_des_cles.addEventListener("click", function () {
  if (Para_1.style.opacity === "0") {
    Para_1.classList.add("block");
    setTimeout(function () {
      Para_1.style.opacity = "1";
      image_chevron_1.setAttribute("src", urlIconcollapse);
    }, 0);
  } else {
    Para_1.style.opacity = "0";
    image_chevron_1.setAttribute("src", urlIconexpand);
    setTimeout(function () {
      Para_1.classList.remove("block");
    }, 0); // Ajout d'un délai pour la disparition après la transition
  }
});

Communication_avec_votre_hotel.addEventListener("click", function () {
  if (Para_2.style.opacity === "0") {
    Para_2.classList.add("block");

    setTimeout(function () {
      Para_2.style.opacity = "1";
      image_chevron_2.setAttribute("src", urlIconcollapse);
    }, 0);
  } else {
    Para_2.style.opacity = "0";
    image_chevron_2.setAttribute("src", urlIconexpand);
    setTimeout(function () {
      Para_2.classList.remove("block");
    }, 0);
  }
});

Enregistrement.addEventListener("click", function () {
  if (Para_3.style.opacity === "0") {
    Para_3.classList.add("block");
    setTimeout(function () {
      Para_3.style.opacity = "1";
      image_chevron_3.setAttribute("src", urlIconcollapse);
    }, 0);
  } else {
    Para_3.style.opacity = "0";
    image_chevron_3.setAttribute("src", urlIconexpand);
    setTimeout(function () {
      Para_3.classList.remove("block");
    }, 0);
  }
});
