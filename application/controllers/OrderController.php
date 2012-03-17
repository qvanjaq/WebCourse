<?php
    class OrderController extends Controller {
        function actionDisplay() {
            if(!Admin::isAdmin()) {
                header("Location: {$_SERVER[REMOTE_HOST]}/site/admin");
                return;    
            }
            
            $users = User::getAll();
            $this->render('display.php', array('users' => $users), 'admin.php');
        }
        
        function actionShow($params) {
            if(!Admin::isAdmin()) {
                header("Location: {$_SERVER[REMOTE_HOST]}/site/admin");
                return;    
            }
            
            $courses = Order::getByPk($params['id']);
            $time = Order::getTime($params['id']);
            $this->render('show.php', array('courses' => $courses, 'time' => $time, 'id' => $params['id']), 'admin.php');            
        }
        
        function actionDelete($params) {
            if(!Admin::isAdmin()) {
                header("Location: {$_SERVER[REMOTE_HOST]}/site/admin");
                return;    
            }
            
            Order::delete($params['id']);
            header("Location: {$_SERVER[REMOTE_HOST]}/order/display");
        }
        
        function actionTime() {
            $time = $_POST['time'];            
            
            if($time) {
                $result = Order::validateTime($time);
                
                if(empty($result)) {
                    $info = Order::getByTime($time);
                    $this->render('timeResult.php', array('info' => $info), 'admin.php');
                    return;
                } 
                
            }
            
            $this->render('time.php', array('time' => $time, 'error' => $result), 'admin.php');
        }
    }
?>