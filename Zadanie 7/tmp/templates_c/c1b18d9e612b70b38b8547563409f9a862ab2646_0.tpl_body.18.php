<?php
/* Smarty version 3.1.31, created on 2023-06-06 22:12:54
  from "tpl_body:18" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_647f9346bb5fe0_05365220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1b18d9e612b70b38b8547563409f9a862ab2646' => 
    array (
      0 => 'tpl_body:18',
      1 => '1686082373',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647f9346bb5fe0_05365220 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\function.global_content.php';
echo smarty_function_global_content(array('name'=>'a_part_top'),$_smarty_tpl);?>


	<section id="banner">
	    <div class="content">
		<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
		</div>
	</section>

<?php echo smarty_function_global_content(array('name'=>'a_part_bottom'),$_smarty_tpl);
}
}
