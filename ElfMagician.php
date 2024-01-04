<?php

    class ElfMagician extends Elf {
    use Magician;
    public function __construct($name, $health, $positionX, $positionY, $magic, $coins = 0) {
        parent::__construct($name, $health, $positionX, $positionY, $coins);
        $this->magic = $magic;
    }
}
?>