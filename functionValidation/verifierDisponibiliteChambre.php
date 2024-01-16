<?php
// Fonction pour vérifier la disponibilité de la chambre
function verifierDisponibiliteChambre($idChambre, $dateDepart, $dateArrivee, $pdo) {
    try {
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM reservations WHERE id_chambre = :idChambre AND (
                        (date_depart BETWEEN :dateDepart AND :dateArrivee) OR
                        (date_arrivee BETWEEN :dateDepart AND :dateArrivee) OR
                        (:dateDepart BETWEEN date_depart AND date_arrivee)
                    )");
        $stmt->bindParam(':idChambre', $idChambre);
        $stmt->bindParam(':dateDepart', $dateDepart);
        $stmt->bindParam(':dateArrivee', $dateArrivee);
        $stmt->execute();

        $nombreReservations = $stmt->fetchColumn();

        return $nombreReservations === 1; // La chambre est disponible  
    } catch (PDOException $e) {
        // Gérer les erreurs de base de données
        return false;
    }
}

// Traitement du formulaire
if (isset($_POST['id_chambre'], $_POST['date_depart'], $_POST['date_arrivee'])) {
    $idChambreSelectionnee = $_POST['id_chambre'];
    $dateDepart = $_POST['date_depart'];
    $dateArrivee = $_POST['date_arrivee'];

    // Vérifier la disponibilité de la chambre
    if (verifierDisponibiliteChambre($idChambreSelectionnee, $dateDepart, $dateArrivee, $pdo)) {
        echo "La chambre est disponible. Continuer...";
        // Continuez le traitement ou redirigez l'utilisateur vers la page suivante
    } else {
        $messageErreur = "La chambre n'est pas disponible pour les dates spécifiées. Veuillez choisir d'autres dates.";
        echo "<script>alert('$messageErreur');</script>";
        // Arrêter le script ici si nécessaire
        exit();
    }
} else {
    // Gérer le cas où les données du formulaire ne sont pas fournies
    $messageErreur = "Veuillez fournir toutes les informations nécessaires.";
    echo "<script>alert('$messageErreur');</script>";
    // Arrêter le script ici si nécessaire
    exit();
}
?>
