<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Titre</title>

    <!-- Inclure la bibliothèque SweetAlert2 -->
    <script src="cdn.jsdelivr.net_npm_sweetalert2@11.7.18_dist_sweetalert2.all.min copy.js"></script>
</head>
<body>
<?php
// Paramètres de connexion à la base de données dbhotel
$host = "localhost";
$dbname = "hotel";
$user = "root";
$password = "";
// Connexion à la base de données avec PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    // Configurer PDO pour générer des exceptions en cas d'erreur SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo("<h2> Connexion à la base de données <span style='color:red;'>" . $dbname . "</span> avec succées. </h2>");
    echo '
        <script>
        const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer)
          toast.addEventListener("mouseleave", Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon: "success",
        title: "Connexion à la base de données avec succées."
      })
      </script>
      ';
} catch (PDOException $e) {
    die("Échec de la connexion à la base de données : " . $e->getMessage());
}
?>
</body>
</html>