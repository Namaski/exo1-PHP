
<h1>Exercice 7</h1>


<p>
Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
<br>
Poussin : entre 6 et 7 ans
<br>
Pupille : entre 8 et 9 ans
<br>
Minime : entre 10 et 11 ans
<br>
Cadet : à partir de 12 ans
<br>
Si la catégorie n’est pas gérée, merci de le préciser.
</p>

<?php

$ageEnfant = 2;

if ($ageEnfant >= 12) {
    echo "Cadet";
} elseif ($ageEnfant >= 10 and $ageEnfant <= 11 ) {
    echo "Minime";
} elseif ($ageEnfant >= 8 and $ageEnfant <= 9) {
    echo "Pupille";
} elseif ($ageEnfant >= 6 and $ageEnfant <= 7) {
    echo "Poussin";
} else {
    echo "Pas de catégorie";
}