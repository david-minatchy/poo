<?php

spl_autoload_register('monChargeur');

    function monChargeur($Arme)
    {
        require $Arme.'.php';
    }
        
        $guerrier = new Guerrier('bob');
        $guerrier->monterCheval();
        if($guerrier->getSurCheval()){
            echo $guerrier->getPseudo().' est monté sur son cheval<br>';
        
    }
    
    $joueur1 = new Guerrier("Bob");
    $joueur2 = new Magicien("toto");
    
    $joueur1->changerArme("epee");
    $joueur2->changerArme("baton");
    
    $joueur1->attaquer($joueur2);
    echo "<br>Etat de ".$joueur2->getPseudo()." : <br>";
    $joueur2->afficherEtat()."<br>";

    $joueur2->lancerSort("Boule de feu");
    echo "Etat de ".$joueur1->getPseudo()." : <br>";
    $joueur1->afficherEtat()."<br>";

    $joueur1->attaquer($joueur2);
    echo "<br>Etat de ".$joueur2->getPseudo()." : <br>";
    $joueur2->afficherEtat()."<br>";
?>

   
