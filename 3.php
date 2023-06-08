<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex3</title>
</head>
<body>

<?php
$variable1 = 100; // Initialisation de la première variable à 100
$variable2 = rand(1, 100); // Initialisation de la deuxième variable avec un nombre aléatoire entre 1 et 100 inclus

while ($variable1 > 10) { // Tant que la première variable n'est pas inférieure ou égale à 10
    $resultat = $variable1 * $variable2; // Multiplication de la première variable par la deuxième variable et stockage du résultat
    echo $resultat . "<br>"; // Affichage du résultat
    $variable1--; // Décrémentation de la première variable
}
?>

    
</body>
</html>