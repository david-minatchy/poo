<?php

abstract class Figure {
    abstract public function zone();
}


class Rectangle extends Figure {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function zone() {
        return $this->longueur * $this->largeur;
    }
}


class Cercle extends figure {
    private $diametre;

    public function __construct($diametre) {
        $this->diametre = $diametre;
    }

    public function zone() {
        return 3.14 * pow($this->diametre, 2);
    }
}


$r = new Rectangle(2, 3);
echo $r->zone(); 

echo "<br>";

$c = new Cercle(2);
echo $c->zone(); 



?>