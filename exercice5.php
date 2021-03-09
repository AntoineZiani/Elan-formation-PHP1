<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 5</h1>
    <p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
       Attention, la valeur générée devra être arrondie à 2 décimales.</p>

    <h2>Résultat</h2>

    <?php

        $franc = 100;
        $conversion = 6.55957;

        $calcule = $franc/$conversion;
        echo "valeur en euro : ". round($calcule, 2). " euros";
        var_dump($conversion)

    ?>

</body>
</html>