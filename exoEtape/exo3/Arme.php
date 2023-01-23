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
    
    public function getDegats() {
        return $this->degats;
    }
}
?>

