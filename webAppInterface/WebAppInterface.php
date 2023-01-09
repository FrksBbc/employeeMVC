<?php

    interface WebAppInterface {
        public function login($email, $password);
        public function register($email, $password, $userName);
        public function logout();
    }
?>