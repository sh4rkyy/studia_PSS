<?php
/* Smarty version 3.1.31, created on 2023-06-08 15:33:18
  from "module_file_tpl:Gallery;edittemplate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6481d89e33e8c0_63821835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e1902fda34461e0ec91ce7ba847f01df05ee740' => 
    array (
      0 => 'module_file_tpl:Gallery;edittemplate.tpl',
      1 => 1686080323,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6481d89e33e8c0_63821835 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pageoverflow">
<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
</div>
<?php echo $_smarty_tpl->tpl_vars['formstart']->value;
echo $_smarty_tpl->tpl_vars['hidden']->value;?>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_templatename']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['templatename']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_thumbnailsize']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['thumbnailsize']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_maxnumber']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['maxnumber']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['showallimages']->value;?>
)</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_sortingoptions']->value;?>
:</p>
  <fieldset class="pageinput" style="width:400px; padding:6px;"><?php echo $_smarty_tpl->tpl_vars['sortingoptions']->value;?>
</fieldset>
</div>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['submit']->value;
echo $_smarty_tpl->tpl_vars['cancel']->value;
echo $_smarty_tpl->tpl_vars['apply']->value;
echo $_smarty_tpl->tpl_vars['reset']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_template']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['availablevariables']->value;?>
: <a href="#" onclick="togglecollapse('variablesinfo'); return false;"><?php echo $_smarty_tpl->tpl_vars['availablevariableslink']->value;?>
</a></p>
</div>
<div id="variablesinfo" style="display: none;">
<div class="pageoverflow">
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['availablevariableslist']->value;?>
</p>
</div>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_templatecss']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['templatecss']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_templatejs']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['templatejs']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_jsposition']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['jsposition']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['submit']->value;
echo $_smarty_tpl->tpl_vars['cancel']->value;
echo $_smarty_tpl->tpl_vars['apply']->value;
echo $_smarty_tpl->tpl_vars['reset']->value;?>
</p>
</div>
<?php echo $_smarty_tpl->tpl_vars['formend']->value;?>

<?php }
}
