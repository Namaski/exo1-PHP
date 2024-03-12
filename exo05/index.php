
<h1>Exercice 5</h1>


<p>
Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales
</p>

<?php


$francsToEur = 163.91354;

echo "Montant en franc = " . $francsToEur;
echo "<br>";

$ratio = 0.1524;

echo "Montant en euro : " . number_format((float)$francsToEur*$ratio, 2, '.', '');  // Outputs -> 105.00
