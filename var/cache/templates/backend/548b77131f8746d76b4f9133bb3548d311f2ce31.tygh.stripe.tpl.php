<?php /* Smarty version Smarty-3.1.21, created on 2022-06-08 21:57:04
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/stripe/views/orders/components/payments/stripe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127208175462a09ca07d6963-88740626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '548b77131f8746d76b4f9133bb3548d311f2ce31' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/stripe/views/orders/components/payments/stripe.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '127208175462a09ca07d6963-88740626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_method' => 0,
    'payment_info' => 0,
    'processor_params' => 0,
    'cart' => 0,
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a09ca07f3a71_27586963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a09ca07f3a71_27586963')) {function content_62a09ca07f3a71_27586963($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('card_number','valid_thru','cardholder_name','cvv2','what_is_cvv2','what_is_cvv2','visa_card_discover','credit_card_info','american_express','american_express_info','zip_postal_code'));
?>


<?php if ((($tmp = @$_smarty_tpl->tpl_vars['payment_method']->value['processor_params'])===null||$tmp==='' ? array() : $tmp)) {?>
    <?php $_smarty_tpl->tpl_vars['processor_params'] = new Smarty_variable($_smarty_tpl->tpl_vars['payment_method']->value['processor_params'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['processor_params'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['payment_info']->value['processor_params'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php }?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['processor_params']->value['is_stripe'])===null||$tmp==='' ? false : $tmp)) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/stripe/views/card.js"),$_smarty_tpl);?>


    <div class="clearfix"
         data-ca-stripe-element="form"
         data-ca-stripe-publishable-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['publishable_key'], ENT_QUOTES, 'UTF-8');?>
"
    >
        <input type="hidden"
               name="payment_info[stripe.payment_intent_id]"
               data-ca-stripe-element="paymentIntentId"
               data-ca-stripe-payment-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
               data-ca-stripe-confirmation-url="<?php echo htmlspecialchars(fn_url("stripe.check_confirmation"), ENT_QUOTES, 'UTF-8');?>
"
               data-ca-stripe-process-payment-name="dispatch[order_management.place_order]"
        />

        <div class="stripe-payment-form__section stripe-payment-form__section--card">
            <div class="ty-credit-card cm-cc_form">
                <div class="ty-credit-card__control-group control-group ty-control-group">
                    <label for="credit_card_number"
                           class="control-group ty-control-group__title cm-cc-number cc-number cm-required"
                    ><?php echo $_smarty_tpl->__("card_number");?>
</label>
                    <div class="stripe-payment-form__card"
                         data-ca-stripe-element="card"
                    ></div>
                </div>

                <div class="ty-credit-card__control-group control-group ty-control-group">
                    <label for="credit_card_month"
                           class="control-group ty-control-group__title cm-cc-date cc-date cm-cc-exp-month cm-required"
                    ><?php echo $_smarty_tpl->__("valid_thru");?>
</label>
                    <div class="stripe-payment-form__expiry"
                         data-ca-stripe-element="expiry"
                    ></div>
                </div>

                <div class="ty-credit-card__control-group control-group ty-control-group">
                    <label for="credit_card_name"
                           class="control-group ty-control-group__title cm-required"
                    ><?php echo $_smarty_tpl->__("cardholder_name");?>
</label>
                    <input size="35"
                           type="text"
                           id="credit_card_name"
                           value=""
                           class="cm-cc-name ty-credit-card__input ty-uppercase"
                           data-ca-stripe-element="name"
                    />
                </div>
            </div>

            <div class="control-group ty-control-group ty-credit-card__cvv-field cvv-field">
                <label for="credit_card_cvv2" class="control-group ty-control-group__title cm-required cm-cc-cvv2  cc-cvv2 cm-autocomplete-off"><?php echo $_smarty_tpl->__("cvv2");?>
</label>
                <div class="stripe-payment-form__cvc"
                     data-ca-stripe-element="cvc"
                ></div>

                <div class="cvv2">
                    <a><?php echo $_smarty_tpl->__("what_is_cvv2");?>
</a>
                    <div class="popover fade bottom in">
                        <div class="arrow"></div>
                        <h3 class="popover-title"><?php echo $_smarty_tpl->__("what_is_cvv2");?>
</h3>
                        <div class="popover-content">
                            <div class="cvv2-note">
                                <div class="card-info clearfix">
                                    <div class="cards-images">
                                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/visa_cvv.png" border="0" alt=""/>
                                    </div>
                                    <div class="cards-description">
                                        <strong><?php echo $_smarty_tpl->__("visa_card_discover");?>
</strong>
                                        <p><?php echo $_smarty_tpl->__("credit_card_info");?>
</p>
                                    </div>
                                </div>
                                <div class="card-info ax clearfix">
                                    <div class="cards-images">
                                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/express_cvv.png" border="0" alt=""/>
                                    </div>
                                    <div class="cards-description">
                                        <strong><?php echo $_smarty_tpl->__("american_express");?>
</strong>
                                        <p><?php echo $_smarty_tpl->__("american_express_info");?>
</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="control-group">
                <label for="credit_card_name"
                       class="control-group ty-control-group__title cm-required"
                ><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
                <div class="stripe-payment-form__postal_code"
                     data-ca-stripe-element="postal_code"
                ></div>
            </div>
        </div>
    </div>
<?php }?>
<?php }} ?>
