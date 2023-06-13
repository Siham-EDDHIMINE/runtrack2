<?php
// Démarrage de la session
session_start();

// Fonction qui vérifie si un joueur a gagné
function gagne($grille, $joueur) {
  // Vérification des lignes
  for ($i = 0; $i < 3; $i++) {
    if ($grille[$i][0] == $joueur && $grille[$i][1] == $joueur && $grille[$i][2] == $joueur) {
      return true;
    }
  }

  // Vérification des colonnes
  for ($i = 0; $i < 3; $i++) {
    if ($grille[0][$i] == $joueur && $grille[1][$i] == $joueur && $grille[2][$i] == $joueur) {
      return true;
    }
  }

  // Vérification des diagonales
  if ($grille[0][0] == $joueur && $grille[1][1] == $joueur && $grille[2][2] == $joueur) {
    return true;
  }
  if ($grille[0][2] == $joueur && $grille[1][1] == $joueur && $grille[2][0] == $joueur) {
    return true;
  }

  // Aucun gagnant
  return false;
}

// Fonction qui vérifie si la partie est terminée (match nul)
function termine($grille) {
  // Parcours de chaque case de la grille
  for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
      // Si une case est vide, la partie n'est pas terminée
      if ($grille[$i][$j] == "-") {
        return false;
      }
    }
  }

  // Toutes les cases sont remplies, la partie est terminée
  return true;
}

// Initialisation de la grille et du joueur courant
if (!isset($_SESSION["grille"])) {
  $_SESSION["grille"] = array(
    array("-", "-", "-"),
    array("-", "-", "-"),
    array("-", "-", "-")
  );
}
if (!isset($_SESSION["joueur"])) {
  $_SESSION["joueur"] = "X";
}

// Vérification si une case a été cliquée ou si le bouton "reset" a été cliqué
if (isset($_POST["case"]) || isset($_POST["reset"])) {
  // Si le bouton "reset" a été cliqué, réinitialisation de la partie
  if (isset($_POST["reset"])) {
    $_SESSION["grille"] = array(
      array("-", "-", "-"),
      array("-", "-", "-"),
      array("-", "-", "-")
    );
    $_SESSION["joueur"] = "X";
  } else {
    // Récupération des coordonnées de la case cliquée
    list($x, $y) = explode(",", $_POST["case"]);

    // Mise à jour de la grille
    $_SESSION["grille"][$x][$y] = $_SESSION["joueur"];

    // Vérification si le joueur courant a gagné
    if (gagne($_SESSION["grille"], $_SESSION["joueur"])) {
      echo $_SESSION["joueur"] . " a gagné !<br>";
      $_SESSION["grille"] = array(
        array("-", "-", "-"),
        array("-", "-", "-"),
        array("-", "-", "-")
      );
      $_SESSION["joueur"] = "X";
    } else if (termine($_SESSION["grille"])) {
      // Vérification si la partie est terminée (match nul)
      echo "Match nul<br>";
      $_SESSION["grille"] = array(
        array("-", "-", "-"),
        array("-", "-", "-"),
        array("-", "-", "-")
      );
      $_SESSION["joueur"] = "X";
    } else {
      // Changement de joueur
      if ($_SESSION["joueur"] == "X") {
        $_SESSION["joueur"] = "O";
      } else {
        $_SESSION["joueur"] = "X";
      }
    }
  }
}

// Affichage de la grille
echo '<table>';
for ($i = 0; $i < 3; $i++) {
  echo '<tr>';
  for ($j = 0; $j < 3; $j++) {
    echo '<td>';
    if ($_SESSION["grille"][$i][$j] == "-") {
      echo '<form method="post">
        <input type="hidden" name="case" value="' . $i . ',' . $j . '">
        <input type="submit" value="-">
      </form>';
    } else {
      echo $_SESSION["grille"][$i][$j];
    }
    echo '</td>';
  }
  echo '</tr>';
}
echo '</table>';

// Formulaire HTML pour réinitialiser la partie
echo '<form method="post">
  <input type="submit" name="reset" value="Réinitialiser la partie">
</form>';
?>

<!-- Styles CSS pour améliorer l'affichage de la grille -->
<style>
  table {
    border-collapse: collapse;
  }
  td {
    border: 1px solid black;
    width: 50px;
    height: 50px;
    text-align: center;
    vertical-align: middle;
  }
</style>
