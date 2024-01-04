<?php

    trait Magician {
    protected $magic;
    public function __construct($magic) {
        $this->magic = $magic;
    }
    public function castSpell(Character $character) {
        $character->setHealth($character->getHealth() - $this->magic);
    }
}

?>