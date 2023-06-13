<?php
// Déclaration de la fonction calcule
function calcule($nombre1, $operation, $nombre2) {
  // Vérification du type d'opération
  if ($operation == "+") {
    // Si l'opération est une addition, retourne la somme des deux nombres
    return $nombre1 + $nombre2;
  } else if ($operation == "-") {
    // Si l'opération est une soustraction, retourne la différence des deux nombres
    return $nombre1 - $nombre2;
  } else if ($operation == "*") {
    // Si l'opération est une multiplication, retourne le produit des deux nombres
    return $nombre1 * $nombre2;
  } else if ($operation == "/") {
    // Si l'opération est une division, retourne le quotient des deux nombres
    return $nombre1 / $nombre2;
  } else if ($operation == "%") {
    // Si l'opération est un modulo, retourne le reste de la division des deux nombres
    return $nombre1 % $nombre2;
  } else {
    // Si l'opération n'est pas reconnue, retourne null
    return null;
  }
}

// Appel de la fonction calcule avec les paramètres 5, "+", et 3
$resultat = calcule(5, "+", 3); // Retourne 8

// Affichage du résultat de l'opération
echo $resultat;
?>
