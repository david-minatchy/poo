<?php

spl_autoload_register('monChargeur');

    function monChargeur($classe)
    {
        require $classe.'.php';
    }
    
    $fantome = new Fantome();
    $poltergeist = new Poltergeist();
    
    $fantome->ditBonjour();
    $poltergeist->ditBonjour();    
?>