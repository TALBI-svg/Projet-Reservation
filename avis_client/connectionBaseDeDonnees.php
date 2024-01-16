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
    echo("<h2> Connexion à la base de données <span style='color:red;'>" . $dbname . "</span> avec succées. </h2>");
} catch (PDOException $e) {
    die("Échec de la connexion à la base de données : " . $e->getMessage());
}
?>