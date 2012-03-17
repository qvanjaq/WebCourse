<?php /* Smarty version Smarty-3.1.7, created on 2012-01-20 11:28:29
         compiled from "Z:\home\courses.ru\www\application\views\templates\admin.php" */ ?>
<?php /*%%SmartyHeaderCode:157524f1829fd26d7d0-65056531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1670e281baacc1b031dc7361312988d8aeb7b21f' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\templates\\admin.php',
      1 => 1327051698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157524f1829fd26d7d0-65056531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f1829fd28314',
  'variables' => 
  array (
    '_SERVER' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f1829fd28314')) {function content_4f1829fd28314($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='utf8'>   	
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['SERVER_NAME'];?>
/js/jquery-1.7.1.min.js"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['SERVER_NAME'];?>
/js/ui/js/jquery-ui-1.8.17.custom.min.js"></script> 
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['SERVER_NAME'];?>
/js/ui/js/jquery.ui.datepicker-ru.js"></script>
   <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['SERVER_NAME'];?>
/js/ui/css/smoothness/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
   
   <link href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['SERVER_NAME'];?>
/css/common.css' rel='stylesheet' type='text/css'>
   <!--[if lte ie 6]>
   <link href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['SERVER_NAME'];?>
/css/ie.css' rel='stylesheet' type='text/css'>
   <![endif]-->
</head>
<body> 
<div id='main'>
   <div id='all'>
      <div>
         <a href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['SERVER_NAME'];?>
/course/display'>Блюда</a>
         <a href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['SERVER_NAME'];?>
/order/display'>Заказы</a>
         <a href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['SERVER_NAME'];?>
/order/time'>За период</a>
         <a href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['SERVER_NAME'];?>
/site/adminLogout'>Выход</a>
      </div>
      <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

   </div>
</div>
<div id='footer'>Все права защищены &copy; 2012</div>
</body>
</html><?php }} ?>