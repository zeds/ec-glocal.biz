<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 05:00:12
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/stripe/hooks/buttons/add_to_cart.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1936991605629e5ccccc53c5-34137781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51bb0d81b0d06e8d6a02087e7ad13daa9d86de1c' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/stripe/hooks/buttons/add_to_cart.post.tpl',
      1 => 1654545404,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1936991605629e5ccccc53c5-34137781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'stripe_payment_buttons' => 0,
    'button' => 0,
    'button_label' => 0,
    'stripe_button_group_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5cccd0a784_70124522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5cccd0a784_70124522')) {function content_629e5cccd0a784_70124522($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('stripe.online_payment','stripe.test_payment','stripe.test_payment.description','stripe.online_payment','stripe.test_payment','stripe.test_payment.description'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><!--Stripe payment buttons-->
<?php $_smarty_tpl->tpl_vars['stripe_button_group_id'] = new Smarty_variable(uniqid(), null, 0);?>
<?php $_smarty_tpl->createLocalArrayVariable('product', null, 0);
$_smarty_tpl->tpl_vars['product']->value['is_vendor_product_list_item'] = (($tmp = @$_smarty_tpl->tpl_vars['product']->value['is_vendor_product_list_item'])===null||$tmp==='' ? false : $tmp);?>
<?php if ($_smarty_tpl->tpl_vars['stripe_payment_buttons']->value&&!$_smarty_tpl->tpl_vars['product']->value['is_vendor_products_list_item']) {?>

    <?php  $_smarty_tpl->tpl_vars['button'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['button']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stripe_payment_buttons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['button']->key => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['button']->value['is_setup']) {?>
            <?php $_smarty_tpl->tpl_vars['button_label'] = new Smarty_variable($_smarty_tpl->__("stripe.online_payment"), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['button']->value['is_test']) {?>
                <?php $_smarty_tpl->tpl_vars['button_label'] = new Smarty_variable($_smarty_tpl->__("stripe.test_payment"), null, 0);?>
            <?php }?>
            <a class="stripe-payment-button stripe-payment-button--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['payment_type'], ENT_QUOTES, 'UTF-8');?>
 hidden"
            data-ca-stripe-element="instantPaymentButton"
            data-ca-stripe-payment-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['payment_type'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-publishable-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['publishable_key'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-currency="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['currency'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-total-raw="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['total_raw'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-total="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['total'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-country="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['country'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-display-items="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['button']->value['display_items']), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-shipping-options="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['button']->value['shipping_options']), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-payment-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-product-options="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['button']->value['product_options']), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-payment-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button_label']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-confirmation-url="<?php echo htmlspecialchars(fn_url("stripe.check_confirmation.instant_payment"), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-button-group-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stripe_button_group_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            lang="<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
            ></a>
            <?php if ($_smarty_tpl->tpl_vars['button']->value['is_test']) {?>
                <?php $_smarty_tpl->_capture_stack[0][] = array("stripe_test_mode_notification", null, null); ob_start(); ?>
                    <div class="stripe-test-mode-notification hidden"
                        data-ca-stripe-test-mode-notification-group-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stripe_button_group_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php echo $_smarty_tpl->__("stripe.test_payment.description");?>

                    </div>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php }?>
        <?php }?>
    <?php } ?>
<?php }?>
<!--/Stripe payment buttons-->
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/stripe/hooks/buttons/add_to_cart.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/stripe/hooks/buttons/add_to_cart.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><!--Stripe payment buttons-->
<?php $_smarty_tpl->tpl_vars['stripe_button_group_id'] = new Smarty_variable(uniqid(), null, 0);?>
<?php $_smarty_tpl->createLocalArrayVariable('product', null, 0);
$_smarty_tpl->tpl_vars['product']->value['is_vendor_product_list_item'] = (($tmp = @$_smarty_tpl->tpl_vars['product']->value['is_vendor_product_list_item'])===null||$tmp==='' ? false : $tmp);?>
<?php if ($_smarty_tpl->tpl_vars['stripe_payment_buttons']->value&&!$_smarty_tpl->tpl_vars['product']->value['is_vendor_products_list_item']) {?>

    <?php  $_smarty_tpl->tpl_vars['button'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['button']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stripe_payment_buttons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['button']->key => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['button']->value['is_setup']) {?>
            <?php $_smarty_tpl->tpl_vars['button_label'] = new Smarty_variable($_smarty_tpl->__("stripe.online_payment"), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['button']->value['is_test']) {?>
                <?php $_smarty_tpl->tpl_vars['button_label'] = new Smarty_variable($_smarty_tpl->__("stripe.test_payment"), null, 0);?>
            <?php }?>
            <a class="stripe-payment-button stripe-payment-button--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['payment_type'], ENT_QUOTES, 'UTF-8');?>
 hidden"
            data-ca-stripe-element="instantPaymentButton"
            data-ca-stripe-payment-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['payment_type'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-publishable-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['publishable_key'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-currency="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['currency'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-total-raw="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['total_raw'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-total="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['total'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-country="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['country'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-display-items="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['button']->value['display_items']), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-shipping-options="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['button']->value['shipping_options']), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-payment-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-product-options="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['button']->value['product_options']), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-payment-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button_label']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-confirmation-url="<?php echo htmlspecialchars(fn_url("stripe.check_confirmation.instant_payment"), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-stripe-button-group-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stripe_button_group_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            lang="<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
            ></a>
            <?php if ($_smarty_tpl->tpl_vars['button']->value['is_test']) {?>
                <?php $_smarty_tpl->_capture_stack[0][] = array("stripe_test_mode_notification", null, null); ob_start(); ?>
                    <div class="stripe-test-mode-notification hidden"
                        data-ca-stripe-test-mode-notification-group-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stripe_button_group_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php echo $_smarty_tpl->__("stripe.test_payment.description");?>

                    </div>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php }?>
        <?php }?>
    <?php } ?>
<?php }?>
<!--/Stripe payment buttons-->
<?php }?><?php }} ?>
