<!-- Création d'un formulaire HTML de type GET -->
<form method="GET">
    <!-- Champ pour saisir le nombre -->
    <label for="nombre">Nombre :</label>
    <input type="text" name="nombre" id="nombre">
    <br>
    <!-- Bouton pour soumettre le formulaire -->
    <input type="submit" value="Vérifier">
</form>


<?php
    // Vérification si le champ nombre a été envoyé
    if (isset($_GET['nombre'])) {
        // Récupération de la valeur du champ nombre
        $nombre = $_GET['nombre'];
        // Vérification si le nombre est pair
        if ($nombre % 2 == 0) {
            // Affichage du message "Nombre pair"
            echo "Nombre pair";
        } else {
            // Affichage du message "Nombre impair"
            echo "Nombre impair";
        }
    }
?>

