<?php /* Smarty version Smarty-3.1.7, created on 2012-01-20 11:48:50
         compiled from "Z:\home\courses.ru\www\application\views\order\time.php" */ ?>
<?php /*%%SmartyHeaderCode:59654f192b2309ca89-47299438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caaa46ff21f988e5a3befe4b59f5ffff6c56ab9b' => 
    array (
      0 => 'Z:\\home\\courses.ru\\www\\application\\views\\order\\time.php',
      1 => 1327052271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59654f192b2309ca89-47299438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f192b2312d26',
  'variables' => 
  array (
    'error' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f192b2312d26')) {function content_4f192b2312d26($_smarty_tpl) {?><div class='title'>Выберите диапазон дат</div>

<form method='post'>
    <table>
        <tr><td colspan=2><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></td></tr>
        <tr><td>Начальное время</td><td><input type='text' name='time[begin]' value='<?php echo $_smarty_tpl->tpl_vars['time']->value['begin'];?>
'></td></tr>
        <tr><td>Конечное время</td><td><input type='text' name='time[end]' value='<?php echo $_smarty_tpl->tpl_vars['time']->value['end'];?>
'></td></tr>
        <tr><td colspan=2><input type='submit' value=' Отобразить '></td></tr>
    </table>
</form>

<script>
    $('input[type=text]').datepicker();
</script><?php }} ?>