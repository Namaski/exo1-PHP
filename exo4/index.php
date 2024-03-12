
<h1>Exercice 4</h1>


<p>
Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>

<?php


$phrase = "Engage le jeu que je le gagne";

$phraseNoSpace = strtolower(str_replace(" ","",$phrase)); // function strtolower to remove the capital letter and str_replace to remove whitespace

$reverse = strrev($phraseNoSpace); // function strrev to reverse the string

echo $reverse;
echo "<br>";
echo $phraseNoSpace;
echo "<br>";

if ($phraseNoSpace === $reverse ) { // check if palindrome
    echo "c'est un palindrome";
}
