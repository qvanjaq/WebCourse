<?php
    class SiteController extends Controller {
        function actionIndex($params) {
            if(User::isGuest()) {
                header("Location: {$_SERVER[REMOTE_HOST]}/site/login");
                return;    
            }
            
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $result = Order::validate($_POST['courses']);
                
                if($result)
                    echo $result;
                else {
                    Order::save($_POST['courses']);
                    echo 'Ваш заказ записан.';   
                }
                
                return;
            }
            
            
            $courses = Course::getAll();
            $this->render('index.php', array('courses' => $courses), 'main.php');
        }
        
        function actionError($error) {
            $this->render('error.php', array('message' => $error['message']), 'main.php');   
        }
        
        function actionLogin() {
            $login = $_POST['login'];
            
            if($login) {
                $result = User::validate($login);
                
                if(is_array($result)) {
                    User::login($result['id']);
                    header("Location: {$_SERVER[REMOTE_HOST]}/site/index");
                    return;
                } 
                
            }
            
            $this->render('login.php', array('login' => $login, 'error' => $result));   
        }
        
        function actionRegistration() {
            $reg = $_POST['reg'];
            
            if($reg) {
                $result = User::validateReg($reg);
                
                if(empty($result)) {
                    $id = User::reg($reg);
                    User::login($id);
                    header("Location: {$_SERVER[REMOTE_HOST]}/site/index");
                    return;
                } 
                
            }
            
            $this->render('registration.php', array('reg' => $reg, 'error' => $result));   
        }
        
        function actionLogout() {
            User::logout();
            header("Location: {$_SERVER[REMOTE_HOST]}/site/login");         
        }
        
        function actionAdmin() {
            $login = $_POST['login'];
            
            if($login) {
                $result = Admin::validate($login);
                
                if(!$result) {
                    Admin::login();
                    header("Location: {$_SERVER[REMOTE_HOST]}/course/display");
                    return;
                } 
                
            }
            
            $this->render('admin.php', array('login' => $login, 'error' => $result));               
        }
        
        function actionAdminLogout() {
            Admin::logout();
            header("Location: {$_SERVER[REMOTE_HOST]}/site/index");         
        }        
    }
?>