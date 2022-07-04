<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 10:29:48
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/checkout/components/payments/repay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1874019701629eaa0ce24964-13222704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edb7018b5e459dbcc88910d1590d085ff3694ab1' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/checkout/components/payments/repay.tpl',
      1 => 1653909591,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1874019701629eaa0ce24964-13222704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'payment_methods_list' => 0,
    'payment_data' => 0,
    'tab_id' => 0,
    'order_id' => 0,
    'payment_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629eaa0ce74a50_03159081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629eaa0ce74a50_03159081')) {function content_629eaa0ce74a50_03159081($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('repay_order','repay_order'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div class="litecheckout__section">
    <div class="litecheckout__group">
    <?php  $_smarty_tpl->tpl_vars['payment_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_data']->_loop = false;
 $_smarty_tpl->tpl_vars['tab_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payment_methods_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_data']->key => $_smarty_tpl->tpl_vars['payment_data']->value) {
$_smarty_tpl->tpl_vars['payment_data']->_loop = true;
 $_smarty_tpl->tpl_vars['tab_id']->value = $_smarty_tpl->tpl_vars['payment_data']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['payment_data']->value['status']=="A") {?>
            <label class="cm-toggle litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall"
                for="radio_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_data']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
            >
                <input type="radio"
                        id="radio_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_data']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                        class="hidden litecheckout__shipping-method__radio cm-select-payment"
                        data-ca-url="orders.details?order_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-result-ids="elm_payments_list"
                        name="repay_radio_group"
                        <?php if ($_smarty_tpl->tpl_vars['payment_id']->value==$_smarty_tpl->tpl_vars['payment_data']->value['payment_id']) {?>
                            checked="checked"
                        <?php }?>
                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_data']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                />
                <div class="litecheckout__shipping-method__wrapper">
                    <?php if ($_smarty_tpl->tpl_vars['payment_data']->value['image']) {?>
                        <div class="litecheckout__shipping-method__logo">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['payment_data']->value['payment_id'],'images'=>$_smarty_tpl->tpl_vars['payment_data']->value['image'],'class'=>"litecheckout__shipping-method__logo-image"), 0);?>

                        </div>
                    <?php }?>
                    <p class="litecheckout__shipping-method__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_data']->value['payment'], ENT_QUOTES, 'UTF-8');?>
</p>
                    <p class="litecheckout__shipping-method__delivery-time"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
                </div>
            </label>
        <?php }?>
    <?php } ?>
    </div>
</div>
<div class="payments">
<?php  $_smarty_tpl->tpl_vars['payment_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_data']->_loop = false;
 $_smarty_tpl->tpl_vars['tab_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payment_methods_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_data']->key => $_smarty_tpl->tpl_vars['payment_data']->value) {
$_smarty_tpl->tpl_vars['payment_data']->_loop = true;
 $_smarty_tpl->tpl_vars['tab_id']->value = $_smarty_tpl->tpl_vars['payment_data']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['payment_data']->value['payment_id']!=$_smarty_tpl->tpl_vars['payment_id']->value) {?>
        <?php continue 1;?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['payment_data']->value['status']=="A") {?>
    <div class="litecheckout__group">
        
        <form name="payments_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="jp_payments_form_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
                method="post"
                class="payments-form cm-processing-personal-data cm-toggle-target <?php if ($_smarty_tpl->tpl_vars['payment_id']->value!=$_smarty_tpl->tpl_vars['payment_data']->value['payment_id']) {?>hidden<?php }?>"
                data-ca-processing-personal-data-without-click="true"
                data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_data']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
        >
        
            <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_data']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
" />

            <?php if ($_smarty_tpl->tpl_vars['order_id']->value) {?>
                <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['payment_data']->value['instructions']) {?>
                <div class="litecheckout__item litecheckout__payment-instructions">
                    <?php echo $_smarty_tpl->tpl_vars['payment_data']->value['instructions'];?>

                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['payment_data']->value['template']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['payment_data']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ("buttons/place_order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("repay_order"),'but_name'=>"dispatch[orders.repay]",'but_meta'=>"litecheckout__submit-btn--auto-width",'but_role'=>"big"), 0);?>

        </form>
    </div>
    <?php }?>
<?php } ?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/payments/repay.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/payments/repay.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div class="litecheckout__section">
    <div class="litecheckout__group">
    <?php  $_smarty_tpl->tpl_vars['payment_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_data']->_loop = false;
 $_smarty_tpl->tpl_vars['tab_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payment_methods_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_data']->key => $_smarty_tpl->tpl_vars['payment_data']->value) {
$_smarty_tpl->tpl_vars['payment_data']->_loop = true;
 $_smarty_tpl->tpl_vars['tab_id']->value = $_smarty_tpl->tpl_vars['payment_data']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['payment_data']->value['status']=="A") {?>
            <label class="cm-toggle litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall"
                for="radio_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_data']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
            >
                <input type="radio"
                        id="radio_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_data']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                        class="hidden litecheckout__shipping-method__radio cm-select-payment"
                        data-ca-url="orders.details?order_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-result-ids="elm_payments_list"
                        name="repay_radio_group"
                        <?php if ($_smarty_tpl->tpl_vars['payment_id']->value==$_smarty_tpl->tpl_vars['payment_data']->value['payment_id']) {?>
                            checked="checked"
                        <?php }?>
                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_data']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
                />
                <div class="litecheckout__shipping-method__wrapper">
                    <?php if ($_smarty_tpl->tpl_vars['payment_data']->value['image']) {?>
                        <div class="litecheckout__shipping-method__logo">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['payment_data']->value['payment_id'],'images'=>$_smarty_tpl->tpl_vars['payment_data']->value['image'],'class'=>"litecheckout__shipping-method__logo-image"), 0);?>

                        </div>
                    <?php }?>
                    <p class="litecheckout__shipping-method__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_data']->value['payment'], ENT_QUOTES, 'UTF-8');?>
</p>
                    <p class="litecheckout__shipping-method__delivery-time"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_data']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
                </div>
            </label>
        <?php }?>
    <?php } ?>
    </div>
</div>
<div class="payments">
<?php  $_smarty_tpl->tpl_vars['payment_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_data']->_loop = false;
 $_smarty_tpl->tpl_vars['tab_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payment_methods_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_data']->key => $_smarty_tpl->tpl_vars['payment_data']->value) {
$_smarty_tpl->tpl_vars['payment_data']->_loop = true;
 $_smarty_tpl->tpl_vars['tab_id']->value = $_smarty_tpl->tpl_vars['payment_data']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['payment_data']->value['payment_id']!=$_smarty_tpl->tpl_vars['payment_id']->value) {?>
        <?php continue 1;?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['payment_data']->value['status']=="A") {?>
    <div class="litecheckout__group">
        
        <form name="payments_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="jp_payments_form_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
                method="post"
                class="payments-form cm-processing-personal-data cm-toggle-target <?php if ($_smarty_tpl->tpl_vars['payment_id']->value!=$_smarty_tpl->tpl_vars['payment_data']->value['payment_id']) {?>hidden<?php }?>"
                data-ca-processing-personal-data-without-click="true"
                data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_data']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"
        >
        
            <input type="hidden" name="payment_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_data']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
" />

            <?php if ($_smarty_tpl->tpl_vars['order_id']->value) {?>
                <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['payment_data']->value['instructions']) {?>
                <div class="litecheckout__item litecheckout__payment-instructions">
                    <?php echo $_smarty_tpl->tpl_vars['payment_data']->value['instructions'];?>

                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['payment_data']->value['template']) {?>
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['payment_data']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ("buttons/place_order.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("repay_order"),'but_name'=>"dispatch[orders.repay]",'but_meta'=>"litecheckout__submit-btn--auto-width",'but_role'=>"big"), 0);?>

        </form>
    </div>
    <?php }?>
<?php } ?>
</div>
<?php }?><?php }} ?>
