<?php
    // Connexion à la base de données "jour08" en utilisant PHP et PDO
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=jour08;charset=utf8', 'azerty', '123456');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    // Récupération des informations de la table "salles" à l'aide d'une requête SQL
    $reponse = $bdd->query('SELECT nom, capacite FROM salles');

    // Création d'un tableau HTML pour afficher les résultats
    echo '<table>';
    
    // Création de l'en-tête du tableau avec les noms des champs
    echo '<thead><tr>';
    for ($i = 0; $i < $reponse->columnCount(); $i++) {
        $colonne = $reponse->getColumnMeta($i);
        echo '<th>' . $colonne['name'] . '</th>';
    }
    echo '</tr></thead>';

    // Affichage des données dans le corps du tableau
    echo '<tbody>';
    while ($donnees = $reponse->fetch()) {
        echo '<tr>';
        for ($i = 0; $i < $reponse->columnCount(); $i++) {
            echo '<td>' . $donnees[$i] . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';

    // Fermeture du tableau HTML
    echo '</table>';

    // Fermeture de la connexion à la base de données
    $reponse->closeCursor();
?>
