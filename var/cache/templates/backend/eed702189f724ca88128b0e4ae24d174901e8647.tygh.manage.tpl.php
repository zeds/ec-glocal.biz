<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 19:40:47
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/notification_settings/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1640927445629b36af95b552-86246238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eed702189f724ca88128b0e4ae24d174901e8647' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/notification_settings/manage.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1640927445629b36af95b552-86246238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_section' => 0,
    'receiver_type' => 0,
    'transports' => 0,
    'event_groups' => 0,
    'events' => 0,
    'event' => 0,
    'array_transports' => 0,
    'template_code' => 0,
    'template_area' => 0,
    'can_edit_email_templates' => 0,
    'event_id' => 0,
    'transport' => 0,
    'transport_name' => 0,
    'is_enabled' => 0,
    'can_update_settings' => 0,
    'group_name' => 0,
    'group_settings' => 0,
    'can_edit_internal_templates' => 0,
    'runtime' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b36af9ba0b4_40996103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b36af9ba0b4_40996103')) {function content_629b36af9ba0b4_40996103($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_count')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('customer_notifications','admin_notifications','vendor_notifications','event.notification_type','event.transport.','notification','event.transport.','receivers','other_notification','other_notifications.title','other_notifications.email_templates','other_notifications.internal_templates','add','notifications'));
?>
<?php $_smarty_tpl->tpl_vars['can_update_settings'] = new Smarty_variable(fn_check_view_permissions("notification_settings.update","POST"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['can_edit_email_templates'] = new Smarty_variable(fn_check_view_permissions("email_templates.manage","GET"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['can_edit_internal_templates'] = new Smarty_variable(fn_check_view_permissions("internal_templates.manage","GET"), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/notification_settings/components/navigation_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active_section'=>$_smarty_tpl->tpl_vars['active_section']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"notification_settings:section_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"notification_settings:section_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['receiver_type']->value==smarty_modifier_enum("UserTypes::CUSTOMER")) {?>
        <?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable($_smarty_tpl->__("customer_notifications"), null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['receiver_type']->value==smarty_modifier_enum("UserTypes::ADMIN")) {?>
        <?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable($_smarty_tpl->__("admin_notifications"), null, 0);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['receiver_type']->value==smarty_modifier_enum("UserTypes::VENDOR")) {?>
        <?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable($_smarty_tpl->__("vendor_notifications"), null, 0);?>
    <?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"notification_settings:section_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="notifications_form" class="form-horizontal form-edit form-setting">
        <input type="hidden" id="receiver_type" name="receiver_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receiver_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php $_smarty_tpl->tpl_vars['rec'] = new Smarty_variable(70/count($_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value]), null, 0);?>
        <table class="table table-responsive table--sticky notification-settings__table">
            <thead class="notification-settings__header">
            <tr>
                <th class="table__head-sticky" width="40%"><?php echo $_smarty_tpl->__("event.notification_type");?>
</th>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['transport'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['transport']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <th class="table__head-sticky"><?php echo $_smarty_tpl->__("event.transport.".((string)$_smarty_tpl->tpl_vars['transport']->value));?>
</th>
                <?php } ?>
                <th class="table__head-sticky" width="15%"></th>
            </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars['events'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['events']->_loop = false;
 $_smarty_tpl->tpl_vars['group_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['event_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['events']->key => $_smarty_tpl->tpl_vars['events']->value) {
$_smarty_tpl->tpl_vars['events']->_loop = true;
 $_smarty_tpl->tpl_vars['group_name']->value = $_smarty_tpl->tpl_vars['events']->key;
?>

                <?php $_smarty_tpl->_capture_stack[0][] = array("events_group", null, null); ob_start(); ?>
                    <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_smarty_tpl->tpl_vars['event_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
 $_smarty_tpl->tpl_vars['event_id']->value = $_smarty_tpl->tpl_vars['event']->key;
?>
                        <?php $_smarty_tpl->tpl_vars['array_transports'] = new Smarty_variable($_smarty_tpl->tpl_vars['event']->value["receivers"][$_smarty_tpl->tpl_vars['receiver_type']->value], null, 0);?>
                        <?php if (!$_smarty_tpl->tpl_vars['array_transports']->value) {?>
                            <?php continue 1;?>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars['template_code'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['event']->value["receivers"][$_smarty_tpl->tpl_vars['receiver_type']->value]["template_code"])===null||$tmp==='' ? '' : $tmp), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['template_area'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['event']->value["receivers"][$_smarty_tpl->tpl_vars['receiver_type']->value]["template_area"])===null||$tmp==='' ? '' : $tmp), null, 0);?>
                        <tr>
                            <td class="notification-settings__name" data-th="<?php echo $_smarty_tpl->__("notification");?>
">
                                <?php if ($_smarty_tpl->tpl_vars['template_code']->value&&$_smarty_tpl->tpl_vars['template_area']->value&&$_smarty_tpl->tpl_vars['can_edit_email_templates']->value) {?>
                                    <a href="<?php echo htmlspecialchars(fn_url("email_templates.update?code=".((string)$_smarty_tpl->tpl_vars['template_code']->value)."&area=".((string)$_smarty_tpl->tpl_vars['template_area']->value)."&event_id=".((string)$_smarty_tpl->tpl_vars['event_id']->value)."&receiver=".((string)$_smarty_tpl->tpl_vars['receiver_type']->value)), ENT_QUOTES, 'UTF-8');?>
">
                                <?php }?>
                                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['event']->value["name"]["template"],$_smarty_tpl->tpl_vars['event']->value["name"]["params"]);?>

                                <?php if (($_smarty_tpl->tpl_vars['template_code']->value)&&$_smarty_tpl->tpl_vars['template_area']->value&&$_smarty_tpl->tpl_vars['can_edit_email_templates']->value) {?>
                                    </a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['description']) {?>
                                    <p class="muted"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['event']->value['description']['template'],$_smarty_tpl->tpl_vars['event']->value['description']['params']);?>
</p>
                                <?php }?>
                            </td>
                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['transport'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['transport']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                <td data-th="<?php echo $_smarty_tpl->__("event.transport.".((string)$_smarty_tpl->tpl_vars['transport']->value));?>
">
                                    <?php if (array_key_exists($_smarty_tpl->tpl_vars['transport']->value,$_smarty_tpl->tpl_vars['array_transports']->value)) {?>
                                        <?php  $_smarty_tpl->tpl_vars['is_enabled'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['is_enabled']->_loop = false;
 $_smarty_tpl->tpl_vars['transport_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['array_transports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['is_enabled']->key => $_smarty_tpl->tpl_vars['is_enabled']->value) {
$_smarty_tpl->tpl_vars['is_enabled']->_loop = true;
 $_smarty_tpl->tpl_vars['transport_name']->value = $_smarty_tpl->tpl_vars['is_enabled']->key;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['transport_name']->value==$_smarty_tpl->tpl_vars['transport']->value) {?>
                                                <input type="hidden"
                                                    name="notification_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event_id']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receiver_type']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['transport_name']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                                    value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
                                                />
                                                <input name="notification_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event_id']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['receiver_type']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['transport_name']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                                    class="checkbox--nomargin"
                                                    type="checkbox"
                                                    value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['is_enabled']->value) {?>checked<?php }?>
                                                    <?php if (!$_smarty_tpl->tpl_vars['can_update_settings']->value) {?>disabled<?php }?>
                                                />
                                            <?php }?>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <span>&mdash;</span>
                                    <?php }?>
                                </td>
                            <?php } ?>
                            <td data-th="">
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['is_configurable']&&$_smarty_tpl->tpl_vars['group_settings']->value[$_smarty_tpl->tpl_vars['group_name']->value][$_smarty_tpl->tpl_vars['receiver_type']->value]['methods']) {?>
                                    <?php ob_start();
echo $_smarty_tpl->__("receivers");
$_tmp1=ob_get_clean();?><?php ob_start();
echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['event']->value['receiver_search_conditions'][$_smarty_tpl->tpl_vars['receiver_type']->value]), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("views/notification_settings/components/receivers_editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_editable'=>$_smarty_tpl->tpl_vars['can_update_settings']->value,'object_type'=>"event",'object_id'=>$_smarty_tpl->tpl_vars['event_id']->value,'receivers'=>$_smarty_tpl->tpl_vars['event']->value['receiver_search_conditions'][$_smarty_tpl->tpl_vars['receiver_type']->value],'receiver_search_methods'=>$_smarty_tpl->tpl_vars['group_settings']->value[$_smarty_tpl->tpl_vars['group_name']->value][$_smarty_tpl->tpl_vars['receiver_type']->value]['methods'],'manage_button_text'=>$_tmp1." (".$_tmp2.")"), 0);?>

                                <?php }?>
                            </td>
                        </tr>
                    <?php } ?>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php if (trim(Smarty::$_smarty_vars['capture']['events_group'])) {?>
                <tbody>
                    <tr class="notification-settings__group">
                        <td data-th=""><h4><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['group_name']->value);?>
</h4></td>
                        <td data-th="" colspan="<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value]), ENT_QUOTES, 'UTF-8');?>
"></td>
                        <td data-th=""></td>
                    </tr>
                    <?php if ($_smarty_tpl->tpl_vars['group_settings']->value[$_smarty_tpl->tpl_vars['group_name']->value][$_smarty_tpl->tpl_vars['receiver_type']->value]['is_configurable']&&$_smarty_tpl->tpl_vars['group_settings']->value[$_smarty_tpl->tpl_vars['group_name']->value][$_smarty_tpl->tpl_vars['receiver_type']->value]['methods']) {?>
                        <tr class="row-gray notification-settings__receiver" id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_name']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <td data-th="" colspan="<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value])+1, ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo $_smarty_tpl->getSubTemplate ("views/notification_settings/components/receivers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"group",'object_id'=>$_smarty_tpl->tpl_vars['group_name']->value,'show_heading'=>true,'receivers'=>$_smarty_tpl->tpl_vars['event']->value['receiver_search_conditions'][$_smarty_tpl->tpl_vars['receiver_type']->value],'values'=>$_smarty_tpl->tpl_vars['event']->value['receiver_search_conditions_readable'][$_smarty_tpl->tpl_vars['receiver_type']->value]), 0);?>

                            </td>
                            <td data-th="">
                                <?php echo $_smarty_tpl->getSubTemplate ("views/notification_settings/components/receivers_editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_editable'=>$_smarty_tpl->tpl_vars['can_update_settings']->value,'object_type'=>"group",'object_id'=>$_smarty_tpl->tpl_vars['group_name']->value,'receivers'=>$_smarty_tpl->tpl_vars['event']->value['receiver_search_conditions'][$_smarty_tpl->tpl_vars['receiver_type']->value],'receiver_search_methods'=>$_smarty_tpl->tpl_vars['group_settings']->value[$_smarty_tpl->tpl_vars['group_name']->value][$_smarty_tpl->tpl_vars['receiver_type']->value]['methods']), 0);?>

                            </td>
                        <!--group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_name']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
                    <?php }?>
                    <?php echo Smarty::$_smarty_vars['capture']['events_group'];?>

                </tbody>
                <?php }?>
            <?php } ?>
            <tfoot>
            <?php if ($_smarty_tpl->tpl_vars['can_edit_email_templates']->value||$_smarty_tpl->tpl_vars['can_edit_internal_templates']->value) {?>
                <tr>
                    <td colspan="<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value])+2, ENT_QUOTES, 'UTF-8');?>
"><h4><?php echo $_smarty_tpl->__("other_notification");?>
</h4></td>
                </tr>
                <tr>
                    <td colspan="<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['transports']->value[$_smarty_tpl->tpl_vars['receiver_type']->value])+2, ENT_QUOTES, 'UTF-8');?>
">
                        <p><?php echo $_smarty_tpl->__("other_notifications.title");?>
</p>
                        <?php if ($_smarty_tpl->tpl_vars['can_edit_email_templates']->value) {?>
                            <p>
                                <a href="<?php echo htmlspecialchars(fn_url("email_templates.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("other_notifications.email_templates");?>
</a>
                            </p>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['can_edit_internal_templates']->value) {?>
                            <p>
                                <a href="<?php echo htmlspecialchars(fn_url("internal_templates.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("other_notifications.internal_templates");?>
</a>
                            </p>
                        <?php }?>
                    </td>
                </tr>
            <?php }?>
            </tfoot>
        </table>
    </form>
    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[notification_settings.m_update]",'but_role'=>"submit-link",'but_target_form'=>"notifications_form"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <template id="template_result_add_email">
        <div class="object-selector-result-wrapper">
            <span class="object-selector-result">
                <span class="object-selector-result__icon-wrapper">
                    <i class="icon-plus-sign object-selector-result__icon"></i>
                </span>
                <span class="object-selector-result__text">
                    <span class="object-selector-result__prefix"><?php echo $_smarty_tpl->__("add");?>
</span>
                    
                    <span class="object-selector-result__body">${data.text}</span>
                    
                </span>
            </span>
        </div>
    </template>

    <template id="template_result_add_user">
        <div class="object-selector-result-wrapper">
            <span class="object-selector-result">
                
                <span class="object-selector-result__text">
                    <span class="object-selector-result__body">${data.name}</span>
                </span>
                <span class="object-selector-result__append">${data.email}</span>
                
                <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
                
                    <div class="object-selector-result__group">${data.company_name}</div>
                
                <?php }?>
            </span>
        </div>
    </template>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>(($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("notifications") : $tmp),'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar_position'=>"right",'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
