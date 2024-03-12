<h1>Exercice 8</h1>


<p>
    Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
    forme :
</p>

<?php


$a = 0;


function afficherTableMultiplicationWhile($chiffre) // with while method
{
    echo "<br>Table des " . $chiffre .   " avec while() : <br>";
    $a = 0;
    while ($a <= 10) {
        echo " " . $a . " * " . $chiffre . " = " . $chiffre * $a  . " <br>";
        $a++;
    }
}

function afficherTableMultiplicationFor($chiffre) // multiplication table with for method
{
    echo "Table des " . $chiffre .   " avec la boucle for() : <br>";
    for ($i = 0; $i <= 10; $i++) {
        echo " " . $i . " * " . $chiffre . " = " . $chiffre * $i  . " <br>";
    }
}

afficherTableMultiplicationWhile(5);
echo "<br>";
afficherTableMultiplicationFor(7);

?>