<?php /* Smarty version Smarty-3.1.21, created on 2022-06-11 13:30:59
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/data_feeds/views/data_feeds/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42037712962a41a835eb6a1-96386876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9e160f75472ba9f0519d90569fa35377f758174' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/data_feeds/views/data_feeds/manage.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '42037712962a41a835eb6a1-96386876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'selected_storefront_id' => 0,
    'config' => 0,
    'addons' => 0,
    'switch_key' => 0,
    'switch_value' => 0,
    'datafeeds' => 0,
    'data_feed_statuses' => 0,
    'datafeed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a41a83620172_43393962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a41a83620172_43393962')) {function content_62a41a83620172_43393962($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_block_notes')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.notes.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notice','notice','export_cron_hint','notice','name','filename','status','name','filename','tools','local_export','export_to_server','upload_to_ftp','edit','status','no_data','add_datafeed','data_feeds'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"data_feeds:notice")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"data_feeds:notice"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array('title'=>$_smarty_tpl->__("notice"))); $_block_repeat=true; echo smarty_block_notes(array('title'=>$_smarty_tpl->__("notice")), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ((fn_allowed_for("ULTIMATE"))) {?>
    <?php $_smarty_tpl->tpl_vars['switch_key'] = new Smarty_variable("switch_company_id", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['switch_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['switch_key'] = new Smarty_variable("s_storefront", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['switch_value'] = new Smarty_variable($_smarty_tpl->tpl_vars['selected_storefront_id']->value, null, 0);?>
<?php }?>
<p><?php echo $_smarty_tpl->__("export_cron_hint");?>
:<br />
    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['data_feeds']['cron_password'], ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars(fn_get_console_command("php /path/to/cart/",$_smarty_tpl->tpl_vars['config']->value['admin_index'],array("dispatch"=>"exim.cron_export","cron_password"=>$_tmp1,$_smarty_tpl->tpl_vars['switch_key']->value=>$_smarty_tpl->tpl_vars['switch_value']->value)), ENT_QUOTES, 'UTF-8');?>

    </p>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array('title'=>$_smarty_tpl->__("notice")), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"data_feeds:notice"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="manage_datafeeds_form" name="manage_datafeeds_form">

<?php $_smarty_tpl->tpl_vars['data_feed_statuses'] = new Smarty_variable(fn_get_default_statuses('',false), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['datafeeds']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("data_feeds_table", null, null); ob_start(); ?>
        <div class="table-responsive-wrapper longtap-selection">
            <table class="table sortable table-middle table--relative table-responsive">
            <thead
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
            >
                <tr>
                    <th width="6%" class="left mobile-hide">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>$_smarty_tpl->tpl_vars['data_feed_statuses']->value), 0);?>


                        <input type="checkbox"
                            class="bulkedit-toggler hide"
                            data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                            data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                        />
                    </th>
                    <th width="45%" class="nowrap"><?php echo $_smarty_tpl->__("name");?>
</th>
                    <th width="35%" class="nowrap"><?php echo $_smarty_tpl->__("filename");?>
</th>
                    <th width="8%" class="nowrap">&nbsp;</th>
                    <th width="8%" class="nowrap right"><?php echo $_smarty_tpl->__("status");?>
</th>
                </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars['datafeed'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datafeed']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datafeeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datafeed']->key => $_smarty_tpl->tpl_vars['datafeed']->value) {
$_smarty_tpl->tpl_vars['datafeed']->_loop = true;
?>
            <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['datafeed']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
                data-ca-longtap-action="setCheckBox"
                data-ca-longtap-target="input.cm-item"
                data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'], ENT_QUOTES, 'UTF-8');?>
"
            >
                <td width="6%" class="left mobile-hide">
                    <input type="checkbox" name="datafeed_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'], ENT_QUOTES, 'UTF-8');?>
" class="checkbox cm-item cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['datafeed']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                </td>

                <td width="45%" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                    <a href="<?php echo htmlspecialchars(fn_url("data_feeds.update?datafeed_id=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed']->value['datafeed_name'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['datafeed']->value), 0);?>

                </td>

                <td width="35%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("filename");?>
">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed']->value['file_name'], ENT_QUOTES, 'UTF-8');?>

                </td>

                <td width="8%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm cm-ajax cm-comet",'text'=>$_smarty_tpl->__("local_export"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])."&location=L&".((string)$_smarty_tpl->tpl_vars['switch_key']->value)."=".((string)$_smarty_tpl->tpl_vars['switch_value']->value)));?>
</li>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm cm-ajax cm-comet",'text'=>$_smarty_tpl->__("export_to_server"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])."&location=S&".((string)$_smarty_tpl->tpl_vars['switch_key']->value)."=".((string)$_smarty_tpl->tpl_vars['switch_value']->value)));?>
</li>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm cm-ajax cm-comet",'text'=>$_smarty_tpl->__("upload_to_ftp"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])."&location=F&".((string)$_smarty_tpl->tpl_vars['switch_key']->value)."=".((string)$_smarty_tpl->tpl_vars['switch_value']->value)));?>
</li>
                        <li class="divider"></li>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"data_feeds.update?datafeed_id=".((string)$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'])));?>
</li>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <div class="hidden-tools">
                        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                    </div>
                </td>

                <td width="8%" class="nowrap right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['datafeed']->value['datafeed_id'],'status'=>$_smarty_tpl->tpl_vars['datafeed']->value['status'],'hidden'=>false,'object_id_name'=>"datafeed_id",'table'=>"data_feeds"), 0);?>

                </td>

            </tr>
            <?php } ?>
            </table>
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"manage_datafeeds_form",'object'=>"data_feeds",'items'=>Smarty::$_smarty_vars['capture']['data_feeds_table']), 0);?>

<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php ob_start();
echo $_smarty_tpl->__("add_datafeed");
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"data_feeds.add",'prefix'=>"bottom",'title'=>$_tmp2,'hide_tools'=>true,'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("data_feeds"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'tools'=>Smarty::$_smarty_vars['capture']['tools'],'select_languages'=>true,'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_storefront'=>true,'show_all_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id"), 0);?>

<?php }} ?>
