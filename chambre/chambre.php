<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styling_chambre.css" />
    <title>Liste des Chambres</title>
    <style>
body{
  background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
}
      </style>
  </head>
    <body>
  <?php
// Connexion à la base de données avec PDO
require "connectionBaseDeDonnees.php";

// Requête SQL pour récupérer les données avec la disponibilité
$query = "SELECT id_chambre, type_chambre, prix_nuit, description, url_image, disponibilite FROM chambres";
$stmt = $pdo->prepare($query);
$stmt->execute();
$chambres = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Générer le code HTML dynamiquement
echo '<div id="Contenu_image">';

$count = 0; // Compteur pour limiter le nombre d'éléments affichés

foreach ($chambres as $chambre) {
    // Vérifier la disponibilité avant d'afficher la chambre
    if ($count < 8) { // Afficher seulement les 4 premiers éléments
        echo '<div id="contenu_image">';
        echo '<img src="../imageChambres/' . $chambre['url_image'] . '" class="chambreImage" alt="" />';
        echo '<h4>' . $chambre['type_chambre'] . '</h4>';
        echo "État : " . ($chambre['disponibilite'] ? "<span id='disponible'> Disponible </span>" : "<span id='indisponible'> Indisponible </span> ");
        echo '<div class="margin">';
        echo '<span>Á partir de :</span> <span class="prix"> ' . $chambre['prix_nuit'] . '</span>';
        echo '<span class="mad"> MAD </span>';
        echo '</div>';
        echo '<div>'; 
        echo '<button data-id="' . $chambre['id_chambre'] . '" class="button-reservation">Réserver</button>';
        echo '</div>';
        echo '</div>';
        $count++;
    } 
}

echo '</div>';
?>


    <!-- Formulaire caché pour envoyer l'ID de la chambre via POST -->
    <form id="reservationForm" action="../Formulaire_reservation/reserver.php" method="post">
      <input type="hidden" name="idChambre" id="idChambre" />
    </form>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var chambreContainers = document.querySelectorAll("[data-id]");

        chambreContainers.forEach(function (chambreContainer) {
          chambreContainer.addEventListener("click", function () {
            var idChambre = this.getAttribute("data-id");
            document.getElementById("idChambre").value = idChambre;
            document.getElementById("reservationForm").submit();
          });
        });
      });
    </script>
  </body>
</html>
<?php

