<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 10:29:48
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/orders/components/order_repay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:580905098629eaa0cdf95e1-85578992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae54e1fc96906c2b7ecccf0be6f7768020525734' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/orders/components/order_repay.tpl',
      1 => 1653909591,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '580905098629eaa0cdf95e1-85578992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'order_payment_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629eaa0ce130f0_91448257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629eaa0ce130f0_91448257')) {function content_629eaa0ce130f0_91448257($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('repay_order','repay_order'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (floatval($_smarty_tpl->tpl_vars['order_info']->value['total'])) {?>
<?php echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>


<?php if ($_REQUEST['payment_id']) {?>

<?php echo '<script'; ?>
>
    Tygh.$(document).ready(function() {
        Tygh.$.scrollToElm(Tygh.$('#repay_order'));
    });
<?php echo '</script'; ?>
>

<?php }?>

<h3 class="ty-subheader" id="repay_order"><?php echo $_smarty_tpl->__("repay_order");?>
</h3>
<div class="ty-repay" id="elm_payments_list">
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/payments/payment_methods.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_id'=>(($tmp = @$_smarty_tpl->tpl_vars['order_payment_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order_info']->value['payment_id'] : $tmp),'order_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id']), 0);?>

<!--elm_payments_list--></div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/order_repay.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/order_repay.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (floatval($_smarty_tpl->tpl_vars['order_info']->value['total'])) {?>
<?php echo smarty_function_script(array('src'=>"js/tygh/checkout.js"),$_smarty_tpl);?>


<?php if ($_REQUEST['payment_id']) {?>

<?php echo '<script'; ?>
>
    Tygh.$(document).ready(function() {
        Tygh.$.scrollToElm(Tygh.$('#repay_order'));
    });
<?php echo '</script'; ?>
>

<?php }?>

<h3 class="ty-subheader" id="repay_order"><?php echo $_smarty_tpl->__("repay_order");?>
</h3>
<div class="ty-repay" id="elm_payments_list">
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/payments/payment_methods.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('payment_id'=>(($tmp = @$_smarty_tpl->tpl_vars['order_payment_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['order_info']->value['payment_id'] : $tmp),'order_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id']), 0);?>

<!--elm_payments_list--></div>
<?php }?>
<?php }?><?php }} ?>
