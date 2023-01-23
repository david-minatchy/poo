<?php

class Cercle {
    const PI = 3.14;
    private $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function perimetre() {
        return 2 * self::PI * $this->rayon;
    }
}

$cercle = new Cercle(5);
echo $cercle->perimetre(); 

?>