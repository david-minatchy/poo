<?php
class Voiture {
    private $nom;
    private $anneeImmatriculation;
  
    public function setNom($nom) {
      $this->nom = $nom;
    }
  
    public function getNom() {
      return $this->nom;
    }
  
    public function setAnneeImmatriculation($anneeImmatriculation) {
      $this->anneeImmatriculation = $anneeImmatriculation;
    }
  
    public function getAnneeImmatriculation() {
      return $this->anneeImmatriculation;
    }
  
    public function getAge() {
      $anneeActuelle = date("Y");
      return $anneeActuelle - $this->anneeImmatriculation;
    }
}

$jaguar = new Voiture();
$jaguar->setNom("Jaguar");
$jaguar->setAnneeImmatriculation(1970);
echo "L'âge de la" .$jaguar->getNom()." est de " . $jaguar->getAge() . " ans.";

$peugeot = new Voiture();
$peugeot->setNom("Peugeot 308");
$peugeot->setAnneeImmatriculation(2010);
echo "L'âge de la".$peugeot->getNom()." est de " . $peugeot->getAge() . " ans.";

?>


