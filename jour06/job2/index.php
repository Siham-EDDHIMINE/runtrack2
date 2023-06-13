<?php
// Déclaration de la fonction bonjour
function bonjour($jour) {
  // Vérification de la valeur du paramètre $jour
  if ($jour == true) {
    // Si $jour est true, affichage de "Bonjour"
    echo "Bonjour";
  } else {
    // Si $jour est false, affichage de "Bonsoir"
    echo "Bonsoir";
  }
}

// Appel de la fonction bonjour avec le paramètre true
bonjour(true); // Affiche "Bonjour"

// Appel de la fonction bonjour avec le paramètre false
bonjour(false); // Affiche "Bonsoir"
?>
