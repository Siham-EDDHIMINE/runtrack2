<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'azerty', '123456');

// Requête SQL pour récupérer la somme des capacités des salles dans une colonne nommée "capacite_totale"
$requete = 'SELECT SUM(capacite) AS capacite_totale FROM salles';

// Exécution de la requête
$resultat = $bdd->query($requete);

// Affichage du résultat dans un tableau HTML
echo '<table>';
echo '<tr>';
echo '<th>capacite_totale</th>';
echo '</tr>';

while ($donnees = $resultat->fetch())
{
    echo '<tr>';
    echo '<td>' . $donnees['capacite_totale'] . '</td>';
    echo '</tr>';
}

echo '</table>';

// Fermeture de la connexion à la base de données
$bdd = null;
?>
