<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 19:21:34
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/pickers/profile_fields/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1251812189629b322e7ab593-23323945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1517f961e0e9fcb0c6f7ceb9f786dbc7f84a96b' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/pickers/profile_fields/js.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1251812189629b322e7ab593-23323945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'clone' => 0,
    'holder' => 0,
    'field_id' => 0,
    'sortable' => 0,
    'description' => 0,
    'adjust_requireability' => 0,
    'field_name' => 0,
    'disable_required' => 0,
    'required' => 0,
    'disable_description' => 0,
    'view_only' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b322e7deed4_05063791',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b322e7deed4_05063791')) {function content_629b322e7deed4_05063791($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_in_array')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.in_array.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('id','description','required','required_profile_field_description','edit','remove'));
?>
<tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['sortable']->value) {?> profile-field-picker__sortable-row<?php }
if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <td width="1%" data-th="&nbsp;">
        <?php if ($_smarty_tpl->tpl_vars['sortable']->value) {?>
            <input type="hidden" name="field_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <span class="handler"></span>
        <?php }?>
    </td>
    <td data-th="<?php echo $_smarty_tpl->__("id");?>
">
        <a href="<?php echo htmlspecialchars(fn_url("profile_fields.update?field_id=".((string)$_smarty_tpl->tpl_vars['field_id']->value)), ENT_QUOTES, 'UTF-8');?>
">&nbsp;<span>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
</span>&nbsp;</a></td>
    <td data-th="<?php echo $_smarty_tpl->__("description");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8');?>
</td>
    <td <?php if ($_smarty_tpl->tpl_vars['adjust_requireability']->value===false) {?>class="hidden"<?php }?> data-th="<?php echo $_smarty_tpl->__("required");?>
">
        <input type="hidden"
            name="block_data[content][items][required][field_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
            value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['clone']->value||smarty_modifier_in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['disable_required']->value)) {?>
                disabled
            <?php }?>
        >
        <input type="checkbox"
            name="block_data[content][items][required][field_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
            value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['required']->value===smarty_modifier_enum("YesNo::YES")) {?>
                checked
            <?php }?>
            <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['disable_required']->value)) {?>
                disabled
                <?php if ($_smarty_tpl->tpl_vars['disable_description']->value[$_smarty_tpl->tpl_vars['field_name']->value]) {?>
                    title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['disable_description']->value[$_smarty_tpl->tpl_vars['field_name']->value], ENT_QUOTES, 'UTF-8');?>
"
                <?php } else { ?>
                    title="<?php echo htmlspecialchars($_smarty_tpl->__("required_profile_field_description",array("[field_name]"=>$_smarty_tpl->tpl_vars['description']->value)), ENT_QUOTES, 'UTF-8', true);?>
"
                <?php }?>
            <?php }?>
        >
    </td>
    <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
    <td class="nowrap" data-th="&nbsp;">
        <div class="hidden-tools">
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"profile_fields.update?field_id=".((string)$_smarty_tpl->tpl_vars['field_id']->value)));?>
</li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['field_id']->value)."', 'pf_'); return false;"));?>
</li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
    <?php }?>
</tr>
<?php }} ?>
