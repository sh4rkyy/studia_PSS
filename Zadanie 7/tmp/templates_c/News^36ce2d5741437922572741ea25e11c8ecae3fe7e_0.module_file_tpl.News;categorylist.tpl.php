<?php
/* Smarty version 3.1.31, created on 2023-06-06 23:34:11
  from "module_file_tpl:News;categorylist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_647fa653805067_68076345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36ce2d5741437922572741ea25e11c8ecae3fe7e' => 
    array (
      0 => 'module_file_tpl:News;categorylist.tpl',
      1 => 1686080146,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647fa653805067_68076345 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_cms_function_cms_action_url')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\function.cms_action_url.php';
if (!is_callable('smarty_function_admin_icon')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\admin\\plugins\\function.admin_icon.php';
if (!is_callable('smarty_function_repeat')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\function.repeat.php';
if (!is_callable('smarty_modifier_cms_escape')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\modifier.cms_escape.php';
echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
  $('a.del_cat').click(function(ev){
    var self = $(this);
    ev.preventDefault();
    cms_confirm('<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('areyousure'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
').done(function(){
      window.location = self.attr('href');
    });
  });
});
<?php echo '</script'; ?>
>

<div class="pageoptions"><p class="pageoptions">
  <a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'addcategory'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('addcategory');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'newobject.gif'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('addcategory');?>
</a>
  &nbsp;
  <?php if ($_smarty_tpl->tpl_vars['itemcount']->value > 1) {?><a href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_reorder_cats'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('reorder');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'reorder.gif'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('reorder');?>
</a><?php }?>
</p></div>

<?php if ($_smarty_tpl->tpl_vars['itemcount']->value > 0) {?>
<table class="pagetable">
	<thead>
		<tr>
			<th><?php echo $_smarty_tpl->tpl_vars['categorytext']->value;?>
</th>
			<th class="pageicon">&nbsp;</th>
			<th class="pageicon">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
		<tr class="<?php echo $_smarty_tpl->tpl_vars['entry']->value->rowclass;?>
">
			<td><?php echo smarty_function_repeat(array('string'=>'&nbsp;&gt;&nbsp','times'=>$_smarty_tpl->tpl_vars['entry']->value->depth),$_smarty_tpl);?>
<a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->edit_url;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit');?>
"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->name);?>
</a></td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->edit_url;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'edit.gif'),$_smarty_tpl);?>
</a></td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->delete_url;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('delete');?>
" class="del_cat"><?php echo smarty_function_admin_icon(array('icon'=>'delete.gif'),$_smarty_tpl);?>
</a></td>
		</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</tbody>
</table>
<?php }
}
}
