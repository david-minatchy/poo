<?php

include_once ("connexion_bdd/connect.php");
include_once ("ManagementFantome.php");
include_once ("Fantome.php");



$fantomes=new Fantome(array("id"=>$_GET['id'],"nom"=>$_GET['nom'],"couleur"=>$_GET['couleur']));
$managementfantome=new ManagementFantome($bdd);
$managementfantome->update($fantomes);

header('location:index.php');