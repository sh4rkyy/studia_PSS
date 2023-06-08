<?php
/* Smarty version 3.1.31, created on 2023-06-08 17:33:01
  from "cms_template:24" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6481f4ad239694_32569553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbf0a509d1c792b09c8ce07e1559527e0fad4053' => 
    array (
      0 => 'cms_template:24',
      1 => '1686238372',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6481f4ad239694_32569553 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\function.global_content.php';
echo smarty_function_global_content(array('name'=>'a_part_top_gallery'),$_smarty_tpl);?>


	
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                                <h2 class="text-center">Lightbox Gallery</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
		
        </div>
    </div>

<?php echo smarty_function_global_content(array('name'=>'a_part_bottom_gallery'),$_smarty_tpl);
}
}
