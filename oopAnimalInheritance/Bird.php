<?php
    require_once("Animal.php");

    class Bird extends Animal {
        private $color;
        private $periodOfBreeding;

        public function __construct($birthInPlace, $nameOfZoo, $color, $periodOfBreeding){
            parent::__construct($birthInPlace, $nameOfZoo);
            $this->color = $color;
            $this->periodOfBreeding = $periodOfBreeding;
        }

        public function getColor(){
            return $this->color;
        }

        public function getPeriodOfBreeding(){
            return $this->periodOfBreeding;
        }

        public function setColor($color){
            $this->color = $color;
        }

        public function setPeriodOfBreeding($day){
            $this->periodOfBreeding = $day;
        }

        public function setPeriodOfBreedingMinusDay(){
            $this->periodOfBreeding -=1;
        }
    }
?>