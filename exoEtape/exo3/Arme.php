<?php

class Arme {
    private $nom;
    private $degats;
    
    public function __construct($nom, $degats) {
        $this->nom = $nom;
        $this->degats = $degats;
    }
    
    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getDegats() {
        return $this->degats;
    }

    public function setDegats($degats){
        $this->degats = $degats;
}
}
?>

