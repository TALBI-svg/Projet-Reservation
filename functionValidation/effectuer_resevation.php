<?php

// Calculer le nombre de jours
$nombre_jour = date_diff(new DateTime($date_depart), new DateTime($date_arrivee))->format('%a');

// Insérer les données de réservation dans la base de données
$sql = "INSERT INTO reservations (id_chambre, nomComplet_client, adresse_email, numero_telephone, date_depart, date_arrivee, nombre_jour, nombre_personnes, type_chambre, montant_total, options_supplementaires) VALUES (:id_chambre, :nomComplet_client, :adresse_email, :numero_telephone, :date_depart, :date_arrivee, :nombre_jour, :nombre_personnes, :type_chambre, :montant_total, :options_supplementaires)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id_chambre', $id_chambre);
$stmt->bindParam(':nomComplet_client', $nom_complet);
$stmt->bindParam(':adresse_email', $adresse_email);
$stmt->bindParam(':numero_telephone', $numero_telephone);
$stmt->bindParam(':date_depart', $date_depart);
$stmt->bindParam(':date_arrivee', $date_arrivee);
$stmt->bindParam(':nombre_jour', $nombre_jour); 
$stmt->bindParam(':nombre_personnes', $nombre_personnes);
$stmt->bindParam(':type_chambre', $type_chambre);
$stmt->bindParam(':montant_total', $prixTotal);
$stmt->bindParam(':options_supplementaires', $options_supplementaires);

// Exécuter la requête
if ($stmt->execute()) {
    echo "Réservation effectuée avec succès.";
    // require "../functionValidation/mettreAJourDisponibiliteChambre.php";
} else {
    echo "Erreur lors de la réservation : " . $stmt->errorInfo()[2];
}

?>