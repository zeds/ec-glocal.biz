<?php /* Smarty version Smarty-3.1.21, created on 2022-06-08 03:39:23
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/notification_settings/components/receivers_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1282233199629f9b5bccf084-65784881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee210286beeb9d929f21d0e73a33ff943834b8bd' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/notification_settings/components/receivers_editor.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1282233199629f9b5bccf084-65784881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'object_type' => 0,
    'manage_button_text' => 0,
    'is_editable' => 0,
    'object_id' => 0,
    'receiver_type' => 0,
    'receivers' => 0,
    'condition' => 0,
    'receiver_search_methods' => 0,
    'selected_usergroups' => 0,
    'selected_users' => 0,
    'selected_emails' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629f9b5bcf78a5_77329520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629f9b5bcf78a5_77329520')) {function content_629f9b5bcf78a5_77329520($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('manage','view','usergroups','users','emails','cancel','apply'));
?>

<?php $_smarty_tpl->tpl_vars['object_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['object_type']->value)===null||$tmp==='' ? "group" : $tmp), null, 0);?>
<div class="dropdown">
    <a class="btn dropdown-toggle notification-group__toggle-editor" data-toggle="dropdown">
        <?php if ($_smarty_tpl->tpl_vars['manage_button_text']->value) {?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manage_button_text']->value, ENT_QUOTES, 'UTF-8');?>

        <?php } elseif ($_smarty_tpl->tpl_vars['is_editable']->value) {?>
            <?php echo $_smarty_tpl->__("manage");?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("view");?>

        <?php }?>
        <span class="caret mobile-hide"></span>
    </a>
    <div class="dropdown-menu notification-group__editor cm-notification-receivers-editor pull-right"
         data-ca-notification-receivers-editor-cancel-button-selector="[data-ca-notification-receivers-editor-cancel]"
         data-ca-notification-receivers-editor-update-button-selector="[data-ca-notification-receivers-editor-update]"
         data-ca-notification-receivers-editor-receiver-picker-selector="[data-ca-notification-receivers-editor-picker]"
         data-ca-notification-receivers-editor-object-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-ca-notification-receivers-editor-object-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-ca-notification-receivers-editor-submit-url="<?php echo htmlspecialchars(fn_url("notification_settings.update_receivers?receiver_type=".((string)$_smarty_tpl->tpl_vars['receiver_type']->value)), ENT_QUOTES, 'UTF-8');?>
"
         data-ca-notification-receivers-editor-load-url="<?php echo htmlspecialchars(fn_url("notification_settings.manage?receiver_type=".((string)$_smarty_tpl->tpl_vars['receiver_type']->value)), ENT_QUOTES, 'UTF-8');?>
"
         data-ca-notification-receivers-editor-result-ids="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
        <div class="notification-group-editor__body">
            <?php $_smarty_tpl->tpl_vars['seleced_usergroups'] = new Smarty_variable(array(), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['selected_users'] = new Smarty_variable(array(), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['selected_emails'] = new Smarty_variable(array(), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['condition'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['condition']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['receivers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['condition']->key => $_smarty_tpl->tpl_vars['condition']->value) {
$_smarty_tpl->tpl_vars['condition']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['condition']->value->getMethod()===smarty_modifier_enum("ReceiverSearchMethods::USERGROUP_ID")||$_smarty_tpl->tpl_vars['condition']->value->getMethod()===smarty_modifier_enum("ReceiverSearchMethods::ORDER_MANAGER")||$_smarty_tpl->tpl_vars['condition']->value->getMethod()===smarty_modifier_enum("ReceiverSearchMethods::VENDOR_OWNER")) {?>
                    <?php $_smarty_tpl->createLocalArrayVariable('selected_usergroups', null, 0);
$_smarty_tpl->tpl_vars['selected_usergroups']->value[] = $_smarty_tpl->tpl_vars['condition']->value->getCriterion();?>
                <?php } elseif ($_smarty_tpl->tpl_vars['condition']->value->getMethod()===smarty_modifier_enum("ReceiverSearchMethods::USER_ID")) {?>
                    <?php $_smarty_tpl->createLocalArrayVariable('selected_users', null, 0);
$_smarty_tpl->tpl_vars['selected_users']->value[] = $_smarty_tpl->tpl_vars['condition']->value->getCriterion();?>
                <?php } elseif ($_smarty_tpl->tpl_vars['condition']->value->getMethod()===smarty_modifier_enum("ReceiverSearchMethods::EMAIL")) {?>
                    <?php $_smarty_tpl->createLocalArrayVariable('selected_emails', null, 0);
$_smarty_tpl->tpl_vars['selected_emails']->value[] = $_smarty_tpl->tpl_vars['condition']->value->getCriterion();?>
                <?php }?>
            <?php } ?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"notification_settings:receiver_pickers")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"notification_settings:receiver_pickers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['receiver_search_methods']->value[smarty_modifier_enum("ReceiverSearchMethods::USERGROUP_ID")]) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/notification_settings/components/receivers_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('label_text'=>$_smarty_tpl->__("usergroups"),'receiver_search_method'=>smarty_modifier_enum("ReceiverSearchMethods::USERGROUP_ID"),'selected_items'=>$_smarty_tpl->tpl_vars['selected_usergroups']->value,'object_type'=>$_smarty_tpl->tpl_vars['object_type']->value,'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'load_items_url'=>"notification_settings.get_usergroups?type=".((string)$_smarty_tpl->tpl_vars['receiver_type']->value)."&group=".((string)$_smarty_tpl->tpl_vars['object_id']->value),'allow_add'=>false,'is_disabled'=>!$_smarty_tpl->tpl_vars['is_editable']->value), 0);?>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['receiver_search_methods']->value[smarty_modifier_enum("ReceiverSearchMethods::USER_ID")]) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/notification_settings/components/receivers_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('label_text'=>$_smarty_tpl->__("users"),'receiver_search_method'=>smarty_modifier_enum("ReceiverSearchMethods::USER_ID"),'selected_items'=>$_smarty_tpl->tpl_vars['selected_users']->value,'object_type'=>$_smarty_tpl->tpl_vars['object_type']->value,'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'load_items_url'=>"notification_settings.get_users?type=".((string)$_smarty_tpl->tpl_vars['receiver_type']->value)."&group=".((string)$_smarty_tpl->tpl_vars['object_id']->value),'allow_add'=>false,'template_result_selector'=>"#template_result_add_user",'is_disabled'=>!$_smarty_tpl->tpl_vars['is_editable']->value), 0);?>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['receiver_search_methods']->value[smarty_modifier_enum("ReceiverSearchMethods::USER_ID")]) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/notification_settings/components/receivers_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('label_text'=>$_smarty_tpl->__("emails"),'receiver_search_method'=>smarty_modifier_enum("ReceiverSearchMethods::EMAIL"),'selected_items'=>$_smarty_tpl->tpl_vars['selected_emails']->value,'object_type'=>$_smarty_tpl->tpl_vars['object_type']->value,'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'allow_add'=>true,'template_result_new_selector'=>"#template_result_add_email",'show_selected_items'=>true,'is_disabled'=>!$_smarty_tpl->tpl_vars['is_editable']->value), 0);?>

                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"notification_settings:receiver_pickers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['is_editable']->value) {?>
            <div class="notification-group-editor__footer">
                <a class="btn dropdown-toggle notification-group-editor__btn"
                   data-ca-notification-receivers-editor-cancel
                ><?php echo $_smarty_tpl->__("cancel");?>
</a>
                <a class="btn btn-primary notification-group-editor__btn"
                   data-ca-notification-receivers-editor-update
                ><?php echo $_smarty_tpl->__("apply");?>
</a>
            </div>
        <?php }?>
    </div>
</div>
<?php }} ?>
