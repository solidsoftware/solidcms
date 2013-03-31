<?php /* Smarty version Smarty-3.1.13, created on 2013-03-28 23:47:20
         compiled from "admin/components/button/views/index.php" */ ?>
<?php /*%%SmartyHeaderCode:213096799551547418c58e59-29590262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ef0dce379003683414ddd94ef4e0a7788fd45cf' => 
    array (
      0 => 'admin/components/button/views/index.php',
      1 => 1364488027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213096799551547418c58e59-29590262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'link' => 0,
    'size' => 0,
    'ext_attr' => 0,
    'icon' => 0,
    'label' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51547418d72570_66497624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51547418d72570_66497624')) {function content_51547418d72570_66497624($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['type']->value=='link'){?>
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" class="btn <?php echo $_smarty_tpl->tpl_vars['size']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['ext_attr']->value;?>
>
	<?php if ($_smarty_tpl->tpl_vars['icon']->value!=''){?><i class="icon <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i><?php }?> <?php echo $_smarty_tpl->tpl_vars['label']->value;?>

</a> 
<?php }elseif($_smarty_tpl->tpl_vars['type']->value=='submit'){?>
<input class="btn <?php echo $_smarty_tpl->tpl_vars['size']->value;?>
" type="submit" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['ext_attr']->value;?>
  />
<?php }elseif($_smarty_tpl->tpl_vars['type']->value=='button'){?>
<button class="btn <?php echo $_smarty_tpl->tpl_vars['size']->value;?>
 " name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['ext_attr']->value;?>
>
	<?php if ($_smarty_tpl->tpl_vars['icon']->value!=''){?><i class="icon <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i><?php }?> <?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</button>
<?php }?>

<?php }} ?>