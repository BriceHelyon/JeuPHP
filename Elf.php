<?php

    class Elf extends Character {
    public function __construct($name, $health, $positionX, $positionY, $coins = 0) {
        parent::__construct($name, $health, $positionX, $positionY, 7, $coins);
    }

    public function talk() {
        return "Eldarie";
    }
}

?>