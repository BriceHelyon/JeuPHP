<?php

    class DwarfThief extends Dwarf {
    use Thief;
    public function __construct($name, $health, $positionX, $positionY, $dexterity, $coins = 0) {
        parent::__construct($name, $health, $positionX, $positionY, $coins);
        $this->dexterity = min($dexterity, 100);
    }
}
?>