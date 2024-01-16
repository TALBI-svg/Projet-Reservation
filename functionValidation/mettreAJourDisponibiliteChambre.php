<?php
// Fonction pour mettre à jour la disponibilité de la chambre
function mettreAJourDisponibiliteChambre($idChambre, $disponibilite, $pdo) {
    try {
        $sqlMiseAJour = "UPDATE chambres SET disponibilite = :disponibdisponibilitele WHERE id_chambre = :chambre_id";
        $stmtMiseAJour = $pdo->prepare($sqlMiseAJour);
        $stmtMiseAJour->bindParam(':disponibilite', $disponible, PDO::PARAM_BOOL);
        $stmtMiseAJour->bindParam(':chambre_id', $idChambre);
        $stmtMiseAJour->execute();
        return true;
    } catch (PDOException $e) {
        return false; // Gérer les erreurs de base de données
    }
}

$idChambre = $_POST['id_chambre'];
if (mettreAJourDisponibiliteChambre($idChambre, $disponibilite, $pdo)) {
    echo "La disponibilité de la chambre a été mise à jour avec succès !";
} else {
    echo "Erreur lors de la mise à jour de la disponibilité de la chambre.";
}

?>
