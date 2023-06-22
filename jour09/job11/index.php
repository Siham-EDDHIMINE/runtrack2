<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=jour08;charset=utf8', 'azerty', '123456');

// Requête SQL pour récupérer la capacité moyenne des salles
$requete = 'SELECT AVG(capacite) AS capacite_moyenne FROM salles';

// Exécution de la requête
$resultat = $bdd->query($requete);

// Affichage du résultat dans un tableau HTML
echo '<table>';
echo '<tr>';
echo '<th>capacite_moyenne</th>';
echo '</tr>';

while ($donnees = $resultat->fetch())
{
    echo '<tr>';
    echo '<td>' . $donnees['capacite_moyenne'] . '</td>';
    echo '</tr>';
}

echo '</table>';

// Fermeture de la connexion à la base de données
$bdd = null;
?>
