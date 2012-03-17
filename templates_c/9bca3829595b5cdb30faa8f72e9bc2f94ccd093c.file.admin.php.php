<?php /* Smarty version Smarty-3.1.7, created on 2012-01-19 13:19:23
         compiled from "Z:\home\courses.ru\www\application\views\site\admin.php" */ ?>
<?php /*%%SmartyHeaderCode:53404f17fc3bd2e488-34529689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bca3829595b5cdb30faa8f72e9bc2f94ccd093c' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\site\\admin.php',
      1 => 1326971677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53404f17fc3bd2e488-34529689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f17fc3be0ffe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f17fc3be0ffe')) {function content_4f17fc3be0ffe($_smarty_tpl) {?><div class='title'>Вход администратора</div>


<form method='post' id='login'>
    <table>
    <tr><td colspan=2><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></td></tr>
    <tr><td>Логин</td><td><input type='text' name='login[login]' value='<?php echo $_smarty_tpl->tpl_vars['login']->value['login'];?>
'></td></tr>
    <tr><td>Пароль</td><td><input type='password' name='login[password]' value='<?php echo $_smarty_tpl->tpl_vars['login']->value['password'];?>
'></td></tr>
    <tr><td colspan=2><input type='submit' value=' Вход '></td></tr>
    </table>
</form><?php }} ?>