<?php
/* Smarty version 3.1.31, created on 2023-06-08 15:08:51
  from "cms_template:a_news_detail" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6481d2e3e99af8_95785812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '664a89637bfc15d2d655bd65897a2ae9ebf8c9f5' => 
    array (
      0 => 'cms_template:a_news_detail',
      1 => '1686229459',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6481d2e3e99af8_95785812 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_escape')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_modifier_cms_date_format')) require_once 'C:\\xampp\\htdocs\\cmsms-main\\lib\\plugins\\modifier.cms_date_format.php';
?>
<header>
    <h3 id="NewsPostDetailTitle_Date"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
</h3>
    <?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
		<p><?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>
</p>
<?php }?>
</header>


<hr id="NewsPostDetailHorizRule" />

<?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
	<div id="NewsPostDetailSummary">
		<strong>
			<?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

		</strong>
	</div>
<?php }?>

<div id="NewsPostDetailContent">
        
	<?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

</div>

<?php if ($_smarty_tpl->tpl_vars['return_url']->value != '') {?>
<div id="NewsPostDetailReturnLink" class="button small">
        <?php echo $_smarty_tpl->tpl_vars['return_url']->value;
if ($_smarty_tpl->tpl_vars['category_name']->value != '') {?> - <?php echo $_smarty_tpl->tpl_vars['category_link']->value;
}?>
        </div>
<?php }
}
}
