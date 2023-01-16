<?php

class Personnage {
    private $nom;
    private $pointDeVie;
    private $pointExperience;
    
        public function __construct($nom, $pointDeVie) {
            $this->nom = $nom;
            $this->pointDeVie = $pointDeVie;
            $this->pointExperience= 0;
        }
        
        public function getNom() {
            return $this->nom;
        }
        public function setNom($nom) {
            $this->nom = $nom;
        }
    
        public function getPointDeVie() {
            return $this->pointDeVie;
        }
        public function setPointDeVie($pointDeVie) {
            $this->pointDeVie = $pointDeVie;
        }
    
        public function getPointExperience() {
            return $this->experiencePoints;
        }
        public function setPointExperience($pontExperience) {
            $this->pointExperience = $pointExperience;
        }
    
        public function attaque($cible) {
            $cible->pointDeVie -= 10;
            $this->pointExperience++;
        }
        public function etat() {
            echo "<br>Nom :". $this->nom."<br>Point de vie:". $this->pointDeVie."<br>point d'experience :". $this->pointExperience;
        }
    }
?>