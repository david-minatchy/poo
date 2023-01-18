<?php

spl_autoload_register('monChargeur');

    function monChargeur($classe)
    {
        require $classe.'.php';
    }
    
    
$fantome = new Fantome();
$poltergeist = new Poltergeist();


echo $fantome->parle(); 

echo $poltergeist->parle(); 

echo $poltergeist->colere(); 

?>