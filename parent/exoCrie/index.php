<?php 

spl_autoload_register('monChargeur'); 

    function monChargeur($classe)
    {
    require $classe.'.php'; 
    }

$poltergeist=new Poltergeist();
$poltergeist->parlerPlusFort();

?>