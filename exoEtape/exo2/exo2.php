<?php

class Personnage {
    private $nom;
    private $pv;

    public function __construct($nom) {
        $this->nom = $nom;
        $this->pv = 100;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPv() {
        return $this->pv;
    }

    public function seFrapper(Personnage $perso) {
        $perso->pv -= 15;
    }
}


$perso1 = new Personnage("Harry");
$perso2 = new Personnage("Ron");


echo $perso1->getNom() . " a " . $perso1->getPv() . " PV <br>";
echo $perso2->getNom() . " a " . $perso2->getPv() . " PV <br>";


$perso1->seFrapper($perso2);
echo $perso1->getNom() . " frappe " . $perso2->getNom() . "<br>";


echo $perso1->getNom() . " a " . $perso1->getPv() . " PV <br>";
echo $perso2->getNom() . " a " . $perso2->getPv() . " PV <br>";

$perso2->seFrapper($perso1);
echo $perso2->getNom() . " frappe " . $perso1->getNom() . "<br>";


echo $perso1->getNom() . " a " . $perso1->getPv() . " PV <br>";
echo $perso2->getNom() . " a " . $perso2->getPv() . " PV ";


?>