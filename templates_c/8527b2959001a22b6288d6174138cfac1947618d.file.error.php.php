<?php /* Smarty version Smarty-3.1.7, created on 2012-01-17 10:27:22
         compiled from "Z:\home\courses.ru\www\application\views\index\error.php" */ ?>
<?php /*%%SmartyHeaderCode:26654f153072bde563-73095666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8527b2959001a22b6288d6174138cfac1947618d' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\index\\error.php',
      1 => 1326788827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26654f153072bde563-73095666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f153072c4688',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f153072c4688')) {function content_4f153072c4688($_smarty_tpl) {?><h1>
   Произошла ошибка! <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
!
</h1><?php }} ?>