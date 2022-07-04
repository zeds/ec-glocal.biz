<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 19:36:24
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/usergroups/components/privileges_section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:244552482629b35a8b975f8-96887550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c922814ba1a67e8ed3aead72f4fe760b97b065d' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/usergroups/components/privileges_section.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '244552482629b35a8b975f8-96887550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'section_id' => 0,
    'section' => 0,
    'named_groups_exists' => 0,
    'usergroup_id' => 0,
    'group_id' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b35a8ba3dc5_33573083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b35a8ba3dc5_33573083')) {function content_629b35a8ba3dc5_33573083($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('privilege_sections.'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("privilege_sections.".((string)$_smarty_tpl->tpl_vars['section_id']->value)),'target'=>"#".((string)$_smarty_tpl->tpl_vars['section_id']->value)."_contents"), 0);?>

<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
_contents" class="collapse in collapse-visible">
    <?php $_smarty_tpl->tpl_vars['named_groups_exists'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['section']->value)&&key($_smarty_tpl->tpl_vars['section']->value)!=='', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['named_groups_exists']->value) {?>
        <div class="control-group">
            <div class="controls">
                <?php echo $_smarty_tpl->getSubTemplate ("views/usergroups/components/privileges_access_level_controls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_id'=>$_smarty_tpl->tpl_vars['section_id']->value,'group_id'=>'section_global','usergroup_id'=>$_smarty_tpl->tpl_vars['usergroup_id']->value,'disable_custom_access_level_control'=>true,'hide_controls'=>true), 0);?>

            </div>
        </div>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['group_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['section']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group_id']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/usergroups/components/privileges_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('usergroup_id'=>$_smarty_tpl->tpl_vars['usergroup_id']->value,'section_id'=>$_smarty_tpl->tpl_vars['section_id']->value,'group_id'=>$_smarty_tpl->tpl_vars['group_id']->value,'group'=>$_smarty_tpl->tpl_vars['group']->value), 0);?>

    <?php } ?>
</div>
<?php }} ?>
