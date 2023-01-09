<?php

    class SimpleUser {

        private $fullName;
        private $userName;
        private $password;

        public function __construct($fullName, $userName, $password){
            $this->fullName = $fullName;
            $this->userName = $userName;
            $this->password = $password;
        }

        public function __destruct(){
        }

        public function getFullName(){
            return $this->fullName;
        }

        public function getUserName(){
            return $this->userName;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setFullName($fn){
            $this->fullName = $fn;
        }

        public function setUserName($un){
            $this->userName = $un;
        }

        public function setPassword($pwd){
            $this->password = $pwd;
        }

        public function login(){
            echo "SimpleUser belép...";
        }

        public function logout(){
            echo "SimpleUser kilép...";
        }

        public function printObjDataToDebug(){
            echo "<pre>";
            var_dump($this);
            echo "</pre>";
        }
    }
?>