<h1>Exercice 14</h1>


<p>
    Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours)
</p>

<?php



function calculAgeMethode2($date)
{

    $currentDate = new DateTime('now');
    // $birthDate = new DateTime("$year-$month-$day");
    $birthDate = new DateTime($date);

    //var_dump($currentDate);

    //var_dump($birthDate);

    //die;

    $age = $currentDate->diff($birthDate); // Calcul de la différence entre les dates

    //var_dump($age);
    
    echo "tu as " . $age->y . " ans, " . $age->m . " mois et " . $age->d . " jours ";
};


$date = '2023-01-12';
calculAgeMethode2($date);


?>