<?php
    
    class HumanWarrior extends Human {
    use Warrior;
    public function __construct($name, $health, $positionX, $positionY, $strength, $coins = 0) {
        parent::__construct($name, $health, $positionX, $positionY, $coins);
        $this->strength = $strength;
    }
}
?>