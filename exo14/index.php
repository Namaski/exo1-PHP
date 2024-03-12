<h1>Exercice 14</h1>


<p>
    Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours)
</p>

<?php

function calculAgeMethode1($birthDate) // pas pertinent car suppose que chaque mois = 30 jours, et il faut actualiser $currentDate à chaques jours
{

    $currentDate = array(11, 03, 2024);

    $year = $currentDate[2] - $birthDate[2];

    $month = 0;

    $day = 0;

    if ($birthDate[1] < $currentDate[1]) {

        $month = $currentDate[1] - $birthDate[1];


        $day = $currentDate[0] >= $birthDate[0] ? $currentDate[0] - $birthDate[0] : (30 - $birthDate[0]) + $currentDate[0];
    } elseif ($birthDate[1] === $currentDate[1]) {

        $month = 0;

        $day = $currentDate[0] >= $birthDate[0] ? $currentDate[0] - $birthDate[0] : (30 - $birthDate[0]) + $currentDate[0];

        if ($currentDate[0] < $birthDate[0]) {
            $year--;
        }
    } else {

        $year--;
        $month = (12 - $birthDate[1]) + $currentDate[1];
        $day = (30 - $birthDate[0]) + $currentDate[0];
    }

    echo " <p> tu as $year ans, $month mois et $day jours </p>";
}

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
}

echo "<h1>Méthode 1</h1>";

calculAgeMethode1([05, 01, 2000]);

echo "<h1>Méthode 2</h1>";


$date = '2023-01-12';
calculAgeMethode2($date);


?>