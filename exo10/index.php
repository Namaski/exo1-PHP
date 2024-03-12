<h1>Exercice 10</h1>


<p>
    A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
    1 €.
</p>

<?php

$price = 200;
$cashIn = 129;
$cashOut = $price - $cashIn;

echo "Montant à payer : " . $price;
echo "<br>";
echo "Montant versé : " . $cashIn;
echo "<br>";
echo "La monnaie à rendre est : " . $cashOut;
echo "<br> <br>";

$billet10 = 0;
$billet5 = 0;
$piece2 = 0;


if ($cashOut > 0) { // check if there is money to give gack

    while ($cashOut >= 10) { // while change is superior or equal to 10, remove 10 and count one more banknote
        $cashOut -= 10;
        $billet10++;
    }
    
    while ($cashOut >= 5) {
        $cashOut -= 5;
        $billet5++;
    }
    
    while ($cashOut >= 2) {
        $cashOut -= 2;
        $piece2++;
    }
    
    // while ($cashOut >= 1) {
    //     $cashOut -= 1;
    //     $piece1++;
    // }
}

echo "Rendue de monnaie : <br>";
echo $billet10 . " billet de 10 - " . $billet5 . " billet de 5 - " . $piece2 . " pièce de 2 - " . $cashOut . "  pièce de 1";




?>