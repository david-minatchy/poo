<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  class ChainePlus {
    private $chaine;
  
    public function getChaine() {
      return $this -> chaine;
    }

    public function setChaine($chaine) {
      $this->chaine = $chaine;
    }
  
    public function gras() {
      
      return "<strong>gras:" . $this->getChaine() . "</strong><br>";
      
    }
  
    public function italique() {
      return "<em>italique" . $this->getChaine() . "</em><br>";
    }
  
    public function souligne() {
      return "<u>souligné" . $this->getChaine() . "</u><br>";
    }
  
    public function majuscules() {
      return "majuscule:".strtoupper($this->getChaine());
    }
  }
  
$chaineFinal = new ChainePlus();
$chaineFinal->setChaine("Programmation orienté objet en PHP");
echo $chaineFinal->gras(); 
echo $chaineFinal->italique(); 
echo $chaineFinal->souligne(); 
echo $chaineFinal->majuscules();
  ?>
</body>
</html>
