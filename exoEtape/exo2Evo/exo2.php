<?php

class Personnage {
    private $nom;
    private $pv;
    private $arme;
    const DEGATS_EPEE = 20;
    const DEGATS_DAGUE = 10;

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

    public function setPv($pv) {
        $this->pv = $pv;
    }

    public function getArme() {
        return $this->arme;
    }

    public function setArme($arme) {
        $this->arme = $arme;
    }

    public function changeArme($arme){
        $this->arme = $arme;
    }

    public function seFrapper(Personnage $perso) {
        if ($this->arme === 'epee') {
            $perso->setPv($perso->getPv() - self::DEGATS_EPEE);
        } else if ($this->arme === 'dague') {
            $perso->setPv($perso->getPv() - self::DEGATS_DAGUE);
        }
    }
    
    public function afficherEtat() {
        echo $this->nom . " a " . $this->pv . " PV " . "<br>";
    }
}


$perso1 = new Personnage("Harry");
$perso2 = new Personnage("Ron");



$perso1->changeArme("epee");
$perso1->seFrapper($perso2);
echo $perso1->getNom() . " attaque " . $perso2->getNom() . " avec " . $perso1->getArme() . "<br>";

$perso1->afficherEtat();
$perso2->afficherEtat();

$perso2->changeArme("dague");
$perso2->seFrapper($perso1);
echo $perso2->getNom() . " attaque " . $perso1->getNom() . " avec " . $perso2->getArme() . "<br>";

$perso1->afficherEtat();
$perso2->afficherEtat();

$perso1->changeArme("epee");
$perso1->seFrapper($perso2);
echo $perso1->getNom() . " attaque " . $perso2->getNom() . " avec " . $perso1->getArme() . "<br>";

$perso1->afficherEtat();
$perso2->afficherEtat();

?>

