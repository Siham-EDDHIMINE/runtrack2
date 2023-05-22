<?php
// Déclaration des variables
$bool = true; // boolean
$int = 42; // entier
$str = "Hello LaPlateforme!"; // chaîne de caractères
$float = 3.14; // nombre à virgule flottante

// Tableau associatif contenant les informations des variables
$variables = [
    ["type" => "boolean", "nom" => "bool", "valeur" => $bool],
    ["type" => "entier", "nom" => "int", "valeur" => $int],
    ["type" => "chaîne de caractères", "nom" => "str", "valeur" => $str],
    ["type" => "nombre à virgule flottante", "nom" => "float", "valeur" => $float]
];

// Génération du tableau HTML
echo "<table>";
echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";
echo "<tbody>";
foreach ($variables as $variable) {
    echo "<tr><td>" . $variable["type"] . "</td><td>" . $variable["nom"] . "</td><td>" . $variable["valeur"] . "</td></tr>";
}
echo "</tbody>";
echo "</table>";
?>