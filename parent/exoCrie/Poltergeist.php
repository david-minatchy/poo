<?php

class Poltergeist extends Fantome{

    public function ditBonjour() {
        echo "Guten Tag";
    }

    public function parlerPlusFort(){
        parent::ditBonjour();
        echo "<H1>Je crie</h1>";
    }
}
?>