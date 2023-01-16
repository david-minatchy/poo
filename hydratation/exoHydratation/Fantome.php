<?php
class Fantome {
    private $nom="fantome";
    private $couleur='blanc';
    private $vitesse=1;
    private $sante=10;

    public function __construct($data) {
        $this->hydrate($data);
}

    public function hydrate($data) {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
        }
    }
}

public function getNom() {
    return $this->nom;
}

public function setNom($nom) {
    $this->nom = $nom;
}

public function getCouleur() {
    return $this->couleur;
}

public function setCouleur($couleur) {
    $this->couleur = $couleur;
}

public function getGagnerPV() {
    return $this->sante;
}

public function setGagnerPV($sante) {
    $this->sante += $sante;
    return $this;
}

public function getPerdrePV() {
    return $this->sante;
}
public function setPerdrePV($sante) {
    $this->sante -= $sante;
    if($this->sante <= 0) {
        $this->sante = 0;
        echo  " désolé le fantome <br> ".$this->nom." est mort<br>";
    }
    return $this;
}
public function getVitesse() {
    return $this->vitesse;
}
public function setVitesse($vitesse) {
    $this->vitesse = $vitesse;
    return $this;
}

public function stat() {
    return "Mon nom est ".$this->getNom().", j'ai ".$this->getGagnerPV()."PV et ma vitesse est de ".$this->getVitesse()."<br>";

}}
$clyde = (new Fantome(array("nom"=>"clyde","couleur"=>"jaune")))
    ->setPerdrePV(5)
    ->setPerdrePV(10);

$dolly = (new Fantome(array("nom"=>"Dolly","couleur"=>"rose")))
    ->setGagnerPV(10)
    ->setVitesse(2);

echo $clyde->stat();
echo $dolly->stat();    
?>