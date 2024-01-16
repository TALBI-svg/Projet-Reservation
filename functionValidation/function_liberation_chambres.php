<?php
// Récupération de la date actuelle
$dateActuelle = date('Y-m-d');

// Requête pour mettre à jour la disponibilité des chambres après la date d'arrivée
$sql = "UPDATE chambres SET disponible = 1 WHERE id_chambre IN (
            SELECT id_chambre FROM reservations 
            WHERE date_arrivee <= :dateActuelle 
        )";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':dateActuelle', $dateActuelle, PDO::PARAM_STR);
$stmt->execute();

echo "Mise à jour terminée.";
?>