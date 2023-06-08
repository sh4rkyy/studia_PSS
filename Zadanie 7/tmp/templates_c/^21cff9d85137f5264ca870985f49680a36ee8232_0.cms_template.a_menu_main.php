<?php
/* Smarty version 3.1.31, created on 2023-06-06 22:25:26
  from "cms_template:a_menu_main" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_647f9636870904_13510313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21cff9d85137f5264ca870985f49680a36ee8232' => 
    array (
      0 => 'cms_template:a_menu_main',
      1 => '1686083089',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647f9636870904_13510313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'Nav_menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\cmsms-main\\tmp\\templates_c\\^21cff9d85137f5264ca870985f49680a36ee8232_0.cms_template.a_menu_main.php',
    'uid' => '21cff9d85137f5264ca870985f49680a36ee8232',
    'call_name' => 'smarty_template_function_Nav_menu_564710294647f9636814eb7_10236951',
  ),
));
?>


<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>

<nav id="nav">
<ul>
<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['nodes']->value,'depth'=>0), true);?>

</ul>
</nav>
<?php }
}
/* smarty_template_function_Nav_menu_564710294647f9636814eb7_10236951 */
if (!function_exists('smarty_template_function_Nav_menu_564710294647f9636814eb7_10236951')) {
function smarty_template_function_Nav_menu_564710294647f9636814eb7_10236951($_smarty_tpl,$params) {
$params = array_merge(array('depth'=>1), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?>
   
      <li style='white-space: nowrap;'>
          
        <a href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</a>
        
        <?php if (isset($_smarty_tpl->tpl_vars['node']->value->children)) {?>
          <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>

        <?php }?>
      </li>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


<?php
}}
/*/ smarty_template_function_Nav_menu_564710294647f9636814eb7_10236951 */
}
