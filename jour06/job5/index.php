<?php
// Déclaration de la fonction occurrences
function occurrences($str, $char) {
  // Initialisation du compteur d'occurrences à 0
  $compteur = 0;

  // Parcours de chaque caractère de la chaîne $str
  for ($i = 0; $i < strlen($str); $i++) {
    // Si le caractère courant est égal à $char
    if ($str[$i] == $char) {
      // Incrémentation du compteur d'occurrences
      $compteur++;
    }
  }

  // Retourne le nombre d'occurrences de $char dans $str
  return $compteur;
}

// Appel de la fonction occurrences avec les paramètres "Bonjour" et "o"
$nombreOccurrences = occurrences("Bonjour", "o"); // Retourne 2

// Affichage du nombre d'occurrences de "o" dans "Bonjour"
echo $nombreOccurrences;
?>
