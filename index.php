<?php
    set_include_path(get_include_path().
                     PATH_SEPARATOR . 'application/controllers'.
                     PATH_SEPARATOR . 'application/models' .
                     PATH_SEPARATOR . 'framework'                     
                     );
    
    function __autoload($class) {
        $file = $class . '.php';        
        if(file_exists('framework/' . $file) ||
           file_exists('application/controllers/' . $file) ||
           file_exists('application/models/' . $file))
            include $file;            
    }
         
    
    $params = include 'application/config/main.php';
    
    try {
        $front = FC::getInstance($params);
        $front->route();
        echo $front->getBody();
    }
        
    catch(RouteException $e) {
        $path = $params['errorController'] . '/' . $params['errorAction'] . '/message/' . $e->getMessage();
        $front->route($path);    
    }
    
    catch(Exception $e) {
        echo $e->getMessage();    
    }    
?>