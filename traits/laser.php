<?php

include "projector.php";

trait Laser{

    use Projector;
    
    public function power(){
        echo "10 mw";
    }

}