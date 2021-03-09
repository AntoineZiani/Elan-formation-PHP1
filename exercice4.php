<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 4</h1>
    <p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

    <h2>Résultat</h2>

    <?php

        $pali = "Engage le jeu que je le gagne";
        Palindrome($pali);
        function Palindrome($pali) {
            // suppression des espaces     
            $palin = strtolower(str_replace(' ', '', $pali));
            if (strrev($palin) == $palin){
                echo "La phrase « ".$pali. "» est palindrome"; 
            } else{
                echo "La phrase « ".$pali. "» n'est pas un palindrome"; 
            }
        }
    

    ?>

</body>
</html>