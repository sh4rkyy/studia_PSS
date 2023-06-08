<?php
/* Smarty version 3.1.31, created on 2023-06-08 16:27:44
  from "module_db_tpl:Gallery;a_ae-gallery" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6481e560775009_98183138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7986513ec9d563767fa5f9a5dc45507d17c9342d' => 
    array (
      0 => 'module_db_tpl:Gallery;a_ae-gallery',
      1 => 1686234463,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6481e560775009_98183138 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="box">
      <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
">
          <span><?php echo $_smarty_tpl->tpl_vars['image']->value->title;?>
</span>
  </div>
  </div><?php }
}
