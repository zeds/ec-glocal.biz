<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 21:40:45
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/shippings/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1579558349629b52cda0cbc6-01760992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43d4b9ec6c65ebe615b79dcc146e9f62ef23f4cf' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/shippings/update.tpl',
      1 => 1626227612,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1579558349629b52cda0cbc6-01760992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipping' => 0,
    'services' => 0,
    'manual' => 0,
    'realtime' => 0,
    'id' => 0,
    'allow_save' => 0,
    'carriers' => 0,
    'carrier_key' => 0,
    'carrier' => 0,
    'service' => 0,
    'usergroups' => 0,
    'delivery_date' => 0,
    'company_field_name' => 0,
    'zero_company_id_name_lang_var' => 0,
    'settings' => 0,
    'is_allow_apply_shippings_to_vendors' => 0,
    'runtime' => 0,
    'hide_for_vendor' => 0,
    'is_sharing_enabled' => 0,
    'add_storefront_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b52cda928d1_62275289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b52cda928d1_62275289')) {function content_629b52cda928d1_62275289($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('information','rate_calculation','rate_calculation_manual_by_rate_area','rate_calculation_by_customer_address','store_locator.pickup_from_store','rate_calculation_realtime_automatic','tools_addons_additional_shipping_methods_msg','shipping_service','name','icon','delivery_time','tt_views_shippings_update_delivery_time','description','availability','usergroups','jp_delivery_date_specify','jp_delivery_date_enable','jp_delivery_date_display_days','jp_delivery_date_desc01','jp_delivery_date_desc02','jp_delivery_date_include_holidays','jp_delivery_date_desc03','jp_delivery_date_desc04','owner','weight_limit','add_shipping_method','shipping_methods','apply_shipping_for_all_vendors','apply_shipping_for_all_vendors_confirm','delete','add_storefronts','all_storefronts','new_shipping_method'));
?>

<?php if ($_smarty_tpl->tpl_vars['shipping']->value) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['storefront_owner_id'] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['shipping']->value['storefront_owner_id']) {?>
    <?php $_smarty_tpl->tpl_vars['storefront_owner_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['shipping']->value['storefront_owner_id'], null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['shipping']->value,"shippings"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['manual'] = new Smarty_variable("M", null, 0);?>
<?php $_smarty_tpl->tpl_vars['realtime'] = new Smarty_variable("R", null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {

    
    var services_data = <?php echo json_encode(array_values($_smarty_tpl->tpl_vars['services']->value));?>
;
    var service_id = <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['service_id'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
;

    $(document).ready(function() {

        $('#elm_carrier').on('change', function() {
            var self = $(this);

            var services = $('#elm_service');
            var option = self.find('option:selected');
            var options = '';

            if (option.data('caShippingModule') === '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manual']->value, ENT_QUOTES, 'UTF-8');?>
') {
                $('#elm_service_group').addClass('hidden');
                $('#input_elm_rate_calculation').val('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manual']->value, ENT_QUOTES, 'UTF-8');?>
');
                $('#configure').hide();
            } else if (option.data('caShippingModule') === 'store_locator') {
                $('#elm_service_group').addClass('hidden');
                $('#input_elm_rate_calculation').val('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['realtime']->value, ENT_QUOTES, 'UTF-8');?>
');
            } else {
                $('#elm_service_group').removeClass('hidden');
                $('#input_elm_rate_calculation').val('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['realtime']->value, ENT_QUOTES, 'UTF-8');?>
');
            }

            services.prop('length', 0);
            for (var k in services_data) {
                if (services_data[k]['module'] === option.data('caShippingModule')) {
                    options += '<option data-ca-shipping-code="' + services_data[k]['code'] +'" data-ca-shipping-module="' + services_data[k]['module'] + '" value="' + services_data[k]['service_id'] + '" ' + (services_data[k]['service_id'] == service_id ? 'selected="selected"' : '') + '>' + services_data[k]['description'] + '</option>';
                }
            }
            services.append(options);
            services.trigger('change');
        });

        $('#elm_service').on('change', function() {
            var self = $(this);
            var option = self.find('option:selected');
            var tabReload = {
                isRequired: true,
            };

            $.ceEvent('trigger', 'ce.shippings.service_changed', [self, option, tabReload]);

            if (tabReload.isRequired === false) {
                return;
            }

            var href = fn_url('shippings.configure?shipping_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
&module=' + option.data('caShippingModule') + '&code=' + option.data('caShippingCode'));
            var tab = $('#configure');

            if (tab.find('a').prop('href') !== href) {

                // Check if configure is active tab.
                if($('[name="selected_section"]').val() === 'configure') {
                    setTimeout(function() {
                        $('#configure a').click();
                    }, 100);
                }

                $('#content_configure').remove();
                tab.find('a').prop('href', href);
            }

            if ($('#input_elm_rate_calculation').val() === "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['realtime']->value, ENT_QUOTES, 'UTF-8');?>
") {
                tab.show();
            }
        });

    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="shippings_form" enctype="multipart/form-data" class="form-horizontal form-edit">
<input type="hidden" name="shipping_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
<div class="hidden<?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>" id="content_general">
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("information"),'target'=>"#acc_information"), 0);?>

<fieldset id="acc_information" class="collapse-visible collapse in">
<input name="shipping_data[rate_calculation]"
    id="input_elm_rate_calculation"
    type="hidden"
    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_calculation']===$_smarty_tpl->tpl_vars['manual']->value||!$_smarty_tpl->tpl_vars['shipping']->value['rate_calculation']) {?>
        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manual']->value, ENT_QUOTES, 'UTF-8');?>
"
    <?php } else { ?>
        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['realtime']->value, ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
/>

<div id="elm_rate_calculation">
    <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>
        <input type="hidden" class="cm-no-hide-input" name="shipping_data[service_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['service_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("rate_calculation");?>
:</label>
        <div class="controls">
        <select name="shipping_data[carrier]" id="elm_carrier">
           <optgroup label="<?php echo $_smarty_tpl->__("rate_calculation_manual_by_rate_area");?>
">
                <option data-ca-shipping-module="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manual']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_calculation']===$_smarty_tpl->tpl_vars['manual']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("rate_calculation_by_customer_address");?>
</option>
                <?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_smarty_tpl->tpl_vars['carrier_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['carriers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['carrier_key']->value = $_smarty_tpl->tpl_vars['carrier']->key;
?>
                    <?php if (($_smarty_tpl->tpl_vars['carrier_key']->value==="store_locator")) {?>
                        <option data-ca-shipping-module="store_locator"
                            <?php if ($_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['shipping']->value['service_id']]['module']==="store_locator") {?>selected="selected"<?php }?>
                        >
                            <?php echo $_smarty_tpl->__("store_locator.pickup_from_store");?>

                        </option>
                    <?php }?>
                <?php } ?>
            </optgroup>
            <optgroup label="<?php echo $_smarty_tpl->__("rate_calculation_realtime_automatic");?>
">
                <?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_smarty_tpl->tpl_vars['carrier_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['carriers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['carrier_key']->value = $_smarty_tpl->tpl_vars['carrier']->key;
?>
                    <?php if (($_smarty_tpl->tpl_vars['carrier_key']->value!=="store_locator")) {?>
                        <option data-ca-shipping-module="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier_key']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['shipping']->value['service_id']]['module']===$_smarty_tpl->tpl_vars['carrier_key']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php }?>
                <?php } ?>
            </optgroup>
        </select>
        <?php if (fn_check_permissions("addons","manage","admin")) {?>
            <div class="well well-small help-block">
                <?php echo $_smarty_tpl->__("tools_addons_additional_shipping_methods_msg",array("[url]"=>fn_url("addons.manage?type=not_installed")));?>

            </div>
        <?php }?>
        </div>
    </div>

    <div class="control-group <?php if ($_smarty_tpl->tpl_vars['shipping']->value['rate_calculation']===$_smarty_tpl->tpl_vars['manual']->value||!$_smarty_tpl->tpl_vars['shipping']->value['rate_calculation']||($_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['shipping']->value['service_id']]['module']==="store_locator")) {?>hidden<?php }?>" id="elm_service_group">
        <label class="control-label"><?php echo $_smarty_tpl->__("shipping_service");?>
:</label>
        <div class="controls">
            <select name="shipping_data[service_id]" id="elm_service">
                <?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['service']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['service']->value['module']===$_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['shipping']->value['service_id']]['module']) {?>
                        <option data-ca-shipping-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service']->value['code'], ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-shipping-module="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service']->value['module'], ENT_QUOTES, 'UTF-8');?>
"
                            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service']->value['service_id'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['service']->value['service_id']===$_smarty_tpl->tpl_vars['shipping']->value['service_id']) {?> selected="selected"<?php }?>
                        >
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service']->value['description'], ENT_QUOTES, 'UTF-8');?>

                        </option>
                    <?php }?>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<div class="control-group">
    <label class="control-label cm-required" for="ship_descr_shipping"><?php echo $_smarty_tpl->__("name");?>
:</label>
    <div class="controls">
        <input type="text" name="shipping_data[shipping]" id="ship_descr_shipping" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"shipping_data[status]",'id'=>"elm_shipping_status",'obj'=>$_smarty_tpl->tpl_vars['shipping']->value), 0);?>


<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("icon");?>
:</label>
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"shipping",'image_object_type'=>"shipping",'image_pair'=>$_smarty_tpl->tpl_vars['shipping']->value['icon'],'no_detailed'=>"Y",'hide_titles'=>"Y",'image_object_id'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    </div>
</div>

<div class="control-group">
    <label class="control-label" for="elm_delivery_time"><?php echo $_smarty_tpl->__("delivery_time");?>
:</label>
    <div class="controls">
        <input type="text" class="input-medium" name="shipping_data[delivery_time]" id="elm_delivery_time" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
" />
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_shippings_update_delivery_time");?>
</p>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="elm_payment_instructions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
:</label>
    <div class="controls">
        <textarea id="elm_payment_instructions_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="shipping_data[description]" cols="55" rows="8" class="cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
    </div>
</div>

</fieldset>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("availability"),'target'=>"#acc_availability"), 0);?>

<fieldset id="acc_availability" class="collapse in">

<?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("usergroups");?>
:</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"elm_ship_data_usergroup_id",'name'=>"shipping_data[usergroup_ids]",'usergroups'=>$_smarty_tpl->tpl_vars['usergroups']->value,'usergroup_ids'=>$_smarty_tpl->tpl_vars['shipping']->value['usergroup_ids'],'input_extra'=>'','list_mode'=>false), 0);?>

        </div>
    </div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_name'=>"shipping_data[localization]",'data_from'=>$_smarty_tpl->tpl_vars['shipping']->value['localization']), 0);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shippings:update_shipping_vendor")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shippings:update_shipping_vendor"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("jp_delivery_date_specify");?>
</label>
    <input type="hidden" name="delivery_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_date']->value['delivery_id'], ENT_QUOTES, 'UTF-8');?>
" />
    <div class="controls">
        <label class="checkbox inline" for="elm_delivery_status">
            <input type="checkbox" name="delivery_status" id="elm_delivery_status" <?php if ($_smarty_tpl->tpl_vars['delivery_date']->value['delivery_status']=="1") {?>checked="checked"<?php }?> class="checkbox" value="1" /><?php echo $_smarty_tpl->__("jp_delivery_date_enable");?>

        </label>
    </div>
</div>

<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("jp_delivery_date_display_days");?>
:</label>
    <div class="controls">
        <?php echo $_smarty_tpl->__("jp_delivery_date_desc01");?>
&nbsp;<input name="delivery_from" class="input-mini" type="text" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_date']->value['delivery_from'], ENT_QUOTES, 'UTF-8');?>
" />&nbsp;<?php echo $_smarty_tpl->__("jp_delivery_date_desc02");?>

        <input type="checkbox" name="include_holidays" id="include_holidays" <?php if ($_smarty_tpl->tpl_vars['delivery_date']->value['include_holidays']=="1") {?>checked="checked"<?php }?> class="checkbox" value="1" />&nbsp;<?php echo $_smarty_tpl->__("jp_delivery_date_include_holidays");?>
）<?php echo $_smarty_tpl->__("jp_delivery_date_desc03");?>
&nbsp;<input name="delivery_to" class="input-mini" type="text" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_date']->value['delivery_to'], ENT_QUOTES, 'UTF-8');?>
" />&nbsp;<?php echo $_smarty_tpl->__("jp_delivery_date_desc04");?>

    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
    <?php if (fn_allowed_for("MULTIVENDOR")) {?>
        <?php $_smarty_tpl->tpl_vars['zero_company_id_name_lang_var'] = new Smarty_variable("marketplace", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['company_field_name'] = new Smarty_variable($_smarty_tpl->__("owner"), null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"shipping_data[company_id]",'id'=>"shipping_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'selected'=>$_smarty_tpl->tpl_vars['shipping']->value['company_id'],'company_field_name'=>$_smarty_tpl->tpl_vars['company_field_name']->value,'zero_company_id_name_lang_var'=>$_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value), 0);?>

<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shippings:update_shipping_vendor"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="control-group">
    <label class="control-label" for="elm_min_weight"><?php echo $_smarty_tpl->__("weight_limit");?>
&nbsp;(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
):</label>
    <div class="controls">
        <input type="text" name="shipping_data[min_weight]" id="elm_min_weight" size="4" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['min_weight'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini" />&nbsp;-&nbsp;<input type="text" name="shipping_data[max_weight]" size="4" value="<?php if ($_smarty_tpl->tpl_vars['shipping']->value['max_weight']!="0.00") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['max_weight'], ENT_QUOTES, 'UTF-8');
}?>" class="input-mini right" />
    </div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shippings:update")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shippings:update"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shippings:update"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shippings:update_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shippings:update_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("add_shipping_method"),'href'=>"shippings.add"));?>
</li>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("shipping_methods"),'href'=>"shippings.manage"));?>
</li>
                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['is_allow_apply_shippings_to_vendors']->value&&fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("apply_shipping_for_all_vendors"),'href'=>"shippings.apply_to_vendors?shipping_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'class'=>"cm-confirm cm-post",'data'=>array('data-ca-confirm-text'=>$_smarty_tpl->__("apply_shipping_for_all_vendors_confirm"))));?>
</li>
                    <?php }?>
                    <li class="divider"></li>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"shippings.delete?shipping_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"));?>
</li>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shippings:update_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[shippings.update]",'but_target_form'=>"shippings_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[shippings.update]",'hide_first_button'=>true,'hide_second_button'=>true,'but_target_form'=>"shippings_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <input type="hidden" name="selected_section" value="general" />
    <!--content_general--></div>

    <div class="hidden <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>" id="content_configure">
    <!--content_configure--></div>

    <div class="hidden <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>" id="content_shipping_charges">
    <?php echo $_smarty_tpl->getSubTemplate ("views/shippings/components/rates.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'shipping'=>$_smarty_tpl->tpl_vars['shipping']->value,'view_only'=>!$_smarty_tpl->tpl_vars['allow_save']->value), 0);?>

    <!--content_shipping_charges--></div>

    <div class="hidden <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>" id="content_additional_settings">
        <?php echo $_smarty_tpl->getSubTemplate ("views/shippings/additional_settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!--content_additional_settings--></div>

    <div class="hidden" id="content_rate_calculation">
        <?php echo $_smarty_tpl->getSubTemplate ("views/shippings/calculate_cost.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!--content_rate_calculation--></div>

    <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE")||$_smarty_tpl->tpl_vars['is_sharing_enabled']->value) {?>
        <div class="hidden <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>" id="content_storefronts">
            <?php $_smarty_tpl->tpl_vars['add_storefront_text'] = new Smarty_variable($_smarty_tpl->__("add_storefronts"), null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/storefronts/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('multiple'=>true,'input_name'=>"shipping_data[storefront_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['shipping']->value['storefront_ids'],'data_id'=>"storefront_ids",'but_meta'=>"pull-right",'no_item_text'=>$_smarty_tpl->__("all_storefronts"),'but_text'=>$_smarty_tpl->tpl_vars['add_storefront_text']->value,'view_only'=>($_smarty_tpl->tpl_vars['is_sharing_enabled']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), 0);?>

        <!--content_storefronts--></div>
    <?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shippings:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shippings:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shippings:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>

<?php }?>

</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['shipping']->value['shipping'] : $_smarty_tpl->__("new_shipping_method"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>true), 0);?>

<?php }} ?>
