<?php /* Smarty version Smarty-3.1.7, created on 2012-01-19 16:36:37
         compiled from "Z:\home\courses.ru\www\application\views\course\display.php" */ ?>
<?php /*%%SmartyHeaderCode:177074f1829fd1ab864-83695760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b2734ac87aeec3b0b7d657fb8d9a0bc41d4d56c' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\course\\display.php',
      1 => 1326983769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177074f1829fd1ab864-83695760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f1829fd2515e',
  'variables' => 
  array (
    '_SERVER' => 0,
    'courses' => 0,
    'course' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f1829fd2515e')) {function content_4f1829fd2515e($_smarty_tpl) {?><div class='title'>Блюда</div>
<a href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REMOTE_HOST'];?>
/course/add'>Добавить</a>
<table class='admin'>
    <tr>
        <th>Название блюда</th>
        <th>Тип блюда</th>
        <th>Действие</th>
    </tr>
    
<?php  $_smarty_tpl->tpl_vars['course'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['course']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['course']->key => $_smarty_tpl->tpl_vars['course']->value){
$_smarty_tpl->tpl_vars['course']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['course']->value['course_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['course']->value['category_name'];?>
</td>
        <td>
            <a href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REMOTE_HOST'];?>
/course/delete/id/<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
'>Удалить</a>
            <a href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REMOTE_HOST'];?>
/course/update/id/<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
'>Обновить</a>
        </td>
    </tr>
<?php } ?>
</table><?php }} ?>