<?php /* Smarty version Smarty-3.1.13, created on 2013-03-31 19:23:40
         compiled from "scms/components/breadcrumb/views/top_breadcrumb.php" */ ?>
<?php /*%%SmartyHeaderCode:124414300151582acc9f90a3-99110443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19bf58ff75fab54771505160a2ad4360d2fe975d' => 
    array (
      0 => 'scms/components/breadcrumb/views/top_breadcrumb.php',
      1 => 1364484256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124414300151582acc9f90a3-99110443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'data' => 0,
    'active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51582accc23da2_73853680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51582accc23da2_73853680')) {function content_51582accc23da2_73853680($_smarty_tpl) {?><ul class="breadcrumb">
	<li><a href="index.php">Home</a> <span class="divider">/</span></li>
	<?php if ($_smarty_tpl->tpl_vars['link']->value!=''){?>
	<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
</a> <span class="divider">/</span></li>
	<?php } ?>
	<?php }?>
  <li class="active"><?php echo $_smarty_tpl->tpl_vars['active']->value;?>
</li>
</ul>
<?php }} ?>