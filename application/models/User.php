<?php
    class User {
        public static function isGuest() {
            if(!empty($_SESSION['id']))
                return false;
            else
                return true;
        }
        
        public static function validate($login) {
            if($login['mail'] == '' || $login['password'] == '') 
                return 'Не все поля заполнены!';


            $mail = FC::pdo()->quote($login['mail']);
            $password = FC::pdo()->quote($login['password']);
            $query = "SELECT id FROM user WHERE mail=$mail AND password=md5($password)";
            $result = FC::pdo()->query($query);
            
            $result = $result->fetch();
            if(empty($result)) {
                return 'Не правильный email или пароль.';
            } else 
                return array('id' => $result['id'], 'noError' => true);
        }
        
        public static function validateReg($reg) {
            if($reg['mail'] == '' || $reg['password'] == '') 
                return 'Не все поля заполнены!';
            return '';
        }
        
        public static function reg($reg) {
            $mail = FC::pdo()->quote($reg['mail']);
            $password = FC::pdo()->quote($reg['password']);
            $query = "INSERT INTO user VALUES(NULL, $mail, md5($password))";
            FC::pdo()->exec($query);
            return FC::pdo()->lastInsertId();
        }
        
        public static function login($id) {
            $_SESSION['id'] = $id;
        }
        
        public static function logout() {
             session_destroy();
        }
        
        
        public static function getAll() {
            $query = "SELECT * FROM user";
            return FC::pdo()->query($query)->fetchAll();
        }        
    }
?>