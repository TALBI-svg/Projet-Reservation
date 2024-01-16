<?php
// Informations de connexion à la base de données
$db_host = 'localhost'; // Adresse du serveur MySQL
$db_name = 'utilisateurs'; // Nom de la base de données
$db_user = 'root'; // Nom d'utilisateur MySQL
$db_password = ''; // Mot de passe MySQL

try {
    // Créer une instance de PDO pour la connexion à la base de données
    $pdo = new PDO("mysql:host=" . $db_host . ";dbname=" . $db_name, $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
