<?php
// Vérification si le bouton "deco" a été cliqué
if (isset($_POST["deco"])) {
  // Suppression du cookie "prenom"
  setcookie("prenom", "", time() - 3600);
}

// Vérification si le formulaire de connexion a été soumis
if (isset($_POST["prenom"])) {
  // Récupération du prénom saisi
  $prenom = $_POST["prenom"];

  // Création du cookie "prenom"
  setcookie("prenom", $prenom, time() + 3600);
}

// Vérification si l'utilisateur est connecté
if (isset($_COOKIE["prenom"])) {
  // Récupération du prénom de l'utilisateur
  $prenom = $_COOKIE["prenom"];

  // Affichage du message de bienvenue
  echo "Bonjour $prenom !<br>";

  // Formulaire HTML pour se déconnecter
  echo '<form method="post">
    <input type="submit" name="deco" value="Déconnexion">
  </form>';
} else {
  // Formulaire HTML pour se connecter
  echo '<form method="post">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom"><br>
    <input type="submit" name="connexion" value="Connexion">
  </form>';
}
?>
