<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Titre</title>

    <!-- Inclure jQuery depuis CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Inclure Bootstrap CSS depuis CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Inclure Bootstrap JS depuis CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Inclure Popper.js depuis CDN (nécessaire pour Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
</head>
<body>

<?php
function afficherMessageErreur($message) {
    echo '
        <div class="modal" id="erreurModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" >Erreur</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p style="color: red;">' . $message . '</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        >Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $("#erreurModal").modal();
            });
        </script>
    ';
}
?>
</body>
</html>
