<?php
/* Smarty version 3.1.31, created on 2023-06-06 23:34:29
  from "module_file_tpl:News;editcategory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_647fa665c45c57_93645565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46dfb2f4a86ed20c66d4bcaf5b70c089acf451ad' => 
    array (
      0 => 'module_file_tpl:News;editcategory.tpl',
      1 => 1686080146,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647fa665c45c57_93645565 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_help')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\admin\\plugins\\function.cms_help.php';
if (!is_callable('smarty_modifier_cms_escape')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\smarty\\plugins\\function.html_options.php';
if (isset($_smarty_tpl->tpl_vars['catid']->value)) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('editcategory');?>
</h3>
<?php } else { ?>
<h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('addcategory');?>
</h3>
<?php }?>
<div class="information"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('info_categories');?>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
  $('#<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel').click(function(){
    $(this).closest('form').attr('novalidate','novalidate');
  });
});
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['startform']->value;?>

	<div class="pageoverflow">
		<p class="pagetext"><label for="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
name">*<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('name');?>
:</label> <?php echo smarty_function_cms_help(array('key'=>'help_category_name','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('name')),$_smarty_tpl);?>
</p>
		<p class="pageinput">
		  <input type="text" id="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
name" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
name" value="<?php echo (($tmp = @smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['name']->value))===null||$tmp==='' ? '' : $tmp);?>
"/ required>
		</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><label for="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
parent"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('parent');?>
:</label> <?php echo smarty_function_cms_help(array('key'=>'help_category_parent','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('parent')),$_smarty_tpl);?>
</p>
		<p class="pageinput">
                  <select id="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
parent" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
parent">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['parent']->value),$_smarty_tpl);?>

                  </select>
                </p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput">
                  <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
"/>
                  <input type="submit" id="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('cancel');?>
"/>
                </p>
	</div>
<?php echo $_smarty_tpl->tpl_vars['endform']->value;
}
}
