<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Erreur</title>
    <!-- CDN de SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
    if (isset($_GET['erreur']) && $_GET['erreur'] === "chambre-non-selectionner") {
        $erreur_message = htmlspecialchars($_GET['erreur']);
        echo "
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: 'Aucune chambre n\'est sélectionnée',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = './chambre/chambre.php';
                    }
                });
            </script>
        ";
    }
    ?>
</body>
</html>
