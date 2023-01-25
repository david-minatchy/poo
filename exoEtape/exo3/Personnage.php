<?php

class Personnage {
        private $pseudo;
        private $niveau;
        private $competence;
        private $vie;
        private $mana;
        private $arme;
        
        const DEGATS_EPEE = 10;
        const DEGATS_BATON = 5;
        const DEGATS_SORT = 20;
        
        public function __construct($pseudo) {
            $this->pseudo = $pseudo;
            $this->niveau = 1;
            $this->competence = 1;
            $this->vie = 100;
            $this->mana = 100;
            $this->arme = new Arme("epee", self::DEGATS_EPEE);
            $this->arme = new Arme("baton", self::DEGATS_BATON);
        }
    
        public function getPseudo() {
            return $this->pseudo;
        }
        
        public function setPseudo($pseudo) {
            $this->pseudo = $pseudo;
        }

        public function getVie() {
            return $this->vie;
        }
    
        public function setVie($vie) {
            $this->vie = $vie;
        }
        
        public function getNiveau() {
            return $this->niveau;
        }
    
        public function setNiveau($niveau) {
            $this->niveau = $niveau;
        }

        public function getCompetence() {
            return $this->competence;
        }
    
        public function setCompetence($competence) {
            $this->competence = $competence;
        }

        public function getMana() {
            return $this->mana;
        }
    
        public function setMana($mana) {
            $this->mana = $mana;
        }

        public function getArme() {
            return $this->arme;
        }

        public function setArme($arme) {
            $this->arme = $arme;
        }
    
        public function changerArme($arme) {
            switch ($arme) {
                case 'epee':
                    $this->arme = new Arme("epee", self::DEGATS_EPEE);
                    break;
                case 'baton':
                    $this->arme = new Arme("baton", self::DEGATS_BATON);
                    break;
        }
        }
        
        public function boirePotionDeVie($quantite) {
            $this->setVie($this->vie + $quantite);
            if ($this->vie > 100) {
                $this->setVie(100);
            }
        }
    
        public function attaquer($personnage_cible) {
            if(!$personnage_cible->estVivant()){
                echo "impossible d'attaquer un personnage mort";
                return;
            }
            $personnage_cible->setVie($personnage_cible->getVie() - $this->arme->getDegats());
        }
        
        public function estVivant() {
            return $this->vie > 0;
        }
    
        public function afficherEtat() {
            echo "Pseudo: " . $this->getPseudo() . "<br>";
            echo "Niveau: " . $this->getNiveau() . "<br>";
            echo "Compétence: " . $this->getCompetence() . "<br>";
            echo "Vie: " . $this->getVie() . "<br>";
            echo "Mana: " . $this->getMana() . "<br>";
            echo "Arme : ". $this->getArme()->getNom() ."<br>";
        }


        
    }

?>
