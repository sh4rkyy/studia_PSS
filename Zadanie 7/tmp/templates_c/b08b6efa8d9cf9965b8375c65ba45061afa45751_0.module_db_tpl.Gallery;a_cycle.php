<?php
/* Smarty version 3.1.31, created on 2023-06-08 16:21:20
  from "module_db_tpl:Gallery;a_cycle" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6481e3e0deb402_26788051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b08b6efa8d9cf9965b8375c65ba45061afa45751' => 
    array (
      0 => 'module_db_tpl:Gallery;a_cycle',
      1 => 1686234080,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6481e3e0deb402_26788051 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="grid image-grid">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
<div class="grid-block">
    <div class="tile">
	<?php if (!$_smarty_tpl->tpl_vars['image']->value->isdir) {?>
		<img class="tile-img tile-img1" src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" />
	<?php }?>
	    </div>
  </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }
}
