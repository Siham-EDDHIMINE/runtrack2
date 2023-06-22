<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=jour08;charset=utf8', 'azerty', '123456');

// Requête SQL pour récupérer le nom des salles et le nom de leur étage
$requete = 'SELECT salles.nom AS salle, etages.nom AS etage FROM salles INNER JOIN etages ON salles.etage_id = etages.id';

// Exécution de la requête
$resultat = $bdd->query($requete);

// Affichage du résultat dans un tableau HTML
echo '<table>';
echo '<tr>';
echo '<th>salle</th>';
echo '<th>etage</th>';
echo '</tr>';

while ($donnees = $resultat->fetch())
{
    echo '<tr>';
    echo '<td>' . $donnees['salle'] . '</td>';
    echo '<td>' . $donnees['etage'] . '</td>';
    echo '</tr>';
}

echo '</table>';

// Fermeture de la connexion à la base de données
$bdd = null;
?>
