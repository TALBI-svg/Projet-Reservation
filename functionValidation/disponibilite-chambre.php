<?php
    $id_chambre = $_POST['id_chambre'];
    $requete_verification_chambre = $pdo->prepare("SELECT disponibilite FROM chambres WHERE id_chambre = :id_chambre");
    $requete_verification_chambre->bindParam(':id_chambre', $id_chambre);
    $requete_verification_chambre->execute();
    $resultat = $requete_verification_chambre->fetch();
    
    // Vérifiez si la chambre est disponible
    if ($resultat && $resultat['disponibilite'] === 1) {
        // La chambre est disponible
        require "../functionValidation/effectuer_resevation.php";
    } else {
        echo "Non";
        // La chambre n'est pas disponible
    }
?>
