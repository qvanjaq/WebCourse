<?php /* Smarty version Smarty-3.1.7, created on 2012-01-18 10:35:49
         compiled from "Z:\home\courses.ru\www\application\views\site\login.php" */ ?>
<?php /*%%SmartyHeaderCode:1874f166c0aa91bf8-48844723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '420d17f72df650193b298e7537eeac1b8d89ff50' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\site\\login.php',
      1 => 1326875730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1874f166c0aa91bf8-48844723',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f166c0abdf2c',
  'variables' => 
  array (
    '_SERVER' => 0,
    'error' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f166c0abdf2c')) {function content_4f166c0abdf2c($_smarty_tpl) {?><div class='title'>Вход</div>


<form method='post' id='login'>
    <table>
    <tr><td colspan=2><a href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REMOTE_HOST'];?>
/site/registration'>Регистрация</a></td></tr>
    <tr><td colspan=2><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></td></tr>
    <tr><td>Email</td><td><input type='text' name='login[mail]' value='<?php echo $_smarty_tpl->tpl_vars['login']->value['mail'];?>
'></td></tr>
    <tr><td>Пароль</td><td><input type='password' name='login[password]' value='<?php echo $_smarty_tpl->tpl_vars['login']->value['password'];?>
'></td></tr>
    <tr><td colspan=2><input type='submit' value=' Вход '></td></tr>
    </table>
</form><?php }} ?>