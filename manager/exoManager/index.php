<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">couleur</th>
      <th scope="col">pv</th>
      <th scope="col">vélocité</th>
    </tr>
  </thead>
  <tbody>
    <?php

    include_once ("connexion_bdd/connect.php");
    include_once ("ManagementFantome.php");
    include_once ("Fantome.php");

    $ManagementFantome = new ManagementFantome($bdd);
    $fantomes = $ManagementFantome->getAll();
    foreach ($fantomes as $value) {
    ?>
    <tr>
      <th scope="row"><?php echo $value->getId()?></th>
      <td><?php echo $value->getNom()?></td>
      <td><?php echo $value->getCouleur()?></td>
      <td><?php echo $value->getPV()?></td>
      <td><?php echo $value->getVelocite()?></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<a href="form_creer.php">Creer un fantome</a>
<table>
<?php
foreach ($fantomes as $value) {
  echo "<tr><td>".$value->getNom()."</td><td>".$value->getCouleur()."</td><td><a href=\"form_update.php?id=".$value->getId()."\">modifier</a></td><td><a href=\"delete.php?id=".$value->getId()."\">supprimer</a></td></tr>";
}
?>
</table>
</body>
</html>
