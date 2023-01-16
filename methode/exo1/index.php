<?php

class Calculatrice 
{
    private $resultat;
      
    public function addition($chiffre1, $chiffre2) {
        $somme = $chiffre1 + $chiffre2;
        $this->setResultat($somme);
    }
      
    public function getResultat() {
        return $this->resultat;
    }
      
    public function setResultat($resultat) {
        $this->resultat = $resultat;
      } 
}
      $calculatrice = new Calculatrice();
      $calculatrice->addition(5, 10);
      echo $calculatrice->getResultat();
  
?>
