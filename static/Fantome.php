<?php

class Fantome {
    private $nom="fantome";
    private $couleur='blanc';
    private $velocite=1;
    private $sante=10;
    private $id;
    public static $compteur = 0;

    public function __construct($data) {
        $this->hydrate($data);
        self::$compteur++;
    }

    public function hydrate($data) {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
        }
    }
}

public static function compteur() {
    return self::$compteur;
}

public function getId() {
    return $this->id;
}

public function setId($id) {
    $this->id = $id;
    return $this;
}

public function getNom() {
    return $this->nom;
}

public function setNom($nom) {
    $this->nom = $nom;
    return $this;
}

public function getCouleur() {
    return $this->couleur;
}

public function setCouleur($couleur) {
    $this->couleur = $couleur;
    return $this;
}

public function getGagnerPV() {
    return $this->sante;
}

public function setGagnerPV($sante) {
    $this->sante += $sante;
    return $this;
}

public function getPV() {
    return $this->sante;
}

public function setPV($sante){
    $this->sante = $sante;
    return $this;
}

public function getPerdrePV() {
    return $this->sante;
}
public function setPerdrePV($sante) {
    $this->sante -= $sante;
    if($this->sante <= 0) {
        $this->sante = 0;
        #echo  " désolé le fantome <br> ".$this->nom." est mort<br>";
    }
    return $this;
}
public function getVelocite() {
    return $this->velocite;
}
public function setVelocite($velocite) {
    $this->velocite = $velocite;
    return $this;
}

public function stat() {
    return "Mon nom est ".$this->getNom().", j'ai ".$this->getGagnerPV()."PV et ma vitesse est de ".$this->getVelocite()."<br>";

}}
$clyde = (new Fantome(array("nom"=>"clyde","couleur"=>"jaune")))
    ->setPerdrePV(5)
    ->setPerdrePV(10);

$dolly = (new Fantome(array("nom"=>"Dolly","couleur"=>"rose")))
    ->setGagnerPV(10)
    ->setVelocite(2);

echo "Nombre total de fantômes créés : " . Fantome::$compteur;
#echo $clyde->stat();
#echo $dolly->stat();    
?>


