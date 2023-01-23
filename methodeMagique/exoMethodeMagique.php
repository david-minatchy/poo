<?php

class Ballon {
    private $couleur;
    private $nom;

    public function __construct($couleur, $nom) {
        $this->couleur = $couleur;
        $this->nom = $nom;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function __tostring() {
        return "Le ballon s'appelle " . $this->nom . " et est de couleur " . $this->couleur;
    }

    public function changeCouleur($couleur) {
        $this->couleur = $couleur;
    }
}



$ballonBob = new Ballon("rouge", "Bob");
echo "Etat : " . $ballonBob . "<br>";

$ballonToby = new Ballon("bleu", "Toby");
echo "Etat  : " . $ballonToby . "<br>";

$ballonBob->changeCouleur("vert");
echo "Etat  : " . $ballonBob;


?>