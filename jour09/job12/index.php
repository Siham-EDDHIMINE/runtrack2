<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=jour08;charset=utf8', 'azerty', '123456');

// Requête SQL pour récupérer le prénom, le nom et la date de naissance des étudiants qui sont nés entre 1998 et 2018
$requete = 'SELECT prenom, nom, naissance FROM etudiants WHERE YEAR(naissance) BETWEEN 1998 AND 2018';

// Exécution de la requête
$resultat = $bdd->query($requete);

// Affichage du résultat dans un tableau HTML
echo '<table>';
echo '<tr>';
echo '<th>prenom</th>';
echo '<th>nom</th>';
echo '<th>naissance</th>';
echo '</tr>';

while ($donnees = $resultat->fetch())
{
    echo '<tr>';
    echo '<td>' . $donnees['prenom'] . '</td>';
    echo '<td>' . $donnees['nom'] . '</td>';
    echo '<td>' . $donnees['naissance'] . '</td>';
    echo '</tr>';
}

echo '</table>';

// Fermeture de la connexion à la base de données
$bdd = null;
?>
