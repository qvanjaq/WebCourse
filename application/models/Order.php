<?php
    class Order {
        private static $tableName = 'order';
        public static function validate($checkboxs) {
            if(empty($checkboxs))
                return 'Вы не выбрали ни одно блюдо.';
            
            foreach($checkboxs as $key => $group) {
                if(count($checkboxs[$key]) > FC::$config['coursePerGroup'])
                    return 'Вы выбрали слишком много.';
                
                foreach($group as $key => $value) {
                    if(!preg_match('/^[0-9]+$/', $value))
                        return 'Отправлен не правильный тип данных.';
                }
            }
              
            return '';
        }
        
        public static function save($courses) {
            $table = self::$tableName;
            $idUser = $_SESSION['id'];
            
            FC::pdo()->exec("DELETE FROM `$table` WHERE id_user=$idUser");
            FC::pdo()->exec("DELETE FROM order_time WHERE id_user=$idUser");
            
            foreach($courses as $group)
                foreach($group as $idCourse)                   
                    FC::pdo()->exec("INSERT INTO `$table` VALUES($idUser, $idCourse)");
                    
            FC::pdo()->exec("INSERT INTO order_time VALUES($idUser, NOW())");
        }
        
        public static function getByPk($id) {
            $id = intval($id);
            $query = "SELECT course.name as courseName,
                        category.name as categoryName FROM `order`
                    INNER JOIN course ON order.id_course=course.id
                    INNER JOIN category ON course.id_category=category.id
                    WHERE id_user=$id";
            return FC::pdo()->query($query)->fetchAll();
        }
       
        public static function getTime($id) {
            $id = intval($id);
            $query = "SELECT * FROM order_time WHERE id_user=$id";
            $r = FC::pdo()->query($query)->fetch();
            return $r['time'];
        }
        
        public static function delete($id) {
            $id = intval($id);
            $query = "DELETE FROM `order` WHERE id_user=$id";
            FC::pdo()->exec($query);
            $query = "DELETE FROM order_time WHERE id_user=$id";
            FC::pdo()->exec($query);             
        }
        
        public static function validateTime($time) {
            if(empty($time['begin']) || empty($time['end']))
                return 'Не все поля заполнены.';
            
            return '';
        }
        
        private static function normTime($time) {
            preg_match('/([0-9]{2}).([0-9]{2}).([0-9]{4})/', $time, $r);
            return "$r[3]-$r[2]-$r[1]";
        }
        
        public static function getByTime($time) {
            $begin = self::normTime($time['begin']);
            $end = self::normTime($time['end']);
            
            $query = "SELECT mail, id_user
                    FROM order_time INNER JOIN user ON order_time.id_user=user.id
                    WHERE time >= '$begin' AND time <= '$end'";
            $users = FC::pdo()->query($query)->fetchAll();
            
            $result = array();
            for($i = 0; $i < count($users); $i++) {
                $result[$i]['user'] = $users[$i];
                $query = "SELECT category.name as categoryName, course.name as courseName
                FROM `order`
                INNER JOIN course ON course.id=`order`.id_course
                INNER JOIN category ON category.id=course.id_category
                WHERE id_user={$users[$i][id_user]}";
                $result[$i]['order'] = FC::pdo()->query($query)->fetchAll();                
            }
            
            return $result;
        }
    }
?>