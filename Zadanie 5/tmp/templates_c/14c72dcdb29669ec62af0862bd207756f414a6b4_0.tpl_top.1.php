<?php
/* Smarty version 3.1.31, created on 2023-05-21 18:15:17
  from "tpl_top:1" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_646a4395c71ed4_21709688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14c72dcdb29669ec62af0862bd207756f414a6b4' => 
    array (
      0 => 'tpl_top:1',
      1 => '1684680272',
      2 => 'tpl_top',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646a4395c71ed4_21709688 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.cms_get_language.php';
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
"><?php }
}
