<?php

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

?>