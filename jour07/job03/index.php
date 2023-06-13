<?php
// Démarrage de la session
session_start();

// Vérification si le bouton "reset" a été cliqué
if (isset($_POST["reset"])) {
  // Réinitialisation de la liste des prénoms
  $_SESSION["prenoms"] = array();
}

// Vérification si le formulaire a été soumis
if (isset($_POST["prenom"])) {
  // Récupération du prénom saisi
  $prenom = $_POST["prenom"];

  // Ajout du prénom à la liste des prénoms
  $_SESSION["prenoms"][] = $prenom;
}

// Affichage de la liste des prénoms
echo "Liste des prénoms :<br>";
if (isset($_SESSION["prenoms"])) {
  foreach ($_SESSION["prenoms"] as $prenom) {
    echo "- $prenom<br>";
  }
}
?>

<!-- Formulaire HTML pour saisir un prénom -->
<form method="post">
  <label for="prenom">Prénom :</label>
  <input type="text" name="prenom" id="prenom"><br>
  <input type="submit" value="Ajouter">
</form>

<!-- Formulaire HTML pour réinitialiser la liste des prénoms -->
<form method="post">
  <input type="submit" name="reset" value="Réinitialiser">
</form>
