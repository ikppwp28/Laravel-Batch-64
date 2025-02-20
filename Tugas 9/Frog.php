<?php

require_once('animal.php');

class Frog extends Animal{
    public $legs = 4;
    public $cold_blooded = "yes";

    public function jump()
    {
        return "hop hop";
    }
    
}

?>