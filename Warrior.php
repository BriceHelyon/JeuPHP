<?php

    trait Warrior {
    protected $strength;
    public function __construct($strength) {
        $this->strength = $strength;
    }
    public function attack(Character $character) {
        $character->setHealth($character->getHealth() - $this->strength);
    }
}
 ?>