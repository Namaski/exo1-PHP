<h1>Exercice 15</h1>


<p>
    Créer une classe Personne (nom, prénom et date de naissance).
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
</p>

<?php

class Personne
// classe = l'ensemble des caractèristiques (attributs) avec des fonctions (méthodes) qui permettent de modifier l'objet, une classe est plus simplement un moule pour créer un objet
{
    // Properties or Fields

    //typer les variables
    // pouquoi public et les deux autres 
    // Public = pour avoir accès aux propriétés de la class en dehors de la classe
    // Private = avoir accès à la propriété uniquement dans la classe
    // Protected = avoir accès à la propriété pour le premier enfant et parent de la classe
    public string $_nom;
    public string $_prenom;
    public DateTIme $_dateNaissance;

    //Constructor
    public function __construct($nom, $prenom, string $dateNaissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance);
    }

    /*Getter & Setter (pas besoin pour cette exo, utile si private)
     Code ici */



    //Method

    public function calculerAge()
    {
        $currentDate = new DateTime("now");

        $dateNaissance = $this->_dateNaissance;

        $age = $currentDate->diff($dateNaissance);

        return $age->y;
    }

    public function getUserInfo()
    {
        $age = $this->calculerAge();
        return "Nom : " . $this->_nom . "<br> Prénom : " . $this->_prenom . " <br>Date de Naissance : " . $age . "<br>";
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19"); //objet = instance d'une classe
$p2 = new Personne("DUCHEMIN", "Aline", "1985-01-17");

echo "<p>" . $p1->getUserInfo() . "</p>";

echo "<p>" . $p2->getUserInfo() . "</p>";
