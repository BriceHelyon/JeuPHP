<?php

require_once 'ThiefTrait.php';

class Hobbit extends Character {
    use ThiefTrait;
    public function __construct($name, $health, $positionX, $positionY, $speed, $coins = 0) {
        parent::__construct($name, $health, $positionX, $positionY, $speed, $coins);
    }
    public function talk(){
        return "Belle journée ma foi";
    }
}



?>