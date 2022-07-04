<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:21:16
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/product_options/components/option_types.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10999692696294b6bcee9bd8-64340862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05d543dc63007c43f94bc408b928a2f1a22f9f3e' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/product_options/components/option_types.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10999692696294b6bcee9bd8-64340862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display' => 0,
    'value' => 0,
    'selectbox' => 0,
    'radio_group' => 0,
    'checkbox' => 0,
    'input' => 0,
    'text' => 0,
    'file' => 0,
    'option_id' => 0,
    'tag_id' => 0,
    'name' => 0,
    'check' => 0,
    'app_types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294b6bcf23883_13868636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b6bcf23883_13868636')) {function content_6294b6bcf23883_13868636($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('selectbox','radiogroup','checkbox','text','textarea','file','selectbox','radiogroup','checkbox','text','textarea','file'));
?>
<?php $_smarty_tpl->tpl_vars['selectbox'] = new Smarty_variable(smarty_modifier_enum("ProductOptionTypes::SELECTBOX"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['radio_group'] = new Smarty_variable(smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['checkbox'] = new Smarty_variable(smarty_modifier_enum("ProductOptionTypes::CHECKBOX"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['input'] = new Smarty_variable(smarty_modifier_enum("ProductOptionTypes::INPUT"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['text'] = new Smarty_variable(smarty_modifier_enum("ProductOptionTypes::TEXT"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['file'] = new Smarty_variable(smarty_modifier_enum("ProductOptionTypes::FILE"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['display']->value=="view") {
if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['selectbox']->value) {
echo $_smarty_tpl->__("selectbox");
} elseif ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['radio_group']->value) {
echo $_smarty_tpl->__("radiogroup");
} elseif ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['checkbox']->value) {
echo $_smarty_tpl->__("checkbox");
} elseif ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['input']->value) {
echo $_smarty_tpl->__("text");
} elseif ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['text']->value) {
echo $_smarty_tpl->__("textarea");
} elseif ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['file']->value) {
echo $_smarty_tpl->__("file");
}
} else {
if ($_smarty_tpl->tpl_vars['value']->value&&$_smarty_tpl->tpl_vars['option_id']->value) {
if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['selectbox']->value||$_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['radio_group']->value) {
$_smarty_tpl->tpl_vars['app_types'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['selectbox']->value).((string)$_smarty_tpl->tpl_vars['radio_group']->value), null, 0);
} elseif ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['input']->value||$_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['app_types'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['input']->value).((string)$_smarty_tpl->tpl_vars['text']->value), null, 0);
} elseif ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['checkbox']->value) {
$_smarty_tpl->tpl_vars['app_types'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['checkbox']->value), null, 0);
} else {
$_smarty_tpl->tpl_vars['app_types'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['file']->value), null, 0);
}
} else {
$_smarty_tpl->tpl_vars['app_types'] = new Smarty_variable('', null, 0);
}?><select class="cm-option-type-selector" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['check']->value) {?>onchange="fn_check_option_type(this.value, this.id);"<?php }?>><?php if (!$_smarty_tpl->tpl_vars['app_types']->value||($_smarty_tpl->tpl_vars['app_types']->value&&strpos($_smarty_tpl->tpl_vars['app_types']->value,$_smarty_tpl->tpl_vars['selectbox']->value)!==false)) {?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selectbox']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['selectbox']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("selectbox");?>
</option><?php }
if (!$_smarty_tpl->tpl_vars['app_types']->value||($_smarty_tpl->tpl_vars['app_types']->value&&strpos($_smarty_tpl->tpl_vars['app_types']->value,$_smarty_tpl->tpl_vars['radio_group']->value)!==false)) {?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['radio_group']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['radio_group']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("radiogroup");?>
</option><?php }
if (!$_smarty_tpl->tpl_vars['app_types']->value||($_smarty_tpl->tpl_vars['app_types']->value&&strpos($_smarty_tpl->tpl_vars['app_types']->value,$_smarty_tpl->tpl_vars['checkbox']->value)!==false)) {?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['checkbox']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("checkbox");?>
</option><?php }
if (!$_smarty_tpl->tpl_vars['app_types']->value||($_smarty_tpl->tpl_vars['app_types']->value&&strpos($_smarty_tpl->tpl_vars['app_types']->value,$_smarty_tpl->tpl_vars['input']->value)!==false)) {?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['input']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("text");?>
</option><?php }
if (!$_smarty_tpl->tpl_vars['app_types']->value||($_smarty_tpl->tpl_vars['app_types']->value&&strpos($_smarty_tpl->tpl_vars['app_types']->value,$_smarty_tpl->tpl_vars['text']->value)!==false)) {?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['text']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("textarea");?>
</option><?php }
if (!$_smarty_tpl->tpl_vars['app_types']->value||($_smarty_tpl->tpl_vars['app_types']->value&&strpos($_smarty_tpl->tpl_vars['app_types']->value,$_smarty_tpl->tpl_vars['file']->value)!==false)) {?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['file']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("file");?>
</option><?php }?></select><?php }?>
<?php }} ?>
