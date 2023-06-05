?php
    // Création d'un tableau HTML
    echo "<table>";
    // Ajout de l'en-tête du tableau avec les titres des colonnes
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";
    // Parcours des arguments GET et de leurs valeurs associées
    foreach ($_GET as $argument => $valeur) {
        // Ajout d'une ligne dans le tableau pour chaque argument GET
        echo "<tr><td>$argument</td><td>$valeur</td></tr>";
    }
    // Fermeture du tableau HTML
    echo "</table>";
?>