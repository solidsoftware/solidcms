<?php /* Smarty version Smarty-3.1.13, created on 2013-03-28 05:24:01
         compiled from "admin/components/button/views/link_button.php" */ ?>
<?php /*%%SmartyHeaderCode:31861514051537181478be0-10640378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e556972755d23f3501d63be6e13503571ee5ec9' => 
    array (
      0 => 'admin/components/button/views/link_button.php',
      1 => 1364421407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31861514051537181478be0-10640378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'size' => 0,
    'ext_attr' => 0,
    'icon' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51537181520628_36567203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51537181520628_36567203')) {function content_51537181520628_36567203($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" class="btn <?php echo $_smarty_tpl->tpl_vars['size']->value;?>
 xhr" <?php echo $_smarty_tpl->tpl_vars['ext_attr']->value;?>
>
	<?php if ($_smarty_tpl->tpl_vars['icon']->value!=''){?>
	<i class="icon <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i>	
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['label']->value;?>

</a> 
<?php }} ?>