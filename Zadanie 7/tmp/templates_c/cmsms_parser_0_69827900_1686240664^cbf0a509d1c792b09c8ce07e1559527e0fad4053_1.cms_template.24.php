<?php
/* Smarty version 3.1.31, created on 2023-06-08 18:11:04
  from "cms_template:24" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6481fd98ae2820_39483727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbf0a509d1c792b09c8ce07e1559527e0fad4053' => 
    array (
      0 => 'cms_template:24',
      1 => '1686239549',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6481fd98ae2820_39483727 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\function.global_content.php';
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\function.title.php';
echo smarty_function_global_content(array('name'=>'a_part_top_gallery'),$_smarty_tpl);?>


	
	
	    <div id="main" class="wrapper style1">
	        <div class="container">
	           <header class="major"><h2><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h2></header>
		
		</div>
	</div>

<?php echo smarty_function_global_content(array('name'=>'a_part_bottom_gallery'),$_smarty_tpl);
}
}
