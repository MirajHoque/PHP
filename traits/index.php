<?php

include "mobile.php";
include "laser.php";

class Galaxy extends Mobile{
    
    use Laser;

    public function power(){
        echo "I am from index";
    }

}

$obj = new Galaxy;
$obj->power();
//$obj->battery();
//$obj->range();
