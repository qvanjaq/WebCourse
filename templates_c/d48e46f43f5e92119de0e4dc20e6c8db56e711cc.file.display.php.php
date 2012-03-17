<?php /* Smarty version Smarty-3.1.7, created on 2012-01-20 09:55:01
         compiled from "Z:\home\courses.ru\www\application\views\order\display.php" */ ?>
<?php /*%%SmartyHeaderCode:96614f191dc6ecf727-01474882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd48e46f43f5e92119de0e4dc20e6c8db56e711cc' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\order\\display.php',
      1 => 1327046099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96614f191dc6ecf727-01474882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f191dc70111d',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    '_SERVER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f191dc70111d')) {function content_4f191dc70111d($_smarty_tpl) {?><div class='title'>Выберите пользователя</div>
<table class='admin'>
    <tr>
        <th>email</th>
        <th>Действие</th>        
    </tr>
    
<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['mail'];?>
</td>
        <td><a href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REMOTE_HOST'];?>
/order/show/id/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
'>Просмотр заказа</a></td>        
    </tr>
<?php } ?>
</table><?php }} ?>