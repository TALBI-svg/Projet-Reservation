<?php

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

// Exemple d'utilisation :
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dateDepart = $_POST['date_depart']; 
    $dateArrivee = $_POST['date_arrivee']; 
    
    if (validerDatesSejour($dateDepart, $dateArrivee)) {
        // Continuer le processus de réservation
        echo "Les dates de séjour sont valides. Continuer...";
    } else {
        // Afficher un message d'erreur et arrêter le processus
        echo "Les dates de séjour ne sont pas valides. Veuillez les corriger.";
    }
} else {
    // Gérer le cas où la requête n'est pas une requête POST
    echo "Cette page doit être appelée avec une requête POST.";
}

?>
