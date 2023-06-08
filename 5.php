<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex5</title>
</head>
<body>

<?php
// Parcourir les nombres de 1 à 15
for ($i = 1; $i <= 15; $i++) {
    // Vérifier si on est arrivé à 15
    if ($i == 15) {
        // Afficher "Nous sommes arrivés!" pour le 15ème message
        echo "Nous sommes arrivés!";
    } else {
        // Afficher "On y arrive presque" pour les autres nombres
        echo "On y arrive presque";
    }
    echo "<br>";
}
?>

    
</body>
</html>