<?php /* Smarty version Smarty-3.1.7, created on 2012-01-19 16:34:37
         compiled from "Z:\home\courses.ru\www\application\views\templates\main.php" */ ?>
<?php /*%%SmartyHeaderCode:46484f14584641ae19-63058424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '417301252ed56659a623dea9a22dad0fcb0b8da0' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\templates\\main.php',
      1 => 1326983546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46484f14584641ae19-63058424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f14584647b2d',
  'variables' => 
  array (
    '_SERVER' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f14584647b2d')) {function content_4f14584647b2d($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='utf8'>
<link href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REMOTE_HOST'];?>
/css/common.css' rel='stylesheet' type='text/css'>
<!--[if lte ie 6]>
<link href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REMOTE_HOST'];?>
/css/ie.css' rel='stylesheet' type='text/css'>
<![endif]-->

<script src='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REMOTE_HOST'];?>
/js/jquery-1.7.1.min.js'></script>
<script src='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REMOTE_HOST'];?>
/js/checkboxes.js'></script>
</head>
<body> 
<div id='main'>
   <div id='all'>
      <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

   </div>
</div>
<div id='footer'>Все права защищены &copy; 2012</div>
</body>
</html><?php }} ?>