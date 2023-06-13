<?php
// Déclaration de la fonction leetSpeak
function leetSpeak($str) {
  // Tableau de correspondance entre les lettres et leur équivalent en leet speak
  $leet = array(
    "A" => "4",
    "B" => "8",
    "E" => "3",
    "G" => "6",
    "L" => "1",
    "S" => "5",
    "T" => "7"
  );

  // Parcours de chaque caractère de la chaîne $str
  for ($i = 0; $i < strlen($str); $i++) {
    // Récupération du caractère courant en majuscule
    $char = strtoupper($str[$i]);

    // Si le caractère courant est présent dans le tableau de correspondance
    if (isset($leet[$char])) {
      // Remplacement du caractère courant par son équivalent en leet speak
      $str[$i] = $leet[$char];
    }
  }

  // Retourne la chaîne $str convertie en leet speak
  return $str;
}

// Appel de la fonction leetSpeak avec le paramètre "Bonjour LaPlateforme!"
$messageLeet = leetSpeak("Bonjour LaPlateforme!"); // Retourne "8onjour L4Pl473form3!"

// Affichage du message converti en leet speak
echo $messageLeet;
?>
