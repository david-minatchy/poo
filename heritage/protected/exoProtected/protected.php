<?php
error_reporting(E_ALL);

class User
{

  protected $userName;
  
  public function __construct()
  {
    $this->userName = 'Gerard';
  }
}

class Admin extends User
{
  public function afficherNom()
  {
    echo $this->userName; 
 }
}

$obj = new Admin;
echo $obj->afficherNom();

?>




