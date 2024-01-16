<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="reservation.css" />
    <title>Formulaire de Réservation d'Hôtel</title>
    <style>
      body{
  background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
  }
  </style>  
  </head>
  <body>
    <h1 class="text">Formulaire de réservation</h1>
    <form action="traiter.php" method="post" onsubmit="return valider(event)" id="form-reservation">
      <input type="hidden" name="id_chambre" value="<?php
        if(isset($_POST['idChambre'])){
          echo htmlspecialchars($_POST['idChambre']);
        } else {
          header("Location: ../page-error.php?erreur=chambre-non-selectionner");
          exit();
        }
      ?>">
<label for="nom">Nom complet:</label>
      <input type="text" id="nom" name="nom" />
      <br />

      <label for="email">Adresse e-mail:</label>
      <input type="email" id="email" name="email" />
      <br />

      <label for="telephone">Numéro de téléphone:</label>
      <input type="tel" id="telephone" name="telephone" />
      <br />

      <label for="date_depart">Date de départ:</label>
      <input type="date" id="date_depart" name="date_depart" />
      <br />

      <label for="date_arrivee">Date d'arrivée:</label>
      <input type="date" id="date_arrivee" name="date_arrivee" />
      <br />

      <label for="nombre_personnes">Nombre de personnes:</label>
      <input type="number" id="nombre_personnes" name="nombre_personnes" />
      <br />

      <label for="type_chambre">Type de chambre:</label>
      <div class="select-container">
        <select id="type_chambre" name="type_chambre">
          <optgroup label="Types de chambres">
            <option value=""></option>
            <option value="standard">Chambre standard</option>
            <option value="supérieure">
              Chambre supérieure / Chambre de luxe
            </option>
            <option value="familiale">Chambre familiale</option>
          </optgroup>
        </select>
      </div>
      <br />

      <label for="options_supplementaires"
        >Options supplémentaires (facultatif):</label
      >
      <textarea
        id="options_supplementaires"
        name="options_supplementaires"
        rows="4"
        cols="50"
      ></textarea>
      <br />
      <input type="submit" value="Valider la réservation" id="button"/>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.all.min.js"></script>
    <script src="reserver.js"></script>
  </body>
</html>
