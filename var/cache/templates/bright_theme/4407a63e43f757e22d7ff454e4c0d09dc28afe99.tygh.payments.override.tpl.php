<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 05:11:22
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/payment_dependencies/hooks/checkout/payments.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1172907837629e5f6aa313d7-11761300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4407a63e43f757e22d7ff454e4c0d09dc28afe99' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/addons/payment_dependencies/hooks/checkout/payments.override.tpl',
      1 => 1654545966,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1172907837629e5f6aa313d7-11761300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'payment_methods' => 0,
    'payment' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5f6aa5e2b0_59249273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5f6aa5e2b0_59249273')) {function content_629e5f6aa5e2b0_59249273($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('pd.no_payments_available','pd.no_payments_available'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>
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
                   class="litecheckout__shipping-method__radio cm-select-payment hidden"
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
        <p class="ty-error-text">
            <?php echo $_smarty_tpl->__("pd.no_payments_available");?>

        </p>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/payment_dependencies/hooks/checkout/payments.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/payment_dependencies/hooks/checkout/payments.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['cart']->value['payment_id']) {?>
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
                   class="litecheckout__shipping-method__radio cm-select-payment hidden"
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
        <p class="ty-error-text">
            <?php echo $_smarty_tpl->__("pd.no_payments_available");?>

        </p>
    </div>
<?php }
}?><?php }} ?>
