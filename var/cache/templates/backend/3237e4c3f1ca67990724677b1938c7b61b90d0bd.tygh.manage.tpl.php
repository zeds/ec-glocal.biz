<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 19:25:50
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/shippings/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1140854754629b332ed1a8e6-05207254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3237e4c3f1ca67990724677b1938c7b61b90d0bd' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/shippings/manage.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1140854754629b332ed1a8e6-05207254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'shippings' => 0,
    'has_permission' => 0,
    'shipping_statuses' => 0,
    'has_available_methods' => 0,
    'settings' => 0,
    'shipping' => 0,
    'allow_save' => 0,
    'usergroups' => 0,
    'link_text' => 0,
    'status_display' => 0,
    'selected_storefront_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b332ed7c466_29239383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b332ed7c466_29239383')) {function content_629b332ed7c466_29239383($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('position_short','name','delivery_time','weight_limit','usergroups','status','edit','view','position_short','name','delivery_time','weight_limit','usergroups','usergroup','tools','delete','status','no_data','add_shipping_method','manage_shippings'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="shippings_form" name="shippings_form" class="<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">

<?php $_smarty_tpl->tpl_vars['shipping_statuses'] = new Smarty_variable(fn_get_default_statuses('',false), null, 0);?>
<?php $_smarty_tpl->tpl_vars['has_permission'] = new Smarty_variable(fn_check_permissions("shippings","update","admin","POST"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['has_available_methods'] = new Smarty_variable(empty($_smarty_tpl->tpl_vars['runtime']->value['company_id'])||in_array($_smarty_tpl->tpl_vars['runtime']->value['company_id'],array_column($_smarty_tpl->tpl_vars['shippings']->value,'company_id')), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['shippings']->value) {?>
    <div id="shippings_content">
        <?php $_smarty_tpl->_capture_stack[0][] = array("shippings_table", null, null); ob_start(); ?>
            <div class="table-responsive-wrapper longtap-selection">
                <table width="100%" class="table table-middle table--relative table-responsive">
                <thead
                    data-ca-bulkedit-default-object="true"
                    data-ca-bulkedit-component="defaultObject"
                >
                <tr>
                    <th width="6%" class="mobile-hide">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>$_smarty_tpl->tpl_vars['has_permission']->value ? $_smarty_tpl->tpl_vars['shipping_statuses']->value : '','is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_available_methods']->value), 0);?>


                        <input type="checkbox"
                            class="bulkedit-toggler hide"
                            data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                            data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                        />
                    </th>
                    <th width="6%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                    <th width="20%"><?php echo $_smarty_tpl->__("name");?>
</th>
                    <th width="10%"><?php echo $_smarty_tpl->__("delivery_time");?>
</th>
                    <th width="10%"><?php echo $_smarty_tpl->__("weight_limit");?>
&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
)</th>
                    <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                        <th width="10%"><?php echo $_smarty_tpl->__("usergroups");?>
</th>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shippings:manage_header")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shippings:manage_header"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shippings:manage_header"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <th width="8%">&nbsp;</th>
                    <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
                </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['shipping'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shippings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->key => $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->_loop = true;
?>

                <?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['shipping']->value,"shippings"), null, 0);?>

                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                    <?php $_smarty_tpl->tpl_vars["status_display"] = new Smarty_variable('', null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["link_text"] = new Smarty_variable($_smarty_tpl->__("edit"), null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["status_display"] = new Smarty_variable("text", null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["link_text"] = new Smarty_variable($_smarty_tpl->__("view"), null, 0);?>
                <?php }?>

                <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['shipping']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-hide-inputs<?php } else { ?>cm-no-hide-input<?php }?>"
                    <?php if ($_smarty_tpl->tpl_vars['has_permission']->value&&$_smarty_tpl->tpl_vars['has_available_methods']->value) {?>
                        data-ca-longtap-action="setCheckBox"
                        data-ca-longtap-target="input.cm-item"
                        data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>  
                >
                    <input type="hidden" name="shipping_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][tax_ids][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['tax_ids'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['tax_ids'], ENT_QUOTES, 'UTF-8');?>
" />
                    
                    <td width="6%" class="mobile-hide">
                        <input type="checkbox" name="shipping_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['shipping']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                    </td>
                    <td width="6%" data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                        <input type="text" name="shipping_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][position]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro input-hidden" /></td>
                    <td width="20%" data-ct-shipping-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                        <a href="<?php echo htmlspecialchars(fn_url("shippings.update?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['shipping']->value), 0);?>

                    </td>
                    <td width="10%" data-th="<?php echo $_smarty_tpl->__("delivery_time");?>
">
                        <input type="text" name="shipping_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][delivery_time]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini input-hidden" /></td>
                    <td width="10%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("weight_limit");?>
&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
)">
                        <input type="text" name="shipping_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][min_weight]" size="4" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['min_weight'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini input-hidden" />&nbsp;-&nbsp;<input type="text" name="shipping_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][max_weight]" size="4" value="<?php if ($_smarty_tpl->tpl_vars['shipping']->value['max_weight']!="0.00") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['max_weight'], ENT_QUOTES, 'UTF-8');
}?>" class="input-mini input-hidden right" /></td>
                    <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
                        <td width="10%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("usergroups");?>
">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('select_mode'=>true,'title'=>$_smarty_tpl->__("usergroup"),'id'=>"ship_data_".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']),'name'=>"shipping_data[".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id'])."][usergroup_ids]",'usergroups'=>$_smarty_tpl->tpl_vars['usergroups']->value,'usergroup_ids'=>$_smarty_tpl->tpl_vars['shipping']->value['usergroup_ids'],'input_extra'=>''), 0);?>

                        </td>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shippings:manage_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shippings:manage_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shippings:manage_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    <td width="8%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shippings:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shippings:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['link_text']->value,'href'=>"shippings.update?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id'])));?>
</li>
                                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"shippings.delete?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']),'method'=>"POST"));?>
</li>
                                <?php }?>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shippings:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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
                    <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['shipping']->value['shipping_id'],'display'=>$_smarty_tpl->tpl_vars['status_display']->value,'status'=>$_smarty_tpl->tpl_vars['shipping']->value['status'],'hidden'=>'','object_id_name'=>"shipping_id",'table'=>"shippings"), 0);?>

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

        <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"shippings_form",'object'=>"shippings",'items'=>Smarty::$_smarty_vars['capture']['shippings_table'],'has_permissions'=>$_smarty_tpl->tpl_vars['has_permission']->value), 0);?>

    <!--shippings_content--></div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
</form>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shippings:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shippings:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shippings:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


    <?php if ($_smarty_tpl->tpl_vars['shippings']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[shippings.m_update]",'but_role'=>"action",'but_target_form'=>"shippings_form",'but_meta'=>"cm-submit"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"shippings.add",'prefix'=>"top",'hide_tools'=>true,'link_text'=>'','title'=>$_smarty_tpl->__("add_shipping_method"),'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("manage_shippings"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true,'select_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->tpl_vars['selected_storefront_id']->value), 0);?>
<?php }} ?>
