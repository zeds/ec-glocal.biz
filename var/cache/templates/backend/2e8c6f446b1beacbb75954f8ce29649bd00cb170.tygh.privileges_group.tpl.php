<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 19:36:24
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/usergroups/components/privileges_group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1267796715629b35a8ba7420-08089075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8c6f446b1beacbb75954f8ce29649bd00cb170' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/usergroups/components/privileges_group.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1267796715629b35a8ba7420-08089075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group_id' => 0,
    'section_id' => 0,
    'group_name' => 0,
    'group' => 0,
    'manage_privileges_qty' => 0,
    'view_privileges_qty' => 0,
    'show_custom_section' => 0,
    'usergroup_id' => 0,
    'id' => 0,
    'privilege' => 0,
    'privilege_id' => 0,
    'usergroup_privileges' => 0,
    'privileges' => 0,
    'splitted_privilege' => 0,
    'sprivilege' => 0,
    'p' => 0,
    'pr_id' => 0,
    'cell_width' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b35a8bcfb67_19931712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b35a8bcfb67_19931712')) {function content_629b35a8bcfb67_19931712($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_split')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.split.php';
if (!is_callable('smarty_function_math')) include '/home/xb870157/ec-glocal.biz/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('privilege_groups.other','privilege_groups.','select_all'));
?>
<?php $_smarty_tpl->tpl_vars['group_name'] = new Smarty_variable($_smarty_tpl->__("privilege_groups.other"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['group_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['group_name'] = new Smarty_variable($_smarty_tpl->__("privilege_groups.".((string)$_smarty_tpl->tpl_vars['group_id']->value)), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['section_id']->value)."_".((string)$_smarty_tpl->tpl_vars['group_id']->value), null, 0);?>
<div class="control-group">
    <div class="control-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_name']->value, ENT_QUOTES, 'UTF-8');?>
:</div>
    <div class="controls">
        <?php if ($_smarty_tpl->tpl_vars['group_id']->value) {?>
            <?php $_smarty_tpl->tpl_vars['manage_privileges_qty'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['group']->value['action_manage']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['view_privileges_qty'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['group']->value['action_view']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['show_custom_section'] = new Smarty_variable($_smarty_tpl->tpl_vars['manage_privileges_qty']->value>1||$_smarty_tpl->tpl_vars['view_privileges_qty']->value>1, null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/usergroups/components/privileges_access_level_controls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_id'=>$_smarty_tpl->tpl_vars['section_id']->value,'group_id'=>$_smarty_tpl->tpl_vars['group_id']->value,'disable_full_access_level_control'=>$_smarty_tpl->tpl_vars['manage_privileges_qty']->value<1,'disable_view_access_level_control'=>$_smarty_tpl->tpl_vars['view_privileges_qty']->value<1,'show_custom_access_level_control'=>$_smarty_tpl->tpl_vars['show_custom_section']->value), 0);?>

            <div class="privileges-custom-access privileges-custom-access-disabled<?php if (!$_smarty_tpl->tpl_vars['show_custom_section']->value) {?> hidden<?php }?>"
                 id="usergroup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privileges_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-privilege-section-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-privilege-group-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-privilege-usergroup-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php  $_smarty_tpl->tpl_vars['privilege'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['privilege']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['action_manage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['privilege']->key => $_smarty_tpl->tpl_vars['privilege']->value) {
$_smarty_tpl->tpl_vars['privilege']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['privilege_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['privilege']->value['privilege']), null, 0);?>
                    <div>
                        <label class="checkbox inline" for="privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['privilege_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <input type="checkbox"
                                   name="usergroup_data[privileges][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['privilege']->value['privilege'], ENT_QUOTES, 'UTF-8');?>
]"
                                   value="Y"
                                   id="privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['privilege_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                   <?php if ($_smarty_tpl->tpl_vars['usergroup_privileges']->value[$_smarty_tpl->tpl_vars['privilege']->value['privilege']]) {?>checked="checked"<?php }?>
                                   data-ca-privilege-access-type="manage"
                            /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['privilege']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                    </div>
                <?php } ?>
                <?php  $_smarty_tpl->tpl_vars['privilege'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['privilege']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['action_view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['privilege']->key => $_smarty_tpl->tpl_vars['privilege']->value) {
$_smarty_tpl->tpl_vars['privilege']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['privilege_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['privilege']->value['privilege']), null, 0);?>
                    <div>
                        <label class="checkbox inline" for="privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['privilege_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <input type="checkbox"
                                   name="usergroup_data[privileges][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['privilege']->value['privilege'], ENT_QUOTES, 'UTF-8');?>
]"
                                   value="Y"
                                   id="privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['privilege_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                   <?php if ($_smarty_tpl->tpl_vars['usergroup_privileges']->value[$_smarty_tpl->tpl_vars['privilege']->value['privilege']]) {?>checked="checked"<?php }?>
                                   data-ca-privilege-access-type="view"
                            /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['privilege']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                    </div>
                <?php } ?>
            </div>
        <?php } else { ?>
            <div class="table-responsive-wrapper">
                <table width="100%" class="table table-middle table--relative table-group table-responsive table-responsive-w-titles">
                    <thead>
                        <tr>
                            <th width="1%" class="table-group-checkbox">
                                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_target'=>"privilege-check-".((string)$_smarty_tpl->tpl_vars['section_id']->value)."-".((string)$_smarty_tpl->tpl_vars['usergroup_id']->value)), 0);?>
</th>
                            <th width="100%" colspan="5"><?php echo $_smarty_tpl->__("select_all");?>
</th>
                        </tr>
                    </thead>

                    <?php  $_smarty_tpl->tpl_vars['privileges'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['privileges']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['privileges']->key => $_smarty_tpl->tpl_vars['privileges']->value) {
$_smarty_tpl->tpl_vars['privileges']->_loop = true;
?>
                        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['privileges']->value,'size'=>3,'assign'=>"splitted_privilege"),$_smarty_tpl);?>

                        <?php echo smarty_function_math(array('equation'=>"floor(100/x)",'x'=>3,'assign'=>"cell_width"),$_smarty_tpl);?>


                        <?php  $_smarty_tpl->tpl_vars['sprivilege'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sprivilege']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_privilege']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sprivilege']->key => $_smarty_tpl->tpl_vars['sprivilege']->value) {
$_smarty_tpl->tpl_vars['sprivilege']->_loop = true;
?>

                            <tr class="object-group-elements">
                                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sprivilege']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['p']->value&&$_smarty_tpl->tpl_vars['p']->value['description']) {?>
                                        <?php $_smarty_tpl->tpl_vars['pr_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value['privilege'], null, 0);?>
                                        <td width="1%" class="table-group-checkbox">
                                            <input type="checkbox" name="usergroup_data[privileges][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pr_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['usergroup_privileges']->value[$_smarty_tpl->tpl_vars['pr_id']->value]) {?>checked="checked"<?php }?> class="cm-item-privilege-check-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="set_privileges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pr_id']->value, ENT_QUOTES, 'UTF-8');?>
"/></td>
                                        <td width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%"><label for="set_privileges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pr_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label></td>
                                    <?php } else { ?>
                                        <td colspan="2">&nbsp;</td>
                                    <?php }?>
                                <?php } ?>
                            </tr>

                        <?php } ?>
                    <?php } ?>
                </table>
            </div>
        <?php }?>
    </div>
</div>
<?php }} ?>
