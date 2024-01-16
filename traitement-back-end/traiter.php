<?php
    require("connectionBaseDeDonnees.php");

    // Récupérer les données d'arrivée et de départ fournies par l'utilisateur
    $date_arrivee = "2024-02-10";
    $date_depart = "2024-03-02";

    // Vérifier la disponibilité des chambres
    $sql = "SELECT id_chambre FROM chambres
        WHERE id_chambre NOT IN (
            SELECT id_chambre FROM reservations
            WHERE (date_arrivee <= :date_depart AND date_depart >= :date_arrivee)
               OR (date_arrivee <= :date_arrivee AND date_depart >= :date_depart)
               OR (date_arrivee >= :date_arrivee AND date_depart <= :date_depart)
        )";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':date_arrivee', $date_arrivee);
    $stmt->bindParam(':date_depart', $date_depart);
    
    if ($stmt->execute()) {
        // Renvoyer les chambres disponibles
        $chambres_disponibles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(['chambres_disponibles' => $chambres_disponibles]);
    } else {
        die("Erreur lors de la vérification de la disponibilité des chambres : " . $stmt->errorInfo()[2]);
    }
?>
