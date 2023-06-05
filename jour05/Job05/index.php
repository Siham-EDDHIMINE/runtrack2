<?php
    // Vérification si le champ style a été envoyé
    if (isset($_POST['style'])) {
        // Récupération de la valeur du champ style
        $style = $_POST['style'];
        // Inclusion du fichier CSS correspondant au style sélectionné
        echo "<link rel='stylesheet' href='$style.css'>";
    }
?>
