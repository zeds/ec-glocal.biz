<?php /* Smarty version Smarty-3.1.21, created on 2022-06-22 15:51:08
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/blocks/checkout/order_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182906214462b2bbdc6d4635-08564873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '493999f6d4b12c83b6550a8cfb1b1d6b17d4668a' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/blocks/checkout/order_info.tpl',
      1 => 1653909591,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '182906214462b2bbdc6d4635-08564873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'completed_steps' => 0,
    'block' => 0,
    'settings' => 0,
    'profile_fields' => 0,
    'cart' => 0,
    'field' => 0,
    'value' => 0,
    'jp_company_country' => 0,
    'group_key' => 0,
    'shipping_id' => 0,
    'product_groups' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b2bbdc766c99_95530988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b2bbdc766c99_95530988')) {function content_62b2bbdc766c99_95530988($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/xb870157/ec-glocal.biz/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('billing_address','dear','shipping_address','dear','shipping_method','billing_address','dear','shipping_address','dear','shipping_method'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['completed_steps']->value['step_two']) {?>
    <div class="ty-order-info" id="checkout_order_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->tpl_vars["profile_fields"] = new Smarty_variable(fn_get_profile_fields("I"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["jp_company_country"] = new Smarty_variable(fn_get_country_name($_smarty_tpl->tpl_vars['settings']->value['Company']['company_country']), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
            <h4 class="ty-order-info__title"><?php echo $_smarty_tpl->__("billing_address");?>
:</h4>

            <ul id="tygh_billing_adress" class="ty-order-info__profile-field clearfix">
                <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value['B']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable(fn_get_profile_field_value($_smarty_tpl->tpl_vars['cart']->value['user_data'],$_smarty_tpl->tpl_vars['field']->value), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['value']->value&&$_smarty_tpl->tpl_vars['field']->value['class']!='first-name-kana'&&$_smarty_tpl->tpl_vars['field']->value['class']!='last-name-kana') {?>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['class']!='billing-country'||$_smarty_tpl->tpl_vars['value']->value!=$_smarty_tpl->tpl_vars['jp_company_country']->value) {?>
                            <li class="ty-order-info__profile-field-item <?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['field_name'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['class']=='billing-last-name') {?> <?php echo $_smarty_tpl->__("dear");
}?></li>
                        <?php }?>
                    <?php }?>
                <?php } ?>
            </ul>

            <hr class="shipping-adress__delim" />
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
            <h4 class="ty-order-info__title"><?php echo $_smarty_tpl->__("shipping_address");?>
:</h4>
            <ul id="tygh_shipping_adress" class="ty-order-info__profile-field clearfix">
                <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value['S']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable(fn_get_profile_field_value($_smarty_tpl->tpl_vars['cart']->value['user_data'],$_smarty_tpl->tpl_vars['field']->value), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['value']->value&&$_smarty_tpl->tpl_vars['field']->value['class']!='first-name-kana'&&$_smarty_tpl->tpl_vars['field']->value['class']!='last-name-kana') {?>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['class']!='shipping-country'||$_smarty_tpl->tpl_vars['value']->value!=$_smarty_tpl->tpl_vars['jp_company_country']->value) {?>
                            <li class="ty-order-info__profile-field-item <?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['field_name'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['class']=='shipping-last-name') {?> <?php echo $_smarty_tpl->__("dear");
}?></li>
                        <?php }?>
                    <?php }?>
                <?php } ?>
            </ul>
            <hr class="shipping-adress__delim" />
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_failed']&&!empty($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'])&&$_smarty_tpl->tpl_vars['cart']->value['shipping_required']) {?>
            <h4><?php echo $_smarty_tpl->__("shipping_method");?>
:</h4>
            <ul id="tygh_shipping_method">
                <?php  $_smarty_tpl->tpl_vars["shipping_id"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping_id"]->_loop = false;
 $_smarty_tpl->tpl_vars["group_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['chosen_shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping_id"]->key => $_smarty_tpl->tpl_vars["shipping_id"]->value) {
$_smarty_tpl->tpl_vars["shipping_id"]->_loop = true;
 $_smarty_tpl->tpl_vars["group_key"]->value = $_smarty_tpl->tpl_vars["shipping_id"]->key;
?>
                    <li>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_method_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_method_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_groups']->value[$_smarty_tpl->tpl_vars['group_key']->value]['shippings'][$_smarty_tpl->tpl_vars['shipping_id']->value]['shipping'], ENT_QUOTES, 'UTF-8');?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_method_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </li>
                <?php } ?>
            </ul>
        <?php }?>
    <!--checkout_order_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php $_smarty_tpl->tpl_vars["block_wrap"] = new Smarty_variable("checkout_order_info_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."_wrap", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["block_wrap"] = clone $_smarty_tpl->tpl_vars["block_wrap"];?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/checkout/order_info.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/checkout/order_info.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['completed_steps']->value['step_two']) {?>
    <div class="ty-order-info" id="checkout_order_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->tpl_vars["profile_fields"] = new Smarty_variable(fn_get_profile_fields("I"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["jp_company_country"] = new Smarty_variable(fn_get_country_name($_smarty_tpl->tpl_vars['settings']->value['Company']['company_country']), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
            <h4 class="ty-order-info__title"><?php echo $_smarty_tpl->__("billing_address");?>
:</h4>

            <ul id="tygh_billing_adress" class="ty-order-info__profile-field clearfix">
                <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value['B']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable(fn_get_profile_field_value($_smarty_tpl->tpl_vars['cart']->value['user_data'],$_smarty_tpl->tpl_vars['field']->value), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['value']->value&&$_smarty_tpl->tpl_vars['field']->value['class']!='first-name-kana'&&$_smarty_tpl->tpl_vars['field']->value['class']!='last-name-kana') {?>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['class']!='billing-country'||$_smarty_tpl->tpl_vars['value']->value!=$_smarty_tpl->tpl_vars['jp_company_country']->value) {?>
                            <li class="ty-order-info__profile-field-item <?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['field_name'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['class']=='billing-last-name') {?> <?php echo $_smarty_tpl->__("dear");
}?></li>
                        <?php }?>
                    <?php }?>
                <?php } ?>
            </ul>

            <hr class="shipping-adress__delim" />
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
            <h4 class="ty-order-info__title"><?php echo $_smarty_tpl->__("shipping_address");?>
:</h4>
            <ul id="tygh_shipping_adress" class="ty-order-info__profile-field clearfix">
                <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value['S']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable(fn_get_profile_field_value($_smarty_tpl->tpl_vars['cart']->value['user_data'],$_smarty_tpl->tpl_vars['field']->value), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['value']->value&&$_smarty_tpl->tpl_vars['field']->value['class']!='first-name-kana'&&$_smarty_tpl->tpl_vars['field']->value['class']!='last-name-kana') {?>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value['class']!='shipping-country'||$_smarty_tpl->tpl_vars['value']->value!=$_smarty_tpl->tpl_vars['jp_company_country']->value) {?>
                            <li class="ty-order-info__profile-field-item <?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['field_name'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['class']=='shipping-last-name') {?> <?php echo $_smarty_tpl->__("dear");
}?></li>
                        <?php }?>
                    <?php }?>
                <?php } ?>
            </ul>
            <hr class="shipping-adress__delim" />
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['cart']->value['shipping_failed']&&!empty($_smarty_tpl->tpl_vars['cart']->value['chosen_shipping'])&&$_smarty_tpl->tpl_vars['cart']->value['shipping_required']) {?>
            <h4><?php echo $_smarty_tpl->__("shipping_method");?>
:</h4>
            <ul id="tygh_shipping_method">
                <?php  $_smarty_tpl->tpl_vars["shipping_id"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping_id"]->_loop = false;
 $_smarty_tpl->tpl_vars["group_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['chosen_shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping_id"]->key => $_smarty_tpl->tpl_vars["shipping_id"]->value) {
$_smarty_tpl->tpl_vars["shipping_id"]->_loop = true;
 $_smarty_tpl->tpl_vars["group_key"]->value = $_smarty_tpl->tpl_vars["shipping_id"]->key;
?>
                    <li>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:shipping_method_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:shipping_method_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_groups']->value[$_smarty_tpl->tpl_vars['group_key']->value]['shippings'][$_smarty_tpl->tpl_vars['shipping_id']->value]['shipping'], ENT_QUOTES, 'UTF-8');?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:shipping_method_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </li>
                <?php } ?>
            </ul>
        <?php }?>
    <!--checkout_order_info_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php $_smarty_tpl->tpl_vars["block_wrap"] = new Smarty_variable("checkout_order_info_".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])."_wrap", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["block_wrap"] = clone $_smarty_tpl->tpl_vars["block_wrap"];?>
<?php }?><?php }} ?>
