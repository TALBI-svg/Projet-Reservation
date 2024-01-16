<?php

// Connexion à la base de données
require "connectionBaseDeDonnees.php";

// Traitement du formulaire d'ajout d'avis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST["name"];
    $note = $_POST["rating"];
    $commentaire = $_POST["comment"];

    // Insertion dans la base de données en utilisant une requête préparée
    $stmt = $pdo->prepare("INSERT INTO avis (nom, note, commentaire) VALUES (:nom, :note, :commentaire)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':note', $note);
    $stmt->bindParam(':commentaire', $commentaire);

    try {
        $stmt->execute();
        echo "Avis ajouté avec succès";
        header("Location: avis.php?succus=avis_ajouter_avec_succees");
    } catch (PDOException $e) {
        echo "Erreur lors de l'ajout de l'avis : " . $e->getMessage();
    }
}
?>
