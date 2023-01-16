<?php

require_once 'Personnage.php';

$gandalf = new Personnage("Gandalf", 100);
    $frodon = new Personnage("Frodon", 2);
    
    $gandalf->attaque($frodon);
    
    $gandalf->etat(); 
    $frodon->etat();  
?>