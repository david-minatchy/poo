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

    public function getInfos() {
        return "Le ballon s'appelle " . $this->nom . " et est de couleur " . $this->couleur;
    }

    public function changeCouleur($couleur) {
        $this->couleur = $couleur;
    }
}



$ballonBob = new Ballon("rouge", "Bob");
echo "Etat : " . $ballonBob->getInfos() . "<br>";


$ballonToby = new Ballon("bleu", "Toby");
echo "Etat  : " . $ballonToby->getInfos() . "<br>";


$ballonBob->changeCouleur("vert");
echo "Etat  : " . $ballonBob->getInfos();


?>