<?php /* Smarty version Smarty-3.1.13, created on 2013-03-28 23:47:20
         compiled from "admin/components/breadcrumb/views/top_breadcrumb.php" */ ?>
<?php /*%%SmartyHeaderCode:97616999451547418b2e452-39661884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f93d7c7aebba6d8d0970be7089ee25fe5dd8168' => 
    array (
      0 => 'admin/components/breadcrumb/views/top_breadcrumb.php',
      1 => 1364484256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97616999451547418b2e452-39661884',
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
  'unifunc' => 'content_51547418bc8918_42664011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51547418bc8918_42664011')) {function content_51547418bc8918_42664011($_smarty_tpl) {?><ul class="breadcrumb">
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