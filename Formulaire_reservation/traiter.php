<?php

    require "connectionBaseDeDonnees.php";
    
    if (($_SERVER["REQUEST_METHOD"] === "POST") && !empty($_POST['id_chambre'])) {
        try {
            // Récupérer les données du formulaire
            $id_chambre = $_POST['id_chambre'];
            $nom_complet = $_POST['nom'];
            $adresse_email = $_POST['email'];
            $numero_telephone = $_POST['telephone'];
            $date_depart = $_POST['date_depart'];
            $date_arrivee = $_POST['date_arrivee'];
            $nombre_personnes = $_POST['nombre_personnes'];
            $type_chambre = $_POST['type_chambre'];
            $options_supplementaires = $_POST['options_supplementaires'];
/*===============================================================================================================================================================================*/
            // require "../functionValidation/function_liberation_chambres.php";
/*===============================================================================================================================================================================*/
            require "../functionValidation/calculerPrixTotal.php";
/*===============================================================================================================================================================================*/
            require "../functionValidation/validerDate.php";
/*===============================================================================================================================================================================*/
            // require "../functionValidation/verifierDisponibiliteChambre.php";
/*===============================================================================================================================================================================*/
            require "../functionValidation/disponibilite-chambre.php";
/*=============================================================================================================================================================================== */

        }catch (PDOException $e) {
            // echo "Erreur lors de l'enregistrement de la réservation : " . $e->getMessage();
            // header("Location: ../page-error.php?erreur=erreur-lors-enregistrement-reservation");
        }
    }else {
        // Affichez un message d'erreur ou redirigez l'utilisateur vers la page appropriée
        // echo "Aucun chambre n'est sélectionner";
        header("Location: ../page-error.php?erreur=chambre-non-selectionner");
    }
?>