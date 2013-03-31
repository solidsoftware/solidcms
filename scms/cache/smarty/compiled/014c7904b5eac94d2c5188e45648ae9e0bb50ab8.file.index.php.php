<?php /* Smarty version Smarty-3.1.13, created on 2013-03-31 19:23:40
         compiled from "scms/components/messenger/views/index.php" */ ?>
<?php /*%%SmartyHeaderCode:2635295351582acce6bde2-28843148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '014c7904b5eac94d2c5188e45648ae9e0bb50ab8' => 
    array (
      0 => 'scms/components/messenger/views/index.php',
      1 => 1364484905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2635295351582acce6bde2-28843148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display' => 0,
    'class' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51582acce9ef52_25281101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51582acce9ef52_25281101')) {function content_51582acce9ef52_25281101($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['display']->value!='none'){?>
<div class="alert <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
<button type="button" class="close" data-dismiss="alert">×</button>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }else{ ?>
<?php }?>
<?php }} ?>