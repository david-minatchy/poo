<?php
class Fantome {
    private $nom="fantome";
    private $couleur='blanc';
    private $vitesse=1;
    private $sante=10;

    public function __construct($nom,$couleur) {
        $this->setNom($nom);
        $this->setCouleur($couleur);
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }
    
    public function getGagnerPV() {
        return $this->sante;
    }
    
    public function setGagnerPV($sante) {
        $this->sante += $sante;
        return $this;
    }

    public function getPerdrePV() {
        return $this->sante;
    }

    public function setPerdrePV($sante) {
        $this->sante -= $sante;
        if($this->sante <= 0) {
            $this->sante = 0;
            echo  " désolé le fantome<br>".$this->nom." est mort";
        }
        return $this;
    }
    public function getVitesse() {
        return $this->vitesse;
    }

    public function setVitesse($vitesse) {
        $this->vitesse = $vitesse;
        return $this;
    }
}

$clyde = (new Fantome("Clyde", "jaune"))
    ->setPerdrePV(5)
    ->setPerdrePV(10);

$dolly = (new Fantome("Dolly", "rose"))
    ->setGagnerPV(10)
    ->setVitesse(2);


?>
