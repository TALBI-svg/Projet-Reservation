<?php
include_once 'Connexion_bd.php';
$errors = array();  // Créez un tableau pour stocker les erreurs

if (empty($_POST['nomComplet'])) {
    $errors[] = 'nomComplet:Veuillez remplir le champ de Nom complet.';
}

if (empty($_POST['email'])) {
    $errors[] = 'email:Veuillez remplir le champ de l\'adresse e-mail.';
}

if (empty($_POST['mot_de_passe'])) {
    $errors[] = 'motDePasse:Veuillez remplir le champ du mot de passe.';
}

if (!empty($errors)) {
    // S'il y a des erreurs, redirigez vers la page d'inscription avec les messages d'erreur
    header('Location: inscription.php?errors=' . urlencode(implode(',', $errors)));
    // return FALSE;
} else {
    // Traitement des données du formulaire lorsque tous les champs sont remplis
}


// Assurez-vous que la requête est de type POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Assurez-vous que toutes les données nécessaires sont présentes
    if (
        isset($_POST["nomComplet"]) && !empty($_POST["nomComplet"]) &&
        isset($_POST["email"]) && !empty($_POST["email"]) &&
        isset($_POST['mot_de_passe']) && !empty($_POST['mot_de_passe'])
    ) {
        // Validez et récupérez les données
        $nomComplet = filter_input(INPUT_POST, 'nomComplet', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $motDePasse = filter_input(INPUT_POST, 'mot_de_passe', FILTER_SANITIZE_STRING);

        // Vérifiez si l'e-mail existe déjà dans la base de données
        $checkEmailQuery = $db->prepare("SELECT COUNT(*) FROM utilisateurs WHERE email = :email");
        $checkEmailQuery->bindParam(':email', $email, PDO::PARAM_STR);
        $checkEmailQuery->execute();
        $emailCount = $checkEmailQuery->fetchColumn();

        if ($emailCount > 0) {
            // Redirigez l'utilisateur vers la page d'inscription avec un message d'erreur
            header('Location: inscription.php?error=email_duplicate');
            exit();
        }  else {
            // Générez un sel aléatoire
            $sel = bin2hex(random_bytes(32));

            // Hachez le mot de passe avec le sel
            $motDePasseHache = password_hash($motDePasse . $sel, PASSWORD_BCRYPT);

            // Préparez la requête d'insertion
            $insertQuery = $db->prepare("INSERT INTO utilisateurs (nomComplet, email, password, sel) VALUES (:nomComplet, :email, :password, :sel)");
            $insertQuery->bindParam(':nomComplet', $nomComplet, PDO::PARAM_STR);
            $insertQuery->bindParam(':email', $email, PDO::PARAM_STR);
            $insertQuery->bindParam(':password', $motDePasseHache, PDO::PARAM_STR);
            $insertQuery->bindParam(':sel', $sel, PDO::PARAM_STR);

            // Exécutez la requête d'insertion
            if ($insertQuery->execute()) {
                echo "Les données ont été enregistrées avec succès dans la base de données.";
                header("location : ../Connexion/Connexion.html");
            } else {
                $errorInfo = $insertQuery->errorInfo();
                echo "Erreur lors de l'insertion dans la base de données : " . $errorInfo[2];
            }
        }
    } else {
        echo "Tous les champs doivent être remplis.";
    }
}
?>
