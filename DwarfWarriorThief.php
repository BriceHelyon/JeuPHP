<?php

    class DwarfWarriorThief extends Dwarf {
    use Warrior, Thief;
    protected $strength;
    protected $dexterity;
    public function __construct($name, $health, $positionX, $positionY, $strength, $dexterity, $coins = 0) {
        parent::__construct($name, $health, $positionX, $positionY, $coins);
        $this->strength = $strength;
        $this->dexterity = min($dexterity, 100);
    }
    public function getStrength(){
        return $this->strength;
    }
    public function getDexterity(){
        return $this->dexterity;
    }
}


?>