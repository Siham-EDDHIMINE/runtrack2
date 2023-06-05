<!-- Création d'un formulaire HTML de type POST -->
<form method="POST">
    <!-- Champ pour saisir le nom d'utilisateur -->
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" id="username">
    <br>
    <!-- Champ pour saisir le mot de passe -->
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password">
    <br>
    <!-- Bouton pour soumettre le formulaire -->
    <input type="submit" value="Connexion">
</form>


<?php
    // Vérification si les champs username et password ont été envoyés
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Récupération des valeurs des champs username et password
        $username = $_POST['username'];
        $password = $_POST['password'];
        // Vérification si le username est "John" et le password est "Rambo"
        if ($username == "John" && $password == "Rambo") {
            // Affichage du message "C’est pas ma guerre"
            echo "C’est pas ma guerre";
        } else {
            // Affichage du message "Votre pire cauchemar"
            echo "Votre pire cauchemar";
        }
    }
?>
