<?php /* Smarty version Smarty-3.1.21, created on 2022-05-30 21:07:23
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/exim/components/csv_delimiters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8982615866294b37b1ad083-02455361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7833d12cae3303165e0130f7c64d4b954c218f4' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/exim/components/csv_delimiters.tpl',
      1 => 1534396650,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8982615866294b37b1ad083-02455361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'id' => 0,
    'allow_auto_detect' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6294b37b1b9748_00912556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6294b37b1b9748_00912556')) {function content_6294b37b1b9748_00912556($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('auto','comma','semicolon','tab'));
?>

<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['allow_auto_detect']->value) {?>
        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\AdvancedImport\CsvDelimiters::AUTO"), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value==smarty_modifier_enum("Addons\AdvancedImport\CsvDelimiters::AUTO")) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("auto");?>
</option>
    <?php }?>
    <option value="C" <?php if ($_smarty_tpl->tpl_vars['value']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("comma");?>
</option>
    <option value="S" <?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("semicolon");?>
</option>
    <option value="T" <?php if ($_smarty_tpl->tpl_vars['value']->value=="T") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("tab");?>
</option>
</select>
<?php }} ?>
