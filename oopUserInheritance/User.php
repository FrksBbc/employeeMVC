<?php
    require_once('SimpleUser.php');

    //1 gyermeknek 1 őse lehet
    class User extends SimpleUser {
        private $email;

        // Ha visszakommentezzük, akkor felülírja az ős konstruktorát
        /*public function __construct($fullName, $userName, $password, $email){
            $this->fullName = $fullName;
            $this->userName = $userName;
            $this->password = $password;
            $this->email = $email;
        }

        public function __destruct(){
        }
        */
        //Konstruktor túlterhelést nem tudja, polimorfizmust nem tudja a PHP
        //1 osztálynak csak 1 konstruktora lehet
        /*public function __construct($fullName, $userName, $password){
            $this->fullName = $fullName;
            $this->userName = $userName;
            $this->password = $password;
        }
        */
        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function login(){
            echo "User belép...";
        }

        public function logout(){
            echo "User kilép...";
        }
    }
?>