<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 06:18:23
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/checkout/components/payments/checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2280027376295349f33fbc3-67532420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c315106397fe8ebe8732177fa200c377e9ed2f0b' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/checkout/components/payments/checkout.tpl',
      1 => 1653909591,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2280027376295349f33fbc3-67532420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'payment_methods' => 0,
    'payment' => 0,
    'payment_id' => 0,
    'result_ids' => 0,
    'order_id' => 0,
    'iframe_mode' => 0,
    'is_terms_and_conditions_agreement_required' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295349f389868_41814211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295349f389868_41814211')) {function content_6295349f389868_41814211($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_no_payments_required','checkout_terms_n_conditions_alert','skip_payment','text_no_payments_required','checkout_terms_n_conditions_alert','skip_payment'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<div class="litecheckout__group">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:payments")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:payments"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>
    <?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
        <div class="litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">

            <input type="radio"
                   name="selected_payment_method"
                   id="radio_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-target-form="litecheckout_payments_form"
                   data-ca-url="checkout.checkout"
                   data-ca-result-ids="litecheckout_final_section,litecheckout_step_payment,shipping_rates_list,litecheckout_terms,checkout*"
                   
                   class="litecheckout__shipping-method__radio cm-select-payment<?php if (fn_lcjp_check_payment($_smarty_tpl->tpl_vars['payment']->value)) {?>_submit<?php }?> hidden"
                   
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment_id']==$_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>checked<?php }?>
            />

            <label id="payments_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   class="litecheckout__shipping-method__wrapper js-litecheckout-toggle"
                   for="radio_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-toggling="payments_form_wrapper_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-hide-all-in=".litecheckout__payment-methods"
            >
                <?php if ($_smarty_tpl->tpl_vars['payment']->value['image']) {?>
                    <div class="litecheckout__shipping-method__logo">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id'],'images'=>$_smarty_tpl->tpl_vars['payment']->value['image'],'class'=>"litecheckout__shipping-method__logo-image"), 0);?>

                    </div>
                <?php }?>
                <p class="litecheckout__shipping-method__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment'], ENT_QUOTES, 'UTF-8');?>
</p>
                <p class="litecheckout__shipping-method__delivery-time"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
            </label>

        </div>
    <?php } ?>
    <?php } else { ?>
        <div class="litecheckout__item">
            <p>
                <?php echo $_smarty_tpl->__("text_no_payments_required");?>

            </p>
        </div>
    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:payments"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<div class="litecheckout__group litecheckout__payment-methods">
    <?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment_id']!=$_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>
            <?php continue 1;?>
        <?php }?>
        <div class="litecheckout__group litecheckout__payment-method"
             data-ca-toggling-by="payments_form_wrapper_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-hideble="true"
        >
            <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" name="dispatch" value="checkout.place_order"/>
            <input type="hidden" name="customer_notes" value=""/>

            <?php if ($_smarty_tpl->tpl_vars['order_id']->value) {?>
                <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <?php }?>

            <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"/>

            <?php if ($_smarty_tpl->tpl_vars['payment']->value['template']) {?>
                <?php $_smarty_tpl->_capture_stack[0][] = array("payment_template", null, null); ob_start(); ?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['payment']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('card_id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['payment']->value['instructions']) {?>
                <div class="litecheckout__item litecheckout__payment-instructions">
                    <?php echo $_smarty_tpl->tpl_vars['payment']->value['instructions'];?>

                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['payment']->value['template']&&trim(Smarty::$_smarty_vars['capture']['payment_template'])!='') {?>
                <?php echo Smarty::$_smarty_vars['capture']['payment_template'];?>

            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
            <div class="ty-payment-method-iframe__box">
                <iframe width="100%" height="700" id="order_iframe_<?php echo htmlspecialchars((defined('TIME') ? constant('TIME') : null), ENT_QUOTES, 'UTF-8');?>
"
                        src="<?php echo htmlspecialchars(fn_checkout_url("checkout.process_payment",(defined('AREA') ? constant('AREA') : null)), ENT_QUOTES, 'UTF-8');?>
"
                        style="border: 0px" frameBorder="0"
                ></iframe>
                <?php if ($_smarty_tpl->tpl_vars['is_terms_and_conditions_agreement_required']->value) {?>
                    <div id="payment_method_iframe_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                         class="ty-payment-method-iframe"
                    >
                        <div class="ty-payment-method-iframe__label">
                            <div class="ty-payment-method-iframe__text"><?php echo $_smarty_tpl->__("checkout_terms_n_conditions_alert");?>
</div>
                        </div>
                    </div>
                <?php }?>
            </div>
        <?php }?>
    <?php } ?>
</div>

<?php if (defined("DEVELOPMENT")&&(defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null)&&$_smarty_tpl->tpl_vars['auth']->value['act_as_user']) {?>
    <div class="litecheckout__group">
        <div class="litecheckout__item">
            <label>
                <input type="checkbox" id="skip_payment" name="skip_payment" value="Y"
                       class="checkbox"
                />
                <?php echo $_smarty_tpl->__("skip_payment");?>

            </label>
        </div>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/payments/checkout.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/payments/checkout.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<div class="litecheckout__group">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:payments")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:payments"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>
    <?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
        <div class="litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">

            <input type="radio"
                   name="selected_payment_method"
                   id="radio_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-target-form="litecheckout_payments_form"
                   data-ca-url="checkout.checkout"
                   data-ca-result-ids="litecheckout_final_section,litecheckout_step_payment,shipping_rates_list,litecheckout_terms,checkout*"
                   
                   class="litecheckout__shipping-method__radio cm-select-payment<?php if (fn_lcjp_check_payment($_smarty_tpl->tpl_vars['payment']->value)) {?>_submit<?php }?> hidden"
                   
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment_id']==$_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>checked<?php }?>
            />

            <label id="payments_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   class="litecheckout__shipping-method__wrapper js-litecheckout-toggle"
                   for="radio_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-toggling="payments_form_wrapper_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-hide-all-in=".litecheckout__payment-methods"
            >
                <?php if ($_smarty_tpl->tpl_vars['payment']->value['image']) {?>
                    <div class="litecheckout__shipping-method__logo">
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id'],'images'=>$_smarty_tpl->tpl_vars['payment']->value['image'],'class'=>"litecheckout__shipping-method__logo-image"), 0);?>

                    </div>
                <?php }?>
                <p class="litecheckout__shipping-method__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment'], ENT_QUOTES, 'UTF-8');?>
</p>
                <p class="litecheckout__shipping-method__delivery-time"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
            </label>

        </div>
    <?php } ?>
    <?php } else { ?>
        <div class="litecheckout__item">
            <p>
                <?php echo $_smarty_tpl->__("text_no_payments_required");?>

            </p>
        </div>
    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:payments"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>

<div class="litecheckout__group litecheckout__payment-methods">
    <?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['payment']->value['payment_id']!=$_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>
            <?php continue 1;?>
        <?php }?>
        <div class="litecheckout__group litecheckout__payment-method"
             data-ca-toggling-by="payments_form_wrapper_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-hideble="true"
        >
            <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input type="hidden" name="dispatch" value="checkout.place_order"/>
            <input type="hidden" name="customer_notes" value=""/>

            <?php if ($_smarty_tpl->tpl_vars['order_id']->value) {?>
                <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <?php }?>

            <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"/>

            <?php if ($_smarty_tpl->tpl_vars['payment']->value['template']) {?>
                <?php $_smarty_tpl->_capture_stack[0][] = array("payment_template", null, null); ob_start(); ?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['payment']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('card_id'=>$_smarty_tpl->tpl_vars['payment']->value['payment_id']), 0);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['payment']->value['instructions']) {?>
                <div class="litecheckout__item litecheckout__payment-instructions">
                    <?php echo $_smarty_tpl->tpl_vars['payment']->value['instructions'];?>

                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['payment']->value['template']&&trim(Smarty::$_smarty_vars['capture']['payment_template'])!='') {?>
                <?php echo Smarty::$_smarty_vars['capture']['payment_template'];?>

            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
            <div class="ty-payment-method-iframe__box">
                <iframe width="100%" height="700" id="order_iframe_<?php echo htmlspecialchars((defined('TIME') ? constant('TIME') : null), ENT_QUOTES, 'UTF-8');?>
"
                        src="<?php echo htmlspecialchars(fn_checkout_url("checkout.process_payment",(defined('AREA') ? constant('AREA') : null)), ENT_QUOTES, 'UTF-8');?>
"
                        style="border: 0px" frameBorder="0"
                ></iframe>
                <?php if ($_smarty_tpl->tpl_vars['is_terms_and_conditions_agreement_required']->value) {?>
                    <div id="payment_method_iframe_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                         class="ty-payment-method-iframe"
                    >
                        <div class="ty-payment-method-iframe__label">
                            <div class="ty-payment-method-iframe__text"><?php echo $_smarty_tpl->__("checkout_terms_n_conditions_alert");?>
</div>
                        </div>
                    </div>
                <?php }?>
            </div>
        <?php }?>
    <?php } ?>
</div>

<?php if (defined("DEVELOPMENT")&&(defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null)&&$_smarty_tpl->tpl_vars['auth']->value['act_as_user']) {?>
    <div class="litecheckout__group">
        <div class="litecheckout__item">
            <label>
                <input type="checkbox" id="skip_payment" name="skip_payment" value="Y"
                       class="checkbox"
                />
                <?php echo $_smarty_tpl->__("skip_payment");?>

            </label>
        </div>
    </div>
<?php }?>
<?php }?><?php }} ?>
