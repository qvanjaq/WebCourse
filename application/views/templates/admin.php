<!DOCTYPE html>
<html>
<head>
<meta charset='utf8'>   	
   <script type="text/javascript" src="{$_SERVER.SERVER_NAME}/js/jquery-1.7.1.min.js"></script>
   <script type="text/javascript" src="{$_SERVER.SERVER_NAME}/js/ui/js/jquery-ui-1.8.17.custom.min.js"></script> 
   <script type="text/javascript" src="{$_SERVER.SERVER_NAME}/js/ui/js/jquery.ui.datepicker-ru.js"></script>
   <link type="text/css" href="{$_SERVER.SERVER_NAME}/js/ui/css/smoothness/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
   
   <link href='{$_SERVER.SERVER_NAME}/css/common.css' rel='stylesheet' type='text/css'>
   <!--[if lte ie 6]>
   <link href='{$_SERVER.SERVER_NAME}/css/ie.css' rel='stylesheet' type='text/css'>
   <![endif]-->
</head>
<body> 
<div id='main'>
   <div id='all'>
      <div>
         <a href='{$_SERVER.SERVER_NAME}/course/display'>Блюда</a>
         <a href='{$_SERVER.SERVER_NAME}/order/display'>Заказы</a>
         <a href='{$_SERVER.SERVER_NAME}/order/time'>За период</a>
         <a href='{$_SERVER.SERVER_NAME}/site/adminLogout'>Выход</a>
      </div>
      {$content}
   </div>
</div>
<div id='footer'>Все права защищены &copy; 2012</div>
</body>
</html>