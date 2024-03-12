
<h1>Exercice 6</h1>


<p>
Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<?php


//NB
$nbArticles = 5;

echo "Nombres d'articles : ". $nbArticles;
echo "<br>";

//HT
$prixHT = 9.99;

echo "Prix des articles : " . $prixHT;
echo "<br>";

//tTVA
$tauxTVA = 0.2;

echo "Taux de TVA : ". $tauxTVA;
echo "<br>";

//TTC
$totalTTC = ($prixHT*$nbArticles*$tauxTVA) + $nbArticles*$prixHT;

echo "Le total est de : ". $totalTTC;