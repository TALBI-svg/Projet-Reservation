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

$idChambreSelectionnee = $_POST['id_chambre'];
$dateDepart = $_POST['date_depart'];
$dateArrivee = $_POST['date_arrivee'];
$optionsSupplementaires = $_POST['options_supplementaires']; 

$prixTotal = calculerPrixTotal($idChambreSelectionnee, $dateDepart, $dateArrivee, $pdo, $optionsSupplementaires);

if ($prixTotal !== null) {
    echo "Le prix total est : $prixTotal DH. Continuer...";
} else {
    echo "Erreur lors du calcul du prix total.";
}

?>
