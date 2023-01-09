<?php
    require_once("WebAppInterface.php");
    require_once("CMSInterface.php");

    /*
        Interface: protokoll, egy előírás, arra vonatkozólag, hogy hogyan 
        KELL működniük KÖTELEZŐEN. (FATAL error-t dob, ha nincs benne)
        implements kulcsszóval használjuk, akár több interface-t is használhatunk
        egy osztálynál - szimulálja a többszörös öröklődést

        Pld. 2 független, nem összekapcsolható osztály működését
        szabályozhatjuk. Ember is fülyürészhet és madár is, de nem 
        fogjuk egymásból származtatni őket. Létrehozunk egy whisleInterface-t
        whistle().

        Az interface metódusok nével ellátott halmaza, amelyeket kötelezően meg kell valósítania
        annak az osztálynak, ami implementálja ezt az interface-t. 
        Az interface-ben nincs a metódusoknak törzse, csak neve
    */

    //1 osztály tesztszőleges interface-t implementálhat
    class App implements WebAppInterface, CMSInterface{
        public function login($email, $password){
            echo "Bejelentkezés email és jelszóval...";
        }

        public function register($email, $password, $userName){
            echo "Regisztráció ezzel az emailcímmel: ".$email ." és felhasználónévvel: ".$userName;
        }

        public function logout(){
            echo "A felhasználó kijelentkezik...";
        }

        public function publishPost($post){
            echo $post ." - publikálva lett";
        }
    }

 $appObj = new App();
 $appObj ->login("tesztelek@gmail.com", "123");
 echo "<br>";
 $appObj ->logout();  
 echo "<br>";
 $appObj ->register("gipszJakab@gmail.com", "567", "gipszjakab");  
 echo "<br>";
 $appObj -> publishPost("rövid poszt...");
?>