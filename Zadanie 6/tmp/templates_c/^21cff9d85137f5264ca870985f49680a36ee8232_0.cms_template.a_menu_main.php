<?php
/* Smarty version 3.1.31, created on 2023-05-21 18:15:17
  from "cms_template:a_menu_main" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_646a4395da8c33_82201821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21cff9d85137f5264ca870985f49680a36ee8232' => 
    array (
      0 => 'cms_template:a_menu_main',
      1 => '1684685707',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646a4395da8c33_82201821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'Nav_menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\cmsms\\tmp\\templates_c\\^21cff9d85137f5264ca870985f49680a36ee8232_0.cms_template.a_menu_main.php',
    'uid' => '21cff9d85137f5264ca870985f49680a36ee8232',
    'call_name' => 'smarty_template_function_Nav_menu_219523556646a4395d7cc05_90094472',
  ),
));
?>


<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['nodes']->value,'depth'=>0), true);?>

<?php }
}
/* smarty_template_function_Nav_menu_219523556646a4395d7cc05_90094472 */
if (!function_exists('smarty_template_function_Nav_menu_219523556646a4395d7cc05_90094472')) {
function smarty_template_function_Nav_menu_219523556646a4395d7cc05_90094472($_smarty_tpl,$params) {
$params = array_merge(array('depth'=>1), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a><?php if (isset($_smarty_tpl->tpl_vars['node']->value->children)) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);
}?></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><?php
}}
/*/ smarty_template_function_Nav_menu_219523556646a4395d7cc05_90094472 */
}
