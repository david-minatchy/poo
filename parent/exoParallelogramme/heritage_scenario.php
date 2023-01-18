<?php

require_once 'Parallelogramme.php';
require_once 'Carre.php';

$parallelogramme = new Parallelogramme(5,7);
echo "Périmètre : ".$parallelogramme->getPerimetre()."<br>";
echo "Aire : ".$parallelogramme->getAire()."<br>";

$carre = new Carre(5);
echo "Périmètre : ".$carre->getPerimetre()."<br>";
echo "Aire : ".$carre->getAire()."<br>";

?>


