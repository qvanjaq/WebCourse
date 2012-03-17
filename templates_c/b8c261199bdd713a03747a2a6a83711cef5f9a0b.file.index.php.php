<?php /* Smarty version Smarty-3.1.7, created on 2012-01-19 13:36:49
         compiled from "Z:\home\courses.ru\www\application\views\site\index.php" */ ?>
<?php /*%%SmartyHeaderCode:326254f15652fe69e07-15169188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8c261199bdd713a03747a2a6a83711cef5f9a0b' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\site\\index.php',
      1 => 1326973008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326254f15652fe69e07-15169188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f15652fee833',
  'variables' => 
  array (
    '_SERVER' => 0,
    'courses' => 0,
    'category' => 0,
    'i' => 0,
    'cs' => 0,
    'course' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f15652fee833')) {function content_4f15652fee833($_smarty_tpl) {?><a href='<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value['SERVER_NAME'];?>
/site/logout' class='logout'>Выход</a>
<div id='checkboxs'>
   <div id='message'></div>
   <form method='post' id='form'>
      <?php  $_smarty_tpl->tpl_vars['cs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cs']->_loop = false;
 $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->key => $_smarty_tpl->tpl_vars['cs']->value){
$_smarty_tpl->tpl_vars['cs']->_loop = true;
 $_smarty_tpl->tpl_vars['category']->value = $_smarty_tpl->tpl_vars['cs']->key;
?>
         <h3><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</h3>
         <div class='cbBlock'>
         <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
         <?php  $_smarty_tpl->tpl_vars['course'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['course']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['course']->key => $_smarty_tpl->tpl_vars['course']->value){
$_smarty_tpl->tpl_vars['course']->_loop = true;
?>
            <label>
               <input type='checkbox' name='courses[<?php echo $_smarty_tpl->tpl_vars['i']->value-1;?>
][]' value='<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['course']->value['name'];?>

            </label><br>
         <?php } ?>
         </div>
      <?php } ?>
      <button id='order'>Заказать</button>
   </form>
</div><?php }} ?>