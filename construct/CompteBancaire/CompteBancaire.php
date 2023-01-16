<?php
class CompteBancaire {
    private $solde;
    private $nom;
    public function __construct($nom) {
        $this->solde = 0;
        $this->nom = $nom;
    }
    public function getSolde() {
        return $this->solde;
    }
    public function setSolde($solde) {
        $this->solde = $solde;
    }
    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function depot($montant) {
        $soldeActuel = $this->getSolde();
        $newSolde = $soldeActuel + $montant;
        $this->setSolde($newSolde);
    }
    public function retrait($montant) {
        $soldeActuel = $this->getSolde();
        $newSolde = $soldeActuel - $montant;
        $this->setSolde($newSolde);
    }
    public function virement($montant, $beneficiaire) {
        $beneficiaire->setSolde($beneficiaire->getSolde() + $montant);
        $this->retrait($this->getSolde()-$montant);
    }
}
$johnCompte = new CompteBancaire("John");
$marylinCompte = new CompteBancaire("Marylin");

$johnCompte->depot(500);
$marylinCompte->depot(1000);
$marylinCompte->retrait(10);

echo "le solde de ". $johnCompte->getNom() ." est de : " . $johnCompte->getSolde() . " euros";
echo "<br>le solde de ". $marylinCompte->getNom() ." est de : " . $marylinCompte->getSolde() . " euros";

$johnCompte->virement(75, $marylinCompte);
?>


