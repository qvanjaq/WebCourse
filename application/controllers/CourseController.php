<?php
    class CourseController extends Controller {
        function actionDisplay() {
            if(!Admin::isAdmin()) {
                header("Location: {$_SERVER[REMOTE_HOST]}/site/admin");
                return;    
            }
            
            $courses = Course::getAdminAll();
            
            $this->render('display.php', array('courses' => $courses), 'admin.php');
        }
        
        function actionAdd() {
            $course = $_POST['course'];
            
            if($course) {
                $result = Course::validate($course);
                
                if(empty($result)) {
                    Course::add($course);
                    header("Location: {$_SERVER[REMOTE_HOST]}/course/display");
                    return;
                } 
                
            }
            
            $this->render('add.php', array('course' => $course,
                                           'error' => $result,
                                           'select' => Course::getSelect()));   
        }
        
        function actionUpdate($params) {
            $course = $_POST['course'];            
            
            if($course) {
                $course['id'] = $params['id'];
                $result = Course::validate($course);
                
                if(empty($result)) {
                    Course::update($course);
                    header("Location: {$_SERVER[REMOTE_HOST]}/course/display");
                    return;
                } 
                
            } else {
                $course['id'] = $params['id'];
                $course = Course::getByPk($course['id']);
            }
            
            $this->render('add.php', array('course' => $course,
                                           'error' => $result,
                                           'select' => Course::getSelect()));   
        }
        
        function actionDelete($params) {
            if(!Admin::isAdmin()) {
                header("Location: {$_SERVER[REMOTE_HOST]}/site/admin");
                return;    
            }
            
            Course::delete($params['id']);
            header("Location: {$_SERVER[REMOTE_HOST]}/course/display");
        }
    }
?>