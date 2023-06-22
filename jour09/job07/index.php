<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=jour08;charset=utf8', 'azerty', '123456');

// Requête SQL pour récupérer la superficie totale des étages dans une colonne nommée "superficie_totale"
$requete = 'SELECT SUM(superficie) AS superficie_totale FROM etages';

// Exécution de la requête
$resultat = $bdd->query($requete);

// Affichage du résultat dans un tableau HTML
echo '<table>';
echo '<tr>';
echo '<th>superficie_totale</th>';
echo '</tr>';

while ($donnees = $resultat->fetch())
{
    echo '<tr>';
    echo '<td>' . $donnees['superficie_totale'] . '</td>';
    echo '</tr>';
}

echo '</table>';

// Fermeture de la connexion à la base de données
$bdd = null;
?>
