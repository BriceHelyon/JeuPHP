<?php 
    
    trait Thief {
    protected $dexterity;
    public function __construct($dexterity) {
        $this->dexterity = min($dexterity, 100);
    }
    public function steal(Character $character) {
        $successChance = rand(0,100);
        if ($successChance > $this->dexterity) {
            $stolenCoins = $character->getCoins();
            $character->setCoins(0);
            return $stolenCoins;
        }
        return false;
    }
}
?>