<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=jour08;charset=utf8', 'azerty', '123456');

// Requête SQL pour récupérer l'ensemble des informations des salles en les triant par capacité croissante
$requete = 'SELECT * FROM salles ORDER BY capacite ASC';

// Exécution de la requête
$resultat = $bdd->query($requete);

// Affichage du résultat dans un tableau HTML
echo '<table>';
echo '<tr>';
echo '<th>id</th>';
echo '<th>nom</th>';
echo '<th>capacite</th>';
echo '</tr>';

while ($donnees = $resultat->fetch())
{
    echo '<tr>';
    echo '<td>' . $donnees['id'] . '</td>';
    echo '<td>' . $donnees['nom'] . '</td>';
    echo '<td>' . $donnees['capacite'] . '</td>';
    echo '</tr>';
}

echo '</table>';

// Fermeture de la connexion à la base de données
$bdd = null;
?>
