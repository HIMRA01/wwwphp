<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>





<?php
// Créer un tableau vide
$tableau = array();

// Ajouter les nombres de 1 à 5 au tableau
for ($i = 1; $i <= 5; $i++) {
    $tableau[] = $i;
}

// Supprimer le troisième élément (indice 2)
array_splice($tableau, 2, 1);

// Afficher le contenu final du tableau
print_r($tableau);




// Créer un tableau contenant plusieurs noms de pays
$pays = array("Allemagne", "France", "Italie", "Royaume-Uni", "Espagne");

// Vérifier si "France" est présent dans le tableau
if (in_array("France", $pays)) {
    // Trouvé : remplacer "France" par "Espagne"
    $index = array_search("France", $pays);
    $pays[$index] = "Espagne";
}

// Afficher le tableau modifié
print_r($pays);
?>

 <?php
function tirage($nombreNumeros, $nombreMax) {
    $tirage = array();

    // Vérifications pour éviter les valeurs incorrectes
    if ($nombreNumeros <= 0 || $nombreMax <= 0) {
        echo "Les paramètres doivent être supérieurs à zéro.";
        return;
    }

    if ($nombreNumeros > $nombreMax) {
        echo "Le nombre de numéros à tirer ne peut pas être supérieur au nombre maximum.";
        return;
    }

    // Effectuer le tirage
    while (count($tirage) < $nombreNumeros) {
        $numero = rand(1, $nombreMax);
        if (!in_array($numero, $tirage)) {
            $tirage[] = $numero;
        }
    }

    return $tirage;
}

// Exemple d'utilisation : tirer 5 numéros sur une grille de 50
$numerosTires = tirage(5, 50);
print_r($numerosTires);
?>

   




























</body>
</html>