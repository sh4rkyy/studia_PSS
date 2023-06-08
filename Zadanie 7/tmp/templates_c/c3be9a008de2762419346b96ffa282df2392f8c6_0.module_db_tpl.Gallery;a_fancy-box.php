<?php
/* Smarty version 3.1.31, created on 2023-06-08 18:23:58
  from "module_db_tpl:Gallery;a_fancy-box" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6482009ee6fae9_97101371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3be9a008de2762419346b96ffa282df2392f8c6' => 
    array (
      0 => 'module_db_tpl:Gallery;a_fancy-box',
      1 => 1686241437,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6482009ee6fae9_97101371 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
<?php if (!empty($_smarty_tpl->tpl_vars['gallerytitle']->value)) {?><h3><?php echo $_smarty_tpl->tpl_vars['gallerytitle']->value;?>
</h3><?php }
if (!empty($_smarty_tpl->tpl_vars['gallerycomment']->value)) {?><p><?php echo $_smarty_tpl->tpl_vars['gallerycomment']->value;?>
</p><?php }?>
</header>

<div class="row photos">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
<div class="col-4 col-6-xsmall">
	<?php if ($_smarty_tpl->tpl_vars['image']->value->isdir) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" data-lightbox="photos"><img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" data-target="#indicators" data-slide-to="0" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" /></a><br />
		<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>

			<?php } else { ?>
   <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" rel="gallery-<?php echo $_smarty_tpl->tpl_vars['galleryid']->value;?>
" data-lightbox="photos"><img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" data-target="#indicators" data-slide-to="0" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" /></a>
	<?php }?>
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div>

<section>
<?php if ($_smarty_tpl->tpl_vars['pages']->value > 1) {?>
<ul class="actions">
    <li><?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
</li>
</ul>
<?php }?>
</section><?php }
}
