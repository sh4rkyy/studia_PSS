<?php
/* Smarty version 3.1.31, created on 2023-06-08 15:32:26
  from "module_db_tpl:Gallery;Cycle" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6481d86a5a8c87_57121935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc8dbe2e5b63535c68cabc835d718496132af9cf' => 
    array (
      0 => 'module_db_tpl:Gallery;Cycle',
      1 => 1686080323,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6481d86a5a8c87_57121935 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="slides">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
	<?php if (!$_smarty_tpl->tpl_vars['image']->value->isdir) {?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" />
	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div>
<div id="caption">&nbsp;</div><?php }
}
