<?php

class Parallelogramme {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    public function getLongueur() {
        return $this->longueur;
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    public function getLargeur() {
        return $this->largeur;
    }

    public function getPerimetre() {
        return 2 * ($this->longueur + $this->largeur);
    }

    public function getAire() {
        return $this->longueur * $this->largeur;
    }
}

?>