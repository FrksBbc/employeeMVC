<?php
    //include vs require_once
    require_once("User.php");
    require_once("SimpleUser.php");

    class App {
        public function userAppRun(){
            //paraméterek száma kötelezően 3 (tipusellenőrzést most nincs)
            $simpleUserObj = new SimpleUser("Teszt Elek", "tesztelek", "123");
            $simpleUserObj -> printObjDataToDebug();
            $simpleUserObj -> login();
            echo "<br>";
            $simpleUserObj -> logout();

            // ArgumentCountError: Too few arguments (ha a Userben is szerepel konstruktor 4 paraméterrel)
            $userObj = new User("Gipsz Jakab", "gipszjakab", "456");
            $userObj -> printObjDataToDebug();
            $userObj -> login(); //azonos néven szerepel a gyermekosztályban, felülírta az ősben lévő viselkedést
            echo "<br>";
            $userObj -> logout();
            //email nincs beállítva NULL, mert a konstruktorban nem szerepel
            //de setterrel megoldható, veszélye, hogy bármelyik másik osztály felülírhatja
            $userObj -> setEmail("gipszjakab@gmail.com");
            $userObj -> printObjDataToDebug();
        }
    }

    //alapértelmezett paraméterek nélküli konstruktorhívás
    $newAppObj = new App();
    $newAppObj->userAppRun();


?>
