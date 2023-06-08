<?php
/* Smarty version 3.1.31, created on 2023-06-06 22:07:08
  from "cms_template:a_part_top" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_647f91ecda75c5_88118497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e52a7ff02015b3437281cd41feed83ce74fdc3f' => 
    array (
      0 => 'cms_template:a_part_top',
      1 => '1686082027',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647f91ecda75c5_88118497 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\function.cms_get_language.php';
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\function.title.php';
if (!is_callable('smarty_function_sitename')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_metadata')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_root_url')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\function.root_url.php';
if (!is_callable('smarty_function_cms_stylesheet')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\function.cms_stylesheet.php';
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);?>
<!doctype html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>
	<title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
	<?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

	<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/assets/css/main.css" />
	<?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

</head>

<body class ="landing">
    <div id="page-wrapper">
	<header id="header">
	    <h1 id="logo"><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h1>
		<?php echo Navigator::function_plugin(array('template'=>"a_menu_main"),$_smarty_tpl);?>

	</header><?php }
}
