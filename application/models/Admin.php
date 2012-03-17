<?php
    class Admin {
        public static function isAdmin() {
            if(!empty($_SESSION['admin']))
                return true;
            else
                return false;
        }
        
        public static function validate($login) {
            if($login['login'] == '' || $login['password'] == '') 
                return 'Не все поля заполнены!';

            if($login['login'] != FC::$config['adminLogin'] ||
               $login['password'] != FC::$config['adminPassword'])
                return 'Не правильный логин или пароль!';
            
            return '';
        }
        
        public static function login() {
            $_SESSION['admin'] = true;
        }
        
        public static function logout() {
             session_destroy();
        }        
    }
?>