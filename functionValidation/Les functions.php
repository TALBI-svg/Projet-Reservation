<?php

// Fonction pour calculer le prix total
function calculerPrixTotal($idChambre, $dateDepart, $dateArrivee, $pdo, $optionsSupplementaires) {
    try {
        // Récupérer le prix de base de la chambre
        $stmtPrix = $pdo->prepare("SELECT prix_nuit FROM chambres WHERE id_chambre = :idChambre");
        $stmtPrix->bindParam(':idChambre', $idChambre);
        $stmtPrix->execute();

        $resultatPrix = $stmtPrix->fetch(PDO::FETCH_ASSOC);

        if (!$resultatPrix) {
            return null; // Gérer le cas où la chambre n'est pas trouvée
        }

        $prixNuit = $resultatPrix['prix_nuit'];

        // Calculer le nombre de nuits de séjour
        $datetimeDepart = new DateTime($dateDepart);
        $datetimeArrivee = new DateTime($dateArrivee);
        $difference = $datetimeDepart->diff($datetimeArrivee);
        $nombreNuits = $difference->days;

        // Calculer le prix total
        $prixTotal = $prixNuit * $nombreNuits ;

        return $prixTotal;
    } catch (PDOException $e) {
        return null; // Gérer les erreurs de base de données
    }
}

// Fonction pour mettre à jour la disponibilité de la chambre
function mettreAJourDisponibiliteChambre($idChambre, $disponible, $pdo) {
    try {
        $sqlMiseAJour = "UPDATE chambres SET disponible = :disponible WHERE id_chambre = :chambre_id";
        $stmtMiseAJour = $pdo->prepare($sqlMiseAJour);
        $stmtMiseAJour->bindParam(':disponible', $disponible, PDO::PARAM_BOOL);
        $stmtMiseAJour->bindParam(':chambre_id', $idChambre);
        $stmtMiseAJour->execute();
        return true;
    } catch (PDOException $e) {
        return false; // Gérer les erreurs de base de données
    }
}

function validerDatesSejour($dateDepart, $dateArrivee) {
    // Vérifier si les dates sont fournies et sont au format attendu
    if (empty($dateDepart) || empty($dateArrivee) ||
        !strtotime($dateDepart) || !strtotime($dateArrivee)) {
        return false; // Les dates ne sont pas valides
    }

    // Convertir les dates en objets DateTime pour faciliter la comparaison
    $datetimeDepart = new DateTime($dateDepart);
    $datetimeArrivee = new DateTime($dateArrivee);
    $aujourdhui = new DateTime();

    // Vérifier que la date de départ est postérieure à la date actuelle ou égale à la date actuelle
    if ($datetimeDepart < $aujourdhui && $datetimeDepart->format('Y-m-d') !== $aujourdhui->format('Y-m-d')) {
        return false; 
    }


    // Vérifier que la date d'arrivée est postérieure à la date de départ
    if ($datetimeArrivee <= $datetimeDepart) {
        return false; 
    }

    return true; // Les dates de séjour sont valides
}

// Fonction pour vérifier la disponibilité de la chambre
function verifierDisponibiliteChambre($idChambre, $dateDepart, $dateArrivee, $pdo) {
    $dispo = null;
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

        return $nombreReservations === 0; // La chambre est disponible si le nombre de réservations est 0
    } catch (PDOException $e) {
        // Gérer les erreurs de base de données
        return false;
    }
}

?>