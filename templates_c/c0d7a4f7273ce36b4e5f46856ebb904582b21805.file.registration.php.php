<?php /* Smarty version Smarty-3.1.7, created on 2012-01-20 12:25:19
         compiled from "Z:\home\courses.ru\www\application\views\site\registration.php" */ ?>
<?php /*%%SmartyHeaderCode:65894f19410f8900c0-24646440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0d7a4f7273ce36b4e5f46856ebb904582b21805' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\site\\registration.php',
      1 => 1327054955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65894f19410f8900c0-24646440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'reg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f19410f8f200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f19410f8f200')) {function content_4f19410f8f200($_smarty_tpl) {?><div class='title'>Регистрация</div>

<form method='post' id='login'>
    <table>
    <tr><td colspan=2><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></td></tr>
    <tr><td>Email</td><td><input type='text' name='reg[mail]' value='<?php echo $_smarty_tpl->tpl_vars['reg']->value['mail'];?>
'></td></tr>
    <tr><td>Пароль</td><td><input type='password' name='reg[password]' value='<?php echo $_smarty_tpl->tpl_vars['reg']->value['password'];?>
'></td></tr>
    <tr><td colspan=2><input type='submit' value=' Регистрация '></td></tr>
    </table>
</form><?php }} ?>