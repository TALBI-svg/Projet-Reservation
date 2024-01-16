<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="dashboard.css">
  <style>
body{
  background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
  }
      </style>
</head>
<body>

  <div class="container">
    <h1 id="titreDashboard">Tableau de bord :</h1>

    <?php
    // Connexion à la base de données
    require("connectionBaseDeDonnees.php");

    // Récupérer les réservations depuis la base de données
    $sql = "SELECT * FROM reservations";
    $stmt = $pdo->query($sql);

    if ($stmt->rowCount() > 0) {
      echo '<table>';
      echo '<tr>
              <th>ID Réservation</th>
              <th>ID Chambre</th>
              <th>Nom Complet</th>
              <th>Email</th>
              <th>Téléphone</th>
              <th>Date d\'Arrivée</th>
              <th>Date de Départ</th>
              <th>Nombre de Personnes</th>
              <th>Type de Chambre</th>
              <th>Montant Total</th>
              <th>Options Supplémentaires</th>
              <th>Nombre de Jours</th>
            </tr>';

      while ($row = $stmt->fetch()) {
        echo '<tr>
                <td>' . $row["id_reservation"] . '</td>
                <td>' . $row["id_chambre"] . '</td>
                <td>' . $row["nomComplet_client"] . '</td>
                <td>' . $row["adresse_email"] . '</td>
                <td>' . $row["numero_telephone"] . '</td>
                <td>' . $row["date_arrivee"] . '</td>
                <td>' . $row["date_depart"] . '</td>
                <td>' . $row["nombre_personnes"] . '</td>
                <td>' . $row["type_chambre"] . '</td>
                <td>' . $row["montant_total"] . '</td>
                <td>' . $row["options_supplementaires"] . '</td>
                <td>' . $row["nombre_jour"] . '</td>
              </tr>';
      }

      echo '</table>';
    } else {
      echo '<h2>Aucune réservation trouvée.</h2>';
    }
    ?>

  </div>

</body>
</html>