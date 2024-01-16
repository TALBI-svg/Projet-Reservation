<?php
require 'Connexion_bd.php';

// Initialiser la variable pour stocker les messages d'erreur
$messageErreur = '';

// Fonction de hachage du mot de passe
function hashPassword($password, $salt) {
    return password_hash($password . $salt, PASSWORD_BCRYPT);
}

// Fonction de vérification du mot de passe
function verifyPassword($password, $hashedPassword, $salt) {
    return password_verify($password . $salt, $hashedPassword);
}

// Vérifier la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['email']) && isset($_POST['mot_de_passe'])) {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Vérifier si les champs email et mot_de_passe ne sont pas vides
    if (!empty($email) && !empty($mot_de_passe)) {
        // Récupérer le mot de passe haché et le sel de la base de données
        $query = "SELECT id, password, sel FROM utilisateurs WHERE email = :email";
        $statement = $pdo->prepare($query);
        $statement->bindParam(":email", $email);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        // Vérifier si l'utilisateur existe dans la base de données
        if ($user) {
            // Vérifier le mot de passe haché
            if (verifyPassword($mot_de_passe, $user["password"], $user["sel"])) {
                // Connexion réussie
                session_start();

                // Définir une variable de session pour l'utilisateur
                $_SESSION['user_id'] = $user['id'];

                // Définir la durée de vie du cookie de session à un mois (en secondes)
                $expire = time() + 30 * 24 * 60 * 60;
                setcookie(session_name(), session_id(), $expire, '/');

                // Rediriger l'utilisateur vers une page d'accueil
                $messageSuccess = "Connexion réussie avec succès.";
                $messageHash = hash('sha256', $messageSuccess);
                header("Location: /Grand_Projet_Réservation_Hôtel/header/accueil.php?messageSuccess=" . urlencode($messageHash));
            } else {
                // Mot de passe incorrect
                $messageErreur = "Email ou le mot de passe était incorrect.";
                header("Location: ../Connexion/ConnexionSite.php?msgErreur=" . urlencode($messageErreur));
            }
        } else {
            // Aucun compte associé à cette adresse e-mail
            $messageErreur = "Aucun compte associé à cette adresse e-mail. Veuillez vérifier vos informations.";
            header("Location: ../Connexion/ConnexionSite.php?msgErreur=" . urlencode($messageErreur));
        }
    }
}
?>
