<?php
// Démarrage de la session
session_start();

// Vérification si le bouton "reset" a été cliqué
if (isset($_POST["reset"])) {
  // Réinitialisation du compteur de visites
  $_SESSION["nbvisites"] = 0;
}

// Vérification si la variable de session "nbvisites" existe
if (isset($_SESSION["nbvisites"])) {
  // Si elle existe, incrémentation de sa valeur
  $_SESSION["nbvisites"]++;
} else {
  // Sinon, initialisation de sa valeur à 1
  $_SESSION["nbvisites"] = 1;
}

// Affichage du nombre de visites
echo "Nombre de visites : " . $_SESSION["nbvisites"];
?>

<!-- Formulaire HTML pour réinitialiser le compteur -->
<form method="post">
  <input type="submit" name="reset" value="Réinitialiser">
</form>
