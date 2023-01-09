<?php
    class Animal {
        private $birthInPlace; //helyben az állatkertben született -e
        private $nameOfZoo;

        public function __construct($birthInPlace, $nameOfZoo){
            $this -> birthInPlace = $birthInPlace;
            $this -> nameOfZoo = $nameOfZoo;
        }

        public function isBirthInPlace(){
            return $this->birthInPlace;
        }

        public function getNameOfZoo(){
            return $this->nameOfZoo;
        }

        public function setNameOfZoo($nameOfZoo){
            $this->nameOfZoo = $nameOfZoo;
        }

        public function eat(){
            echo "Ős osztály: Az állat eszik...";
        }

        public function sleep($hour){
            echo "Ős osztály: Az állat alszik, ennyi órát: ".$hour;
        }

        public function getBirthInPlaceText(){
            if ($this->birthInPlace){
                echo "Itt született, ebben az állatkertben: ".$this->nameOfZoo;
            } else {
                echo "Másik állatkertből érkezett...";
            }
        }

        public function printObjDataToDebug(){
            echo "<pre>";
            var_dump($this);
            echo "</pre>";
        }
    }
?>