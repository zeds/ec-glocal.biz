<?php /* Smarty version Smarty-3.1.21, created on 2022-06-06 19:58:38
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/profiles/components/profile_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1274234710629dddde01d155-75566520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbc7f329e883b8566ae866a497cda01836f4a660' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/profiles/components/profile_fields.tpl',
      1 => 1634720468,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1274234710629dddde01d155-75566520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'exclude' => 0,
    'include' => 0,
    'section' => 0,
    'profile_fields' => 0,
    'field' => 0,
    'key' => 0,
    'fields' => 0,
    'nothing_extra' => 0,
    'title' => 0,
    'shipping_flag' => 0,
    'ship_to_another' => 0,
    'body_id' => 0,
    'default_data_name' => 0,
    'user_data' => 0,
    'profile_data' => 0,
    'id_prefix' => 0,
    'data_id' => 0,
    'var_name' => 0,
    'hash_name' => 0,
    'value' => 0,
    'element_id' => 0,
    'required' => 0,
    'settings' => 0,
    'data_name' => 0,
    'disabled_param' => 0,
    'states' => 0,
    '_country' => 0,
    '_state' => 0,
    'state' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'k' => 0,
    'v' => 0,
    'skip_field' => 0,
    '_class' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629dddde0b9d81_32602719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629dddde0b9d81_32602719')) {function content_629dddde0b9d81_32602719($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('shipping_same_as_billing','text_billing_same_with_shipping','yes','no','select_state','select_country','address_residential','address_commercial','remove_this_item'));
?>





<?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable(array(), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['exclude']->value&&!$_smarty_tpl->tpl_vars['include']->value) {?>
    <?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value], null, 0);?>
<?php } else { ?>
    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value[$_smarty_tpl->tpl_vars['section']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['include']->value) {?>
            <?php if (in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['include']->value)) {?>
                <?php $_smarty_tpl->createLocalArrayVariable('fields', null, 0);
$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['field']->value;?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['exclude']->value) {?>
            <?php if (!in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],$_smarty_tpl->tpl_vars['exclude']->value)) {?>
                <?php $_smarty_tpl->createLocalArrayVariable('fields', null, 0);
$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['field']->value;?>
            <?php }?>
        <?php }?>
    <?php } ?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['fields']->value) {?>

<?php if (!$_smarty_tpl->tpl_vars['nothing_extra']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['shipping_flag']->value) {?>
    <div class="shipping-flag">
        <input class="hidden" id="elm_ship_to_another" type="checkbox" name="ship_to_another" value="1" <?php if ($_smarty_tpl->tpl_vars['ship_to_another']->value) {?>checked="checked"<?php }?> />
        
        <span class="shipping-flag-title">
            <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>
                <?php echo $_smarty_tpl->__("shipping_same_as_billing");?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->__("text_billing_same_with_shipping");?>

            <?php }?>
        </span>

        <label class="radio inline">
            <input class="cm-switch-availability cm-switch-inverse " type="radio" name="ship_to_another" value="0" id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
_suffix_yes" <?php if (!$_smarty_tpl->tpl_vars['ship_to_another']->value) {?>checked="checked"<?php }?> />
            <?php echo $_smarty_tpl->__("yes");?>

        </label>
        
        <label class="radio inline">
            <input class=" cm-switch-availability" type="radio" name="ship_to_another" value="1" id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
_suffix_no" <?php if ($_smarty_tpl->tpl_vars['ship_to_another']->value) {?>checked="checked"<?php }?> />
            <?php echo $_smarty_tpl->__("no");?>

        </label>
    </div>
    
<?php } elseif ($_smarty_tpl->tpl_vars['section']->value=="S") {?>
    <?php $_smarty_tpl->tpl_vars["ship_to_another"] = new Smarty_variable(true, null, 0);?>
    <input type="hidden" name="ship_to_another" value="1" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['body_id']->value) {?>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['body_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['shipping_flag']->value&&!$_smarty_tpl->tpl_vars['ship_to_another']->value) {?>
    <?php $_smarty_tpl->tpl_vars["disabled_param"] = new Smarty_variable("disabled=\"disabled\"", null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["disabled_param"] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['default_data_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['default_data_name']->value)===null||$tmp==='' ? "user_data" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['user_data'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['user_data']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['profile_data'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['profile_data']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user_data']->value : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['fields'] = new Smarty_variable(fn_fill_profile_fields_value($_smarty_tpl->tpl_vars['fields']->value,$_smarty_tpl->tpl_vars['profile_data']->value), null, 0);?>

<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>

<?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['value'], null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']&&$_smarty_tpl->tpl_vars['field']->value['is_default']==smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->tpl_vars['data_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['default_data_name']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['data_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['field_name'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['data_name'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['default_data_name']->value)."[fields]", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['data_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['field_id'], null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['element_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['required'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['required'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::FILE")) {?>
    <?php $_smarty_tpl->tpl_vars['var_name'] = new Smarty_variable("profile_fields[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['hash_name'] = new Smarty_variable(md5($_smarty_tpl->tpl_vars['var_name']->value), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['element_id'] = new Smarty_variable("type_".((string)$_smarty_tpl->tpl_vars['hash_name']->value), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['value']->value['file_name'])) {?>
        <?php $_smarty_tpl->tpl_vars['required'] = new Smarty_variable(smarty_modifier_enum("YesNo::NO"), null, 0);?>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:profile_fields")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:profile_fields"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="control-group profile-field-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_name'], ENT_QUOTES, 'UTF-8');?>
">
    
    <label
        for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="control-label cm-profile-field <?php if ($_smarty_tpl->tpl_vars['required']->value=="Y") {?>cm-required<?php }
if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::PHONE")||($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']=="phone-full")) {?> cm-mask-phone-label <?php }
if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="Z") {?> cm-zipcode<?php }
if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="E") {?> cm-email<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="Z") {
if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }
}
if ($_smarty_tpl->tpl_vars['field']->value['field_type']=="I") {?> cm-trim<?php }?>"
    ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
    

    <div class="controls">

    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::STATE")) {?>
        <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value, null, 0);?>

        <select class="cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?>" id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
>
            <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
            <?php if ($_smarty_tpl->tpl_vars['states']->value&&$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
                <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['_state']->value==$_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            <?php }?>
        </select>
        <input type="text" id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
_d" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" size="32" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" class="cm-state <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?> input-large hidden cm-skip-avail-switch" />

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::COUNTRY")) {?>
        <?php $_smarty_tpl->tpl_vars["_country"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'] : $tmp), null, 0);?>
        <select id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 class="cm-country <?php if ($_smarty_tpl->tpl_vars['section']->value=="S") {?>cm-location-shipping<?php } else { ?>cm-location-billing<?php }?>" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:country_selectbox_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
            <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:country_selectbox_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </select>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::CHECKBOX")) {?>
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
 />
        <label class="checkbox">
        <input type="checkbox" id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['value']->value=="Y") {?>checked="checked"<?php }?> <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
 /></label>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::TEXT_AREA")) {?>
        <textarea class="input-large" id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" cols="32" rows="3" <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::DATE")) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"elm_".((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'date_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'date_val'=>$_smarty_tpl->tpl_vars['value']->value,'extra'=>$_smarty_tpl->tpl_vars['disabled_param']->value), 0);?>


    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::SELECT_BOX")) {?>
        <select id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
 name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
>
            <?php if ($_smarty_tpl->tpl_vars['required']->value!="Y") {?>
            <option value="">--</option>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::RADIO")) {?>
        <div class="select-field">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["rfe"]['first'] = $_smarty_tpl->tpl_vars['v']->first;
?>
        <input class="radio" type="radio" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((!$_smarty_tpl->tpl_vars['value']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['rfe']['first'])||$_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['k']->value) {?>checked="checked"<?php }?> <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>
 /><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</label>
        <?php } ?>
        </div>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::ADDRESS_TYPE")) {?>
        <input class="radio valign <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" type="radio" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
_residential" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="residential" <?php if (!$_smarty_tpl->tpl_vars['value']->value||$_smarty_tpl->tpl_vars['value']->value=="residential") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?> /><span class="radio"><?php echo $_smarty_tpl->__("address_residential");?>
</span>
        <input class="radio valign <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" type="radio" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element_id']->value, ENT_QUOTES, 'UTF-8');?>
_commercial" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="commercial" <?php if ($_smarty_tpl->tpl_vars['value']->value=="commercial") {?>checked="checked"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?> /><span class="radio"><?php echo $_smarty_tpl->__("address_commercial");?>
</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::FILE")) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['value']->value['file_name'])) {?>
            <div class="text-type-value" data-file-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hash_name']->value, ENT_QUOTES, 'UTF-8');?>
">
                <i id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hash_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
" class="icon-remove-sign cm-tooltip hand cm-file-remove <?php if ($_smarty_tpl->tpl_vars['field']->value['required']==smarty_modifier_enum("YesNo::YES")) {?>cm-file-required<?php }?>"></i>
                <span><a href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['value']->value['link'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['file_name'], ENT_QUOTES, 'UTF-8');?>
</a></span>
            </div>
        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>$_smarty_tpl->tpl_vars['var_name']->value,'label_id'=>"elm_".((string)$_smarty_tpl->tpl_vars['id_prefix']->value).((string)$_smarty_tpl->tpl_vars['field']->value['field_id']),'hidden_name'=>((string)$_smarty_tpl->tpl_vars['data_name']->value)."[".((string)$_smarty_tpl->tpl_vars['data_id']->value)."]",'hidden_value'=>(($tmp = @$_smarty_tpl->tpl_vars['value']->value['file_name'])===null||$tmp==='' ? '' : $tmp),'prefix'=>$_smarty_tpl->tpl_vars['id_prefix']->value,'disabled_param'=>$_smarty_tpl->tpl_vars['disabled_param']->value,'max_upload_filesize'=>$_smarty_tpl->tpl_vars['config']->value['tweaks']['profile_field_max_upload_filesize']), 0);?>


    <?php } else { ?>  
        <input
            
            
            type=<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::POSTAL_CODE")||($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::PHONE")||$_smarty_tpl->tpl_vars['data_id']->value=="phone")) {?>"tel"<?php } else { ?>"text"<?php }?>
            
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
            size="32"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="input-large <?php if (($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']=="phone-full")||($_smarty_tpl->tpl_vars['field']->value['field_type']==smarty_modifier_enum("ProfileFieldTypes::PHONE"))) {?> cm-mask-phone<?php }?>"
            <?php echo $_smarty_tpl->tpl_vars['disabled_param']->value;?>

        />
    <?php }?>
    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:profile_fields"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['body_id']->value) {?>
</div>
<?php }?>

<?php }?>
<?php }} ?>
