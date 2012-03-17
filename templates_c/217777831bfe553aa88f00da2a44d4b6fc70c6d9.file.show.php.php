<?php /* Smarty version Smarty-3.1.7, created on 2012-01-20 10:15:03
         compiled from "Z:\home\courses.ru\www\application\views\order\show.php" */ ?>
<?php /*%%SmartyHeaderCode:281904f1920777f2933-29336027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '217777831bfe553aa88f00da2a44d4b6fc70c6d9' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\order\\show.php',
      1 => 1327047302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281904f1920777f2933-29336027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f19207786e61',
  'variables' => 
  array (
    '_SERVER' => 0,
    'id' => 0,
    'time' => 0,
    'courses' => 0,
    'course' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f19207786e61')) {function content_4f19207786e61($_smarty_tpl) {?><div class='title'>Заказ</div>
<div><a href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['REQUEST_HOST'];?>
/order/delete/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>Удалить заказ</a></div>
<div>Время заказа: <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</div>
<table class='admin'>
    <tr>
        <th>Название блюда</th>
        <th>Тип бюлюда</th>        
    </tr>
    
<?php  $_smarty_tpl->tpl_vars['course'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['course']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['course']->key => $_smarty_tpl->tpl_vars['course']->value){
$_smarty_tpl->tpl_vars['course']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['course']->value['courseName'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['course']->value['categoryName'];?>
</td>        
    </tr>
<?php } ?>
</table><?php }} ?>