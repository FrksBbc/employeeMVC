<?php
    require_once("Animal.php");
    require_once("Bird.php");
    require_once("Wolf.php");

    class App {

        public function runApp(){
            echo "<h2> Ős osztály példányosítás </h2>";
            $animalObj = new Animal(true, "Zoo Park");
            $animalObj->eat();
            echo "<br>";
            $animalObj->sleep(5);
            echo "<br>";
            $animalObj->getBirthInPlaceText();
            echo "<br>";

            echo "<h2> Leszármazott osztály: Wolf példányosítás </h2>";
            $wolfObj = new Wolf(true, "Zoo Park", 50, "Akela", 60);
            $wolfObj->eat();
            echo "<br>";
            $wolfObj->sleep(8);
            echo "<br>";
            $wolfObj->getBirthInPlaceText();
            echo "<br>";
            $wolfObj->homePrint();
            echo "<br>";
            $wolfObj->printObjDataToDebug();
            echo "<br>";

            //Bird példány létrehozás és metódushívások
            echo "<h2> Leszármazott osztály: Bird példányosítás </h2>";
            $birdObj = new Bird(false, "Zoo Park", "kék", 26);
            $birdObj->eat();
            echo "<br>";
            echo "Költési napok száma: ". $birdObj->getPeriodOfBreeding();
            $birdObj->setPeriodOfBreedingMinusDay();
            echo "<br>";
            echo "Költési napok száma: ". $birdObj->getPeriodOfBreeding();
            $birdObj->printObjDataToDebug();
        }
    }
$appObj = new App();
$appObj->runApp();
?>