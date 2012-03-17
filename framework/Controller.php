<?php
    class Controller implements IController {
        public function render($file, $params = array(), $template = 'main.php') {
            include_once __DIR__ . '/smarty/Smarty.class.php';
            $smarty = new Smarty;
            $fc = FC::getInstance();
            $folderViews = substr(strtolower(get_class($this)), 0, -10);
            
            ob_start();        
            if(!empty($params))
                foreach($params as $nameVar => $valueVar)
                    $smarty->assign($nameVar, $valueVar);            
            $smarty->display(__DIR__ . '/../application/views/' . $folderViews . '/' . $file);
            $content = ob_get_clean();
            
            $smarty->assign('content', $content);
            $smarty->display(__DIR__ . '/../application/views/templates/'  . $template);
            $fc->setBody(ob_get_clean());          
        }        
    }
?>