<?php

include_once ("connexion_bdd/connect.php");
include_once ("ManagementFantome.php");
include_once ("Fantome.php");


$fantome=new Fantome(array("id"=>$_GET['id'],"nom"=>$_GET['nom'],"couleur"=>$_GET['couleur']));
$managementfantome=new ManagementFantome($bdd);
$managementfantome->delete($fantome);

header('location:index.php');
?>