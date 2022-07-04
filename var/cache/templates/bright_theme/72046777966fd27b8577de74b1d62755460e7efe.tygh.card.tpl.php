<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 04:59:08
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/stripe/views/checkout/components/payments/card.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1389486340629e5c8c3e18a2-83449308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72046777966fd27b8577de74b1d62755460e7efe' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/stripe/views/checkout/components/payments/card.tpl',
      1 => 1654545404,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1389486340629e5c8c3e18a2-83449308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'images_dir' => 0,
    'user_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5c8c3fb911_91482102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5c8c3fb911_91482102')) {function content_629e5c8c3fb911_91482102($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('card_number','valid_thru','cardholder_name','cvv2','what_is_cvv2','visa_card_discover','credit_card_info','american_express','american_express_info','zip_postal_code','card_number','valid_thru','cardholder_name','cvv2','what_is_cvv2','visa_card_discover','credit_card_info','american_express','american_express_info','zip_postal_code'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="litecheckout__item stripe-payment-form__section stripe-payment-form__section--card">
    <div class="clearfix">
        <div class="ty-credit-card cm-cc_form">
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_number"
                    class="ty-control-group__title cm-cc-number cc-number cm-required"
                ><?php echo $_smarty_tpl->__("card_number");?>
</label>
                <div class="stripe-payment-form__card"
                    data-ca-stripe-element="card"
                ></div>
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_month"
                    class="ty-control-group__title cm-cc-date cc-date cm-cc-exp-month cm-required"
                ><?php echo $_smarty_tpl->__("valid_thru");?>
</label>
                <div class="stripe-payment-form__expiry"
                    data-ca-stripe-element="expiry"
                ></div>
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_name"
                    class="ty-control-group__title cm-required"
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

        <div class="ty-credit-card__cvv-field cvv-field">
            <div class="ty-control-group">
                <label for="credit_card_cvv2" class="ty-control-group__title cm-required cm-cc-cvv2  cc-cvv2 cm-autocomplete-off"><?php echo $_smarty_tpl->__("cvv2");?>
</label>
                <div class="stripe-payment-form__cvc"
                    data-ca-stripe-element="cvc"
                ></div>

                <div class="ty-cvv2-about">
                    <span class="ty-cvv2-about__title"><?php echo $_smarty_tpl->__("what_is_cvv2");?>
</span>
                    <div class="ty-cvv2-about__note">

                        <div class="ty-cvv2-about__info mb30 clearfix">
                            <div class="ty-cvv2-about__image">
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/visa_cvv.png" alt="" />
                            </div>
                            <div class="ty-cvv2-about__description">
                                <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("visa_card_discover");?>
</h5>
                                <p><?php echo $_smarty_tpl->__("credit_card_info");?>
</p>
                            </div>
                        </div>
                        <div class="ty-cvv2-about__info clearfix">
                            <div class="ty-cvv2-about__image">
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/express_cvv.png" alt="" />
                            </div>
                            <div class="ty-cvv2-about__description">
                                <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("american_express");?>
</h5>
                                <p><?php echo $_smarty_tpl->__("american_express_info");?>
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ty-control-group">
                <label for="credit_card_postal_code"
                       class="ty-control-group__title cm-cc-postal-code cm-required"
                ><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
                <div class="stripe-payment-form__postal_code"
                     data-ca-stripe-element="postal_code"
                     data-ca-stripe-element-value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['b_zipcode'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'] : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                ></div>
            </div>
        </div>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/stripe/views/checkout/components/payments/card.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/stripe/views/checkout/components/payments/card.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="litecheckout__item stripe-payment-form__section stripe-payment-form__section--card">
    <div class="clearfix">
        <div class="ty-credit-card cm-cc_form">
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_number"
                    class="ty-control-group__title cm-cc-number cc-number cm-required"
                ><?php echo $_smarty_tpl->__("card_number");?>
</label>
                <div class="stripe-payment-form__card"
                    data-ca-stripe-element="card"
                ></div>
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_month"
                    class="ty-control-group__title cm-cc-date cc-date cm-cc-exp-month cm-required"
                ><?php echo $_smarty_tpl->__("valid_thru");?>
</label>
                <div class="stripe-payment-form__expiry"
                    data-ca-stripe-element="expiry"
                ></div>
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_name"
                    class="ty-control-group__title cm-required"
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

        <div class="ty-credit-card__cvv-field cvv-field">
            <div class="ty-control-group">
                <label for="credit_card_cvv2" class="ty-control-group__title cm-required cm-cc-cvv2  cc-cvv2 cm-autocomplete-off"><?php echo $_smarty_tpl->__("cvv2");?>
</label>
                <div class="stripe-payment-form__cvc"
                    data-ca-stripe-element="cvc"
                ></div>

                <div class="ty-cvv2-about">
                    <span class="ty-cvv2-about__title"><?php echo $_smarty_tpl->__("what_is_cvv2");?>
</span>
                    <div class="ty-cvv2-about__note">

                        <div class="ty-cvv2-about__info mb30 clearfix">
                            <div class="ty-cvv2-about__image">
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/visa_cvv.png" alt="" />
                            </div>
                            <div class="ty-cvv2-about__description">
                                <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("visa_card_discover");?>
</h5>
                                <p><?php echo $_smarty_tpl->__("credit_card_info");?>
</p>
                            </div>
                        </div>
                        <div class="ty-cvv2-about__info clearfix">
                            <div class="ty-cvv2-about__image">
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/express_cvv.png" alt="" />
                            </div>
                            <div class="ty-cvv2-about__description">
                                <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("american_express");?>
</h5>
                                <p><?php echo $_smarty_tpl->__("american_express_info");?>
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ty-control-group">
                <label for="credit_card_postal_code"
                       class="ty-control-group__title cm-cc-postal-code cm-required"
                ><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
                <div class="stripe-payment-form__postal_code"
                     data-ca-stripe-element="postal_code"
                     data-ca-stripe-element-value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_data']->value['b_zipcode'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'] : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                ></div>
            </div>
        </div>
    </div>
</div>
<?php }?><?php }} ?>
