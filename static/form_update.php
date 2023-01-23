<?php

include_once ("connexion_bdd/connect.php");
include_once ("ManagementFantome.php");
include_once ("Fantome.php");

$id=$_GET['id'];

$managementfantome=new ManagementFantome($bdd);
$fantomes=$managementfantome->getId($id);
?>

<form action="update.php" method="get">
    Nom: <input type="text" name="nom"  value="<?php echo $fantomes->getNom();?>">
    Couleur: <input type="text" name="couleur" value="<?php echo $fantomes->getCouleur();?>">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <input type="submit" name="envoyer" value="valider">
</form>