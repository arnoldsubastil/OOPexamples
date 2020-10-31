<?php
class Mammal {
    public $numberOfFeet;
    public $mammalType;
    public $habitat;
    public $food;

    public function getHabitat() {
        return $this->habitat;
    }

    public function getFood() {
        return $this->food;
    }

    public function getType() {
        return $this->mammalType;
    }
}

?>