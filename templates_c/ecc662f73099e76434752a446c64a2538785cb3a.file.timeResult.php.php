<?php /* Smarty version Smarty-3.1.7, created on 2012-01-20 12:15:29
         compiled from "Z:\home\courses.ru\www\application\views\order\timeResult.php" */ ?>
<?php /*%%SmartyHeaderCode:246974f193ec1b19154-63728270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecc662f73099e76434752a446c64a2538785cb3a' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\order\\timeResult.php',
      1 => 1327054476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246974f193ec1b19154-63728270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'item' => 0,
    'course' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f193ec1bade6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f193ec1bade6')) {function content_4f193ec1bade6($_smarty_tpl) {?><div class='title'>Результат запроса по времени</div>


<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
   <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['user']['mail'];?>
</h3>

   <table class='admin'>
       <tr>
           <th>Название блюда</th>
           <th>Тип блюда</th>
       </tr>
       
      <?php  $_smarty_tpl->tpl_vars['course'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['course']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
   </table>
<?php } ?>
<?php }} ?>