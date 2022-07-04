<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 04:59:08
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/stripe/views/orders/components/payments/stripe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2060741615629e5c8c3ab691-31787919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d02bb229c8a6d6cccc8a3bba2ca884fa4ca8f71' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/stripe/views/orders/components/payments/stripe.tpl',
      1 => 1654545404,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2060741615629e5c8c3ab691-31787919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'payment_method' => 0,
    'payment_info' => 0,
    'processor_params' => 0,
    'payment_type' => 0,
    'payment_id' => 0,
    'order_id' => 0,
    'stripe_cart_total' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5c8c3dc2b0_93914079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5c8c3dc2b0_93914079')) {function content_629e5c8c3dc2b0_93914079($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['payment_method']->value)===null||$tmp==='' ? array() : $tmp)) {?>
    <?php $_smarty_tpl->tpl_vars['payment_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['payment_method']->value['payment_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['payment_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['payment_info']->value['payment_id'], null, 0);?>
<?php }?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['payment_method']->value['processor_params'])===null||$tmp==='' ? array() : $tmp)) {?>
    <?php $_smarty_tpl->tpl_vars['processor_params'] = new Smarty_variable($_smarty_tpl->tpl_vars['payment_method']->value['processor_params'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['processor_params'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['payment_info']->value['processor_params'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php }?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['processor_params']->value['is_stripe'])===null||$tmp==='' ? false : $tmp)) {?>
    <?php $_smarty_tpl->tpl_vars['payment_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['processor_params']->value['payment_type'])===null||$tmp==='' ? "card" : $tmp), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['payment_type']->value==="card") {?>
        <?php echo smarty_function_script(array('src'=>"js/addons/stripe/views/card.js",'class'=>"cm-ajax-force"),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smarty_function_script(array('src'=>"js/addons/stripe/views/payment_button.js",'class'=>"cm-ajax-force"),$_smarty_tpl);?>

        <?php echo smarty_function_script(array('src'=>"js/addons/stripe/payments/".((string)$_smarty_tpl->tpl_vars['payment_type']->value).".js",'class'=>"cm-ajax-force"),$_smarty_tpl);?>

    <?php }?>
    <div class="litecheckout__group clearfix"
         data-ca-stripe-element="form"
         data-ca-stripe-publishable-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['publishable_key'], ENT_QUOTES, 'UTF-8');?>
"
    >
        <input type="hidden"
               name="payment_info[stripe.payment_intent_id]"
               data-ca-stripe-element="paymentIntentId"
               data-ca-stripe-payment-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-stripe-order-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-stripe-confirmation-url="<?php echo htmlspecialchars(fn_url("stripe.check_confirmation"), ENT_QUOTES, 'UTF-8');?>
"
        />

        <?php echo $_smarty_tpl->getSubTemplate ("addons/stripe/views/checkout/components/payments/".((string)$_smarty_tpl->tpl_vars['payment_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_type'=>$_smarty_tpl->tpl_vars['payment_type']->value,'total'=>$_smarty_tpl->tpl_vars['stripe_cart_total']->value,'currency'=>$_smarty_tpl->tpl_vars['processor_params']->value['currency'],'country'=>$_smarty_tpl->tpl_vars['processor_params']->value['country']), 0);?>

    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/stripe/views/orders/components/payments/stripe.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/stripe/views/orders/components/payments/stripe.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['payment_method']->value)===null||$tmp==='' ? array() : $tmp)) {?>
    <?php $_smarty_tpl->tpl_vars['payment_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['payment_method']->value['payment_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['payment_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['payment_info']->value['payment_id'], null, 0);?>
<?php }?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['payment_method']->value['processor_params'])===null||$tmp==='' ? array() : $tmp)) {?>
    <?php $_smarty_tpl->tpl_vars['processor_params'] = new Smarty_variable($_smarty_tpl->tpl_vars['payment_method']->value['processor_params'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['processor_params'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['payment_info']->value['processor_params'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php }?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['processor_params']->value['is_stripe'])===null||$tmp==='' ? false : $tmp)) {?>
    <?php $_smarty_tpl->tpl_vars['payment_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['processor_params']->value['payment_type'])===null||$tmp==='' ? "card" : $tmp), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['payment_type']->value==="card") {?>
        <?php echo smarty_function_script(array('src'=>"js/addons/stripe/views/card.js",'class'=>"cm-ajax-force"),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smarty_function_script(array('src'=>"js/addons/stripe/views/payment_button.js",'class'=>"cm-ajax-force"),$_smarty_tpl);?>

        <?php echo smarty_function_script(array('src'=>"js/addons/stripe/payments/".((string)$_smarty_tpl->tpl_vars['payment_type']->value).".js",'class'=>"cm-ajax-force"),$_smarty_tpl);?>

    <?php }?>
    <div class="litecheckout__group clearfix"
         data-ca-stripe-element="form"
         data-ca-stripe-publishable-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['publishable_key'], ENT_QUOTES, 'UTF-8');?>
"
    >
        <input type="hidden"
               name="payment_info[stripe.payment_intent_id]"
               data-ca-stripe-element="paymentIntentId"
               data-ca-stripe-payment-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-stripe-order-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-stripe-confirmation-url="<?php echo htmlspecialchars(fn_url("stripe.check_confirmation"), ENT_QUOTES, 'UTF-8');?>
"
        />

        <?php echo $_smarty_tpl->getSubTemplate ("addons/stripe/views/checkout/components/payments/".((string)$_smarty_tpl->tpl_vars['payment_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_type'=>$_smarty_tpl->tpl_vars['payment_type']->value,'total'=>$_smarty_tpl->tpl_vars['stripe_cart_total']->value,'currency'=>$_smarty_tpl->tpl_vars['processor_params']->value['currency'],'country'=>$_smarty_tpl->tpl_vars['processor_params']->value['country']), 0);?>

    </div>
<?php }?>
<?php }?><?php }} ?>
