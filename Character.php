<?php

    abstract class Character {
    protected $name;
    protected $position = array('positionX' => 0, 'positionY' => 0);
    protected $speed;
    protected $health;
    protected $coins = 0;

    public function __construct($name, $health, $positionX, $positionY, $speed, $coins = 0) {
        $this->name = $name;
        $this->health = $health;
        $this->position['positionX'] = $positionX;
        $this->position['positionY'] = $positionY;
        $this->speed = $speed;
        $this->coins = $coins;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getHealth() {
        return $this->health;
    }

    public function setHealth($health) {
        $this->health = $health;
    }

    public function getPosition() {
        return $this->position;
    }

    public function setPosition($positionX, $positionY) {
        $this->position['positionX'] = $positionX;
        $this->position['positionY'] = $positionY;
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function setSpeed($speed) {
        $this->speed = $speed;
    }

    public function getCoins() {
        return $this->coins;
    }

    public function setCoins($coins) {
        $this->coins = $coins;
    }

    abstract public function talk();
}

?>