<?php 

    class Human extends Character {
    public function __construct($name, $health, $positionX, $positionY, $coins = 0) {
        parent::__construct($name, $health, $positionX, $positionY, 5, $coins);
    }

    public function talk() {
        return "Bonjour, je suis " . $this->getName();
    }
}

?>