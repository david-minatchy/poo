<?php

class Avion 
{
    public function décoller() {
     echo "l'avion décolle";
    }
    public function attérir() {
        echo" l'avion atterit";
    }
  }
  
  $avion1 = new avion;
  $avion1->décoller();
  $avion1->attérir();

  $avion2 = new avion;
  $avion2->décoller();
  $avion2->attérir();

?>