<h1>Exercice 11</h1>


<p>
    Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
    tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
    d’afficher le nombre de marques de voitures présentes dans le tableau.
</p>

<?php

$marquesVoitures = array("Peugeot", "Renault", "BMW", "Mercedes");


echo "Contenu du tableau des marques de voitures :<br>"; // show each elements on the array
foreach ($marquesVoitures as $marque) {
    echo "<li>" .$marque . "</li>";
}

$count = count($marquesVoitures); // count the elements on the array

echo " <p> il y a $count marques de voitures </p> "


?>