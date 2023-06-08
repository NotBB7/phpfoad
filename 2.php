<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2</title>
</head>
<body>

<?php
$variable1 = 0;
$variable2 = rand(1, 100); // Génère un nombre aléatoire entre 1 et 100

while ($variable1 <= 20) {
    $resultat = $variable1 * $variable2;
    echo "Le résultat de la multiplication de $variable1 par $variable2 est : $resultat <br>";
    $variable1++;
}
?>

    
</body>
</html>