<?php /* Smarty version Smarty-3.1.7, created on 2012-01-17 09:09:54
         compiled from "Z:\home\courses.ru\www\application\views\index\index.php" */ ?>
<?php /*%%SmartyHeaderCode:249634f14583c601371-24857521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08f111865ca368971c84cb9487a2780686f07068' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\index\\index.php',
      1 => 1326784192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249634f14583c601371-24857521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f14583c65546',
  'variables' => 
  array (
    'users' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f14583c65546')) {function content_4f14583c65546($_smarty_tpl) {?><h1>
   <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
   Hello!<?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
!
   <?php } ?>
</h1><?php }} ?>