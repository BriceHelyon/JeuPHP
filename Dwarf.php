<?php

    class Dwarf extends Character {
    public function __construct($name, $health, $positionX, $positionY, $coins = 0) {
        parent::__construct($name, $health, $positionX, $positionY, 2, $coins);
    }

    public function talk() {
        return "Groumpf";
    }
}


?>