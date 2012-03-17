<?php /* Smarty version Smarty-3.1.7, created on 2012-01-17 14:10:24
         compiled from "Z:\home\courses.ru\www\application\views\site\error.php" */ ?>
<?php /*%%SmartyHeaderCode:249184f156530192465-94459267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b05ede1ca398a8623908c9b5516ef6f96e304dd' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\site\\error.php',
      1 => 1326788827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249184f156530192465-94459267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f1565301e695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f1565301e695')) {function content_4f1565301e695($_smarty_tpl) {?><h1>
   Произошла ошибка! <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
!
</h1><?php }} ?>