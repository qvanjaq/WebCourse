<?php
    class Course {
        public static function getAll() {
            $result = array();
            $cats = FC::pdo()->query('SELECT * FROM category')->fetchAll();
                       
            for($i = 0; $i < count($cats); $i++)
                $result[$cats[$i]['name']] = FC::pdo()->query('SELECT course.name, course.id
                                 FROM course INNER JOIN category ON course.id_category=category.id
                                 WHERE course.id_category=' . $cats[$i]['id'])->fetchAll();
            
            return $result;
        }
        
        public static function getAdminAll() {
            $query = 'SELECT course.name as course_name,
                        category.name as category_name, course.id as id
                    FROM course INNER JOIN category ON course.id_category=category.id';
            return FC::pdo()->query($query)->fetchAll();   
        }        
        
        public static function getSelect() {
            $query = 'SELECT name, id FROM category';
            return FC::pdo()->query($query)->fetchAll();              
        }
        
        public static function validate($course) {
            if($course['name'] == '' || $course['id_category'] == '')
                return 'Не введены все данные.';
            
            return '';
        }
        
        public static function add($course) {
            $name = FC::pdo()->quote($course['name']);
            $id_category = intval($course['id_category']);
            FC::pdo()->exec("INSERT INTO course VALUES(NULL, $name, $id_category)");
        }
        
        public static function update($course) {
            $name = FC::pdo()->quote($course['name']);
            $id = intval($course['id']);
            $id_category = intval($course['id_category']);
    
            FC::pdo()->exec("UPDATE course SET name=$name, id_category=$id_category WHERE id=$id");
        }
        
        public static function getByPk($id) {
            $id = intval($id);
            return FC::pdo()->query("SELECT * FROM course WHERE id=$id")->fetch();   
        }
        
        public static function delete($id) {
            $id = intval($id);
            FC::pdo()->exec("DELETE FROM course WHERE id=$id");   
        }        
    }
?>