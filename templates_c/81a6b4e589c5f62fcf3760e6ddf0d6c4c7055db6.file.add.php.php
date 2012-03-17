<?php /* Smarty version Smarty-3.1.7, created on 2012-01-20 07:57:14
         compiled from "Z:\home\courses.ru\www\application\views\course\add.php" */ ?>
<?php /*%%SmartyHeaderCode:321834f1837665890f1-31746469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a6b4e589c5f62fcf3760e6ddf0d6c4c7055db6' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\course\\add.php',
      1 => 1327039033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321834f1837665890f1-31746469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f183766613e6',
  'variables' => 
  array (
    'error' => 0,
    'course' => 0,
    'select' => 0,
    'category' => 0,
    'selected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f183766613e6')) {function content_4f183766613e6($_smarty_tpl) {?><div class='title'>Добавление блюда</div>

<form method='post' id='addCourse'>
    <table>
        <tr><td colspan=2><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></td></tr>
        <tr><td>Название</td><td><input type='text' name='course[name]' value='<?php echo $_smarty_tpl->tpl_vars['course']->value['name'];?>
'></td></tr>
        <tr>
            <td>Категория</td>
            <td>
                <select name='course[id_category]'>
                    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                        <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?>
                        <?php if ($_smarty_tpl->tpl_vars['course']->value['id_category']==$_smarty_tpl->tpl_vars['category']->value['id']){?>
                            <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable("selected='selected'", null, 0);?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable('', null, 0);?>
                        <?php }?>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <option value='<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
' <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr><td colspan=2><input type='submit' value=' Сохранить '></td></tr>
    </table>
</form><?php }} ?>