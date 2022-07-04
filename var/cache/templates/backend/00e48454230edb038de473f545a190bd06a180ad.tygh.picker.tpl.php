<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 21:40:45
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/shippings/components/picker/rates/picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205935569629b52cdb074a2-52340829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e48454230edb038de473f545a190bd06a180ad' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/shippings/components/picker/rates/picker.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '205935569629b52cdb074a2-52340829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'picker_id' => 0,
    'multiple' => 0,
    'item_ids' => 0,
    'view_only' => 0,
    'shipping_id' => 0,
    'view_mode' => 0,
    'item_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b52cdb1ba69_55036711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b52cdb1ba69_55036711')) {function content_629b52cdb1ba69_55036711($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_to_json')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.to_json.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search','add_all_destinations'));
?>
<?php $_smarty_tpl->tpl_vars['picker_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_id']->value)===null||$tmp==='' ? uniqid() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['multiple'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['multiple']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(array_filter((($tmp = @$_smarty_tpl->tpl_vars['item_ids']->value)===null||$tmp==='' ? array() : $tmp)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['view_only'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['view_only']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<div class="object-picker__simple object-picker__simple--shipping-rates">
    <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
            class="cm-object-picker object-picker__select-native"
            data-ca-object-picker-object-type="shipping-rates"
            data-ca-object-picker-escape-html="false"
            data-ca-object-picker-ajax-url="<?php echo htmlspecialchars(fn_url("destinations.selector?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping_id']->value)), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-ajax-delay="250"
            data-ca-object-picker-template-result-selector="#shipping_rates_picker_result_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-template-selection-selector="#shipping_rates_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-template-selection-load-selector="#shipping_rates_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['view_mode']->value==="external") {?>
                data-ca-object-picker-external-container-selector="#shipping_rates_picker_external_selected_rates_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            data-ca-object-picker-placeholder="<?php echo $_smarty_tpl->__("type_to_search");?>
"
            data-ca-object-picker-autofocus="false"
    >
        <?php  $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->key => $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"></option>
        <?php } ?>
    </select>
    <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
        <a class="btn cm-ajax shipping-rate__add-all" data-ca-target-id="dashboard_shipping_rate" href="<?php echo htmlspecialchars(fn_url("shippings.update?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping_id']->value)."&selected_section=shipping_charges&add_all_destinations"), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("add_all_destinations");?>

        </a>
    <?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value==="external") {?>
    <div class="object-picker__selected-external-container">
        <div id="shipping_rates_picker_external_selected_rates_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="object-picker__selected-external object-picker__selected-external--shipping-rates">
            <?php  $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->key => $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->_loop = true;
?>
                <div class="object-picker__skeleton object-picker__skeleton--shipping-rates" data-data="<?php echo htmlspecialchars(smarty_modifier_to_json(array("id"=>$_smarty_tpl->tpl_vars['item_id']->value)), ENT_QUOTES, 'UTF-8');?>
">
                    <div class="object-picker__skeleton object-picker__skeleton--shipping-rates">...</div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }?>

<?php echo '<script'; ?>
 type="text/template" id="shipping_rates_picker_result_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result object-picker__result--shipping-rates">
        <?php echo $_smarty_tpl->getSubTemplate ("views/shippings/components/picker/rates/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="shipping_rates_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__selection-external object-picker__selection-external--shipping-rates cm-object-picker-object">
        <?php echo $_smarty_tpl->getSubTemplate ("views/shippings/components/picker/rates/item_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="shipping_rates_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__skeleton object-picker__skeleton--shipping-rates">...</div>
<?php echo '</script'; ?>
>
<?php }} ?>
