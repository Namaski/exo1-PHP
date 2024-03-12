<h1>Exercice 3</h1>



<p>
A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
</p>

<?php


$phrase = "Notre formation DL commence aujourd'hui <br> ";
echo $phrase; 
echo str_replace("aujourd'hui","demain", $phrase); // fonction str_replace to replace a string by another in a variable