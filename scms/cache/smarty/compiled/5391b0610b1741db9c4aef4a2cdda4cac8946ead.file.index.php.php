<?php /* Smarty version Smarty-3.1.13, created on 2013-03-31 19:23:40
         compiled from "scms/components/button/views/index.php" */ ?>
<?php /*%%SmartyHeaderCode:199332826451582accd17440-84872701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5391b0610b1741db9c4aef4a2cdda4cac8946ead' => 
    array (
      0 => 'scms/components/button/views/index.php',
      1 => 1364488027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199332826451582accd17440-84872701',
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
  'unifunc' => 'content_51582acce26fd3_50429739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51582acce26fd3_50429739')) {function content_51582acce26fd3_50429739($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['type']->value=='link'){?>
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