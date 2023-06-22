<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=jour08;charset=utf8', 'azerty', '123456');

// Requête SQL pour récupérer les informations des étudiants qui ont moins de 18 ans
$requete = 'SELECT * FROM etudiants WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) < 18';

// Exécution de la requête
$resultat = $bdd->query($requete);

// Affichage du résultat dans un tableau HTML
echo '<table>';
echo '<tr>';
echo '<th>id</th>';
echo '<th>nom</th>';
echo '<th>prenom</th>';
echo '<th>naissance</th>';
echo '<th>sexe</th>';
echo '<th>email</th>';
echo '</tr>';

while ($donnees = $resultat->fetch())
{
    echo '<tr>';
    echo '<td>' . $donnees['id'] . '</td>';
    echo '<td>' . $donnees['nom'] . '</td>';
    echo '<td>' . $donnees['prenom'] . '</td>';
    echo '<td>' . $donnees['naissance'] . '</td>';
    echo '<td>' . $donnees['sexe'] . '</td>';
    echo '<td>' . $donnees['email'] . '</td>';
    echo '</tr>';
}

echo '</table>';

// Fermeture de la connexion à la base de données
$bdd = null;
?>
