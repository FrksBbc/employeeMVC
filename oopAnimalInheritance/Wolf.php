<?php
    require_once("Animal.php");

    class Wolf extends Animal {
        private $witherHeight; //marmagasság
        private $name; //név
        private $weight; //súly

        public function __construct($birthInPlace, $nameOfZoo,$witherHeight, $name, $weight){
            parent::__construct($birthInPlace, $nameOfZoo);
            $this -> witherHeight = $witherHeight;
            $this -> name = $name;
            $this -> weight = $weight;
        }

        public function getWitherHeight(){
            return $this->witherHeight;
        }

        public function getName(){
            return $this->name;
        }

        public function getWeight(){
            return $this->weight;
        }

        public function eat(){
            $this->weight +=1;
            echo "Leszármazott osztályon belül (Wolf) eszik: A farkas súlya evés után ennyi lett: ".$this->weight;
        }

        public function homePrint(){
           echo "A farkas lakhelye: ". parent::getNameOfZoo();
        }
    }
?>
