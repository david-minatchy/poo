<?php

require_once 'Parallelogramme.php';

class Carre extends Parallelogramme {
    public function __construct($cote) {
        parent::__construct($cote, $cote);
    }
}

?>


