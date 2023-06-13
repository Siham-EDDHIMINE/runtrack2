<?php
// Vérification si le bouton "reset" a été cliqué
if (isset($_POST["reset"])) {
  // Réinitialisation du compteur de visites
  setcookie("nbvisites", 0, time() + 3600);
}

// Vérification si le cookie "nbvisites" existe
if (isset($_COOKIE["nbvisites"])) {
  // Si il existe, incrémentation de sa valeur
  $nbvisites = $_COOKIE["nbvisites"] + 1;
} else {
  // Sinon, initialisation de sa valeur à 1
  $nbvisites = 1;
}

// Mise à jour du cookie "nbvisites"
setcookie("nbvisites", $nbvisites, time() + 3600);

// Affichage du nombre de visites
echo "Nombre de visites : " . $nbvisites;
?>

<!-- Formulaire HTML pour réinitialiser le compteur -->
<form method="post">
  <input type="submit" name="reset" value="Réinitialiser">
</form>
