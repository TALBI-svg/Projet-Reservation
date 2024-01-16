<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="cdn.jsdelivr.net_npm_sweetalert2@11.7.18_dist_sweetalert2.all.min copy.js"></script>
    <link rel="stylesheet" href="avis.css" />
    <title>Avis Clients - MRINI Elegance Hotel</title>
    <style>

      </style>
  </head>
  <body>
    <header>
      <h1>Avis Clients - MRINI Elegance Hotel</h1>
    </header>

    <section id="add-review">
      <h2>Ajouter un Avis</h2>
      <form action="traitement_avis.php" method="post">
        <label for="name">Nom :</label>
        <input
          type="text"
          id="name"
          name="name"
          placeholder="Votre Nom..."
          required
        />

        <label for="rating">Note :</label>
        <select id="rating" name="rating" required>
          <option value="5">5 étoiles</option>
          <option value="4">4 étoiles</option>
          <option value="3">3 étoiles</option>
          <option value="2">2 étoiles</option>
          <option value="1">1 étoile</option>
        </select>

        <label for="comment">Commentaire :</label>
        <textarea
          id="comment"
          name="comment"
          rows="5"
          placeholder="Votre Commentaire..."
          required
        ></textarea>

        <button type="submit">Soumettre</button>
      </form>
    </section>

   
      <?php
      require "connectionBaseDeDonnees.php"; 
      
      // Vérifiez le paramètre de succès dans l'URL
      $succesParametre = isset($_GET['succus']) ? $_GET['succus'] : '';
      if ($succesParametre === 'avis_ajouter_avec_succees') {
        echo '
        <script>
        Swal.fire({
            icon: "success",
            title: "Succès",
            text: "Votre avis a été ajouté avec succès."
        });
        </script>';
    }

      // Récupération des avis depuis la base de données
      $sql = "SELECT * FROM avis";
      $stmt = $pdo->query($sql);  // Affichage des avis
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '<section id="reviews">';
      echo '
      <div class="review">
        '; echo '
        <h3>' . htmlspecialchars($row["nom"]) . '</h3>
        '; echo '
        <div class="rating">' . str_repeat('★', $row["note"]) . '</div>
        '; echo '
        <p>' . htmlspecialchars($row["commentaire"]) . '</p>
        '; echo '
        </div>
        </section>
      '; } if ($stmt->rowCount() === 0) { echo '
        <section id="styleAucunAvis">
      <p>Aucun avis pour le moment.</p>
      </section>
      '; } ?>
  </body>
</html>
