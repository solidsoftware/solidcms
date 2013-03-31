<?php /* Smarty version Smarty-3.1.13, created on 2013-03-28 23:47:20
         compiled from "admin/components/messenger/views/index.php" */ ?>
<?php /*%%SmartyHeaderCode:71114358051547418dc82a1-53302227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe58a9add737c7113239a84dacc515c1b93e0f69' => 
    array (
      0 => 'admin/components/messenger/views/index.php',
      1 => 1364484905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71114358051547418dc82a1-53302227',
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
  'unifunc' => 'content_51547418dfb989_84647684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51547418dfb989_84647684')) {function content_51547418dfb989_84647684($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['display']->value!='none'){?>
<div class="alert <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
<button type="button" class="close" data-dismiss="alert">×</button>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }else{ ?>
<?php }?>
<?php }} ?>