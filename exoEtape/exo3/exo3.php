<?php

spl_autoload_register('monChargeur');

    function monChargeur($Arme)
    {
        require $Arme.'.php';
    }

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
            $this->arme = new Arme("sort", self::DEGATS_SORT);
            $this->arme = new Arme("baton", self::DEGATS_BATON);
        }
    
        public function getPseudo() {
            return $this->pseudo;
        }
    
        public function getVie() {
            return $this->vie;
        }
    
        public function setVie($vie) {
            $this->vie = $vie;
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
                case 'sort':
                    $this->arme = new Arme("sort", self::DEGATS_SORT);
                    break;
            } 
        }
        
        public function boirePotionDeVie($quantite) {
            $this->vie += $quantite;
            if ($this->vie > 100) {
                $this->vie = 100;
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
            echo "Pseudo: " . $this->pseudo . "<br>";
            echo "Niveau: " . $this->niveau . "<br>";
            echo "Compétence: " . $this->competence . "<br>";
            echo "Vie: " . $this->vie . "<br>";
            echo "Mana: " . $this->mana . "<br>";
            echo "Arme : ". $this->arme->getNom() ."<br>";
        }


        public function getArme() {
            return $this->arme;
        }
    }
        class Magicien extends Personnage {
         
                private $mana;
                public function __construct($pseudo) {
                    parent::__construct($pseudo);
                    $this->mana = 100;
                }
                public function lancerSort($nomSort) {
                    if($this->mana >= 20){
                        $this->mana -= 20;
                        echo $this->getPseudo(). " lance le sort " . $nomSort . "<br>";
                    } else {
                        echo $this->getPseudo()." n'a pas assez de mana pour lancer ce sort.";
                    }
                }
                public function getMana(){
                    return $this->mana;
                }
                public function setMana($mana){
                    $this->mana = $mana;
                }
            }
            
        
        
        class Guerrier extends Personnage {
            private $surCheval;
          
            public function __construct($pseudo) {
                parent::__construct($pseudo);
                $this->arme = new Arme("epee", 20);
                $this->surCheval = false;
            }
          
            public function getSurCheval() {
                return $this->surCheval;
            }
        
            public function setSurCheval($surCheval) {
                $this->surCheval = $surCheval;
            }

            public function monterCheval() {
                $this->setSurCheval(true);
            }
            public function descendreCheval(){
                $this->setSurCheval(false);
            }
        }
        
        $guerrier = new Guerrier('bob');
        $guerrier->monterCheval();
        if($guerrier->getSurCheval()){
            echo $guerrier->getPseudo().' est monté sur son cheval<br>';
        
    }
    
    $joueur1 = new Guerrier("Bob");
    $joueur2 = new Magicien("toto");
    
    $joueur1->changerArme("epee");
    $joueur2->changerArme("baton");
    
    $joueur1->attaquer($joueur2);
    echo "<br>Etat de ".$joueur2->getPseudo()." : <br>";
    $joueur2->afficherEtat()."<br>";

    $joueur2->lancerSort("Boule de feu");
    echo "Etat de ".$joueur1->getPseudo()." : <br>";
    $joueur1->afficherEtat()."<br>";

    $joueur1->attaquer($joueur2);
    echo "<br>Etat de ".$joueur2->getPseudo()." : <br>";
    $joueur2->afficherEtat()."<br>";
?>

   
