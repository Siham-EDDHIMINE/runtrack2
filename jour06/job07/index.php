<?php
// Fonction qui met en gras les mots commençant par une lettre majuscule
function gras($str) {
  // Découpage de la chaîne en mots
  $mots = explode(" ", $str);

  // Parcours de chaque mot
  foreach ($mots as $mot) {
    // Si le premier caractère du mot est une lettre majuscule
    if (ctype_upper($mot[0])) {
      // Affichage du mot en gras
      echo "<b>$mot</b> ";
    } else {
      // Sinon, affichage du mot normal
      echo "$mot ";
    }
  }
}

// Fonction qui décale les caractères d'une chaîne selon la méthode de César
function cesar($str, $decalage = 2) {
  // Parcours de chaque caractère de la chaîne
  for ($i = 0; $i < strlen($str); $i++) {
    // Récupération du code ASCII du caractère courant
    $code = ord($str[$i]);

    // Si le caractère est une lettre minuscule
    if ($code >= ord("a") && $code <= ord("z")) {
      // Décalage du code ASCII du caractère
      $code = ($code - ord("a") + $decalage) % 26 + ord("a");
    } else if ($code >= ord("A") && $code <= ord("Z")) {
      // Si le caractère est une lettre majuscule, décalage du code ASCII du caractère
      $code = ($code - ord("A") + $decalage) % 26 + ord("A");
    }

    // Remplacement du caractère courant par son équivalent décalé
    $str[$i] = chr($code);
  }

  // Affichage de la chaîne décalée
  echo $str;
}

// Fonction qui ajoute un "_" aux mots finissant par "me"
function plateforme($str) {
  // Découpage de la chaîne en mots
  $mots = explode(" ", $str);

  // Parcours de chaque mot
  foreach ($mots as $mot) {
    // Si le mot finit par "me"
    if (substr($mot, -2) == "me") {
      // Ajout d'un "_" à la fin du mot
      echo "$mot_ ";
    } else {
      // Sinon, affichage du mot normal
      echo "$mot ";
    }
  }
}

// Vérification si le formulaire a été soumis
if (isset($_POST["str"]) && isset($_POST["fonction"])) {
  // Récupération des valeurs des champs du formulaire
  $str = $_POST["str"];
  $fonction = $_POST["fonction"];

  // Appel de la fonction correspondant au choix de l'utilisateur
  if ($fonction == "gras") {
    gras($str);
  } else if ($fonction == "cesar") {
    cesar($str);
  } else if ($fonction == "plateforme") {
    plateforme($str);
  }
}
?>

<!-- Formulaire HTML -->
<form method="post">
  <label for="str">Chaîne :</label>
  <input type="text" name="str" id="str"><br>

  <label for="fonction">Fonction :</label>
  <select name="fonction" id="fonction">
    <option value="gras">Gras</option>
    <option value="cesar">César</option>
    <option value="plateforme">Plateforme</option>
  </select><br>

  <input type="submit" value="Valider">
</form>
