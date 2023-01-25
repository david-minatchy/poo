<?php

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

?>