<h1>Exercice 9</h1>


<p>
    Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
    Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
    plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<?php

$sexe = "F";
$age = 35;

switch ($sexe) {
    case 'M': // if its a man

        if ($age > 20) {
            echo "M imposable";
        } else {
            echo "M non imposable";
        }
        break;

    case 'F': // if its a woman

        if ($age > 17 && $age < 36) {
            echo "F imposable";
        } else {
            echo "F non imposable";
        }
        break;
}



?>