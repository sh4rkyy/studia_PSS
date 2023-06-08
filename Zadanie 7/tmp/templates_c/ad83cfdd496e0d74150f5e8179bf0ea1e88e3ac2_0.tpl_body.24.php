<?php
/* Smarty version 3.1.31, created on 2023-06-08 17:52:30
  from "tpl_body:24" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6481f93ec87600_87213275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad83cfdd496e0d74150f5e8179bf0ea1e88e3ac2' => 
    array (
      0 => 'tpl_body:24',
      1 => '1686239549',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6481f93ec87600_87213275 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\function.global_content.php';
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\function.title.php';
echo smarty_function_global_content(array('name'=>'a_part_top_gallery'),$_smarty_tpl);?>


	
	
	    <div id="main" class="wrapper style1">
	        <div class="container">
	           <header class="major"><h2><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h2></header>
		<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
		</div>
	</div>

<?php echo smarty_function_global_content(array('name'=>'a_part_bottom_gallery'),$_smarty_tpl);
}
}
