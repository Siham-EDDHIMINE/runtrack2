Voici le code PHP que vous pouvez utiliser pour effectuer les tâches décrites dans votre message:

```php
<?php
    // Création d'un fichier index.php dans le répertoire runtrack2/jour01/job01
    $file = fopen("runtrack2/jour01/job01/index.php", "w");
    
    // Création d'une variable str avec la valeur "LaPlateforme"
    $str = "LaPlateforme";
    echo $str;
    
    // Création des variables str2 et str3
    $str2 = "Vive";
    $str3 = "!";
    
    // Affichage de "Vive LaPlateforme !"
    echo $str2 . " " . $str . $str3;
    
    // Création d'une variable val avec la valeur 6
    $val = 6;
    echo $val;
    
    // Ajout de 4 à la variable val
    $val += 4;
    echo $val;
    
    // Création d'une variable myBool avec la valeur true
    $myBool = true;
    echo $myBool;
    
    // Affectation de la valeur false à la variable myBool
    $myBool = false;
    echo $myBool;
?>