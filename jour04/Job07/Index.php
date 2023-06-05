<!-- Création d'un formulaire HTML avec deux champs input de type text ayant comme nom largeur et hauteur -->
<form method="POST">
    <!-- Champ pour saisir la largeur -->
    <label for="largeur">Largeur :</label>
    <input type="text" name="largeur" id="largeur">
    <br>
    <!-- Champ pour saisir la hauteur -->
    <label for="hauteur">Hauteur :</label>
    <input type="text" name="hauteur" id="hauteur">
    <br>
    <!-- Bouton pour soumettre le formulaire -->
    <input type="submit" value="Dessiner">
</form>


<?php
    // Vérification si les champs largeur et hauteur ont été envoyés
    if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
        // Récupération des valeurs des champs largeur et hauteur
        $largeur = $_POST['largeur'];
        $hauteur = $_POST['hauteur'];
        // Dessin du toit
        for ($i = 0; $i < $hauteur; $i++) {
            for ($j = 0; $j < $largeur; $j++) {
                if ($j == ($largeur / 2) - $i || $j == ($largeur / 2) + $i) {
                    echo "*";
                } else {
                    echo " ";
                }
            }
            echo "<br>";
        }
        // Dessin des murs
        for ($i = 0; $i < $hauteur; $i++) {
            for ($j = 0; $j < $largeur; $j++) {
                if ($j == 0 || $j == $largeur - 1) {
                    echo "*";
                } else {
                    echo " ";
                }
            }
            echo "<br>";
        }
    }
?>
