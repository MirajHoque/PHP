<?php

include "mobile.php";
include "laser.php";
include "projector.php";

class Galaxy extends Mobile{
    
    use Laser, Projector;

}

$obj = new Galaxy;
$obj->power(); 
$obj->battery();
$obj->range();
