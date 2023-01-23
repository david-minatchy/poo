<?php

try{
    
    $bdd = new PDO("mysql:host=localhost;dbname=fantome;charset=utf8", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    die();
}  
    
?>

