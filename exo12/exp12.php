<h1>Exercice 12</h1>


<p>
    A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
    (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
    respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
</p>

<?php


$userName = array( //An array with name and nationality
    "Mickael" => "ENG",
    "Virgile" => "ESP",
    "Marie-claire" => "DE",
    "Nicolas" => "FR",
    "Mickael" => "ENG"

);


foreach ($userName as $key => $value) { 
    switch ($value) { // if value equal a nationality use a determined greeting
        case 'ENG':
            echo "<br> Hello " . $key;
            break;
        case 'ESP':
            echo "<br> Holla " . $key;
            break;
        case 'DE':
            echo "<br> Guten Tag " . $key;
            break;
        case 'FR':
            echo "<br> Salut " . $key;
            break;
    }
}


// for ($i = 0; $i < count($userName); $i++) { // echo for each individual with a greeting depending on their nationality
//     for ($j = 0; $j < 2; $j++) {


//     }
// }

?>