<?php    
    class FC {
        protected $_controller, $_action, $_body, $_params;
        static $_instance;
        static $pdo, $config;
        
        public static function getInstance($config = '') {
            if(!(self::$_instance instanceof self))
                self::$_instance = new self($config);
                
           
            return self::$_instance;
        }
        
        public static function pdo() {
            return self::$pdo;
        }
        
        private function __construct($config) {            
            self::$config = $config;
            $con = $config['dbConnect'];
            $user = $config['dbUser'];
            $pass = $config['dbPassword'];
            self::$pdo = new PDO($con, $user, $pass);
            
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo->query('SET NAMES utf8');
            session_start();
            //header("Cache-Control: no-store, no-cache, must-revalidate");
        }
        
        private function parsePath($path = '') {
            if(!$path) {
                $wasEmpty = true;
                $path = $_SERVER['REQUEST_URI'];
            }
                
            $splits = explode('/', trim($path, '/'));
            
            if($wasEmpty) {
                $this->_controller = !empty($splits[0]) ? ucfirst($splits[0]) . 'Controller' : self::$config['defaultController'];
                $this->_action = !empty($splits[1]) ? 'action' . ucfirst($splits[1]) : self::$config['defaultAction'];
            } else {
                $this->_controller = $splits[0];
                $this->_action = $splits[1];
            }
            
            if(!empty($splits[2])) {
                $keys = $values = array();
                for($i = 2; $i < count($splits); $i++) {
                    if($i % 2 == 0)
                        $keys[] = $splits[$i];
                    else
                        $values[] = $splits[$i];
                }
                
                $this->_params = @array_combine($keys, $values);
            }                
        }
        
        public function route($path = '') {
            $this->parsePath($path);
            
            if(class_exists($this->getController())) {               
                $rc = new ReflectionClass($this->getController());                
                if($rc->implementsInterface('IController')) {                    
                    if($rc->hasMethod($this->getAction())) {
                        $controller = $rc->newInstance();                        
                        $method = $rc->getMethod($this->getAction());
                        
                        $params = $this->getParams();
                        if(!empty($params))
                            $method->invokeArgs($controller, array(0 => $params));
                        else 
                            $method->invokeArgs($controller, array(0));
                    } else {
                        throw new RouteException('Wrong action');
                    }                    
                } else {
                    throw new RouteException('Wrong interface controller');
                }
            } else {
                 
                throw new RouteException('Wrong controller'); 
            }
            
        }
        
        public function getController() {
            return $this->_controller;
        }
        
        public function getParams() {
            return $this->_params;
        }
        
        public function getAction() {
            return $this->_action;
        }
        
        public function getBody() {
            return $this->_body;
        }
        
        public function setBody($body) {
            $this->_body = $body;
        }         
    }
?>