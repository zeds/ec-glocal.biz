<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 06:18:23
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/buttons/place_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19739663046295349f6550d5-69621849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8c7b73ed8d9c69c45459c5a57752564343677d7' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/buttons/place_order.tpl',
      1 => 1653909591,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19739663046295349f6550d5-69621849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'but_meta' => 0,
    'but_name' => 0,
    'but_onclick' => 0,
    'but_id' => 0,
    'but_disabled' => 0,
    'cart' => 0,
    'take_surcharge_from_vendor' => 0,
    '_total' => 0,
    'but_text' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295349f686e16_26450313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295349f686e16_26450313')) {function content_6295349f686e16_26450313($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.place_an_order_for','lite_checkout.place_an_order_for'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><button class="litecheckout__submit-btn <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        type="submit"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['but_disabled']->value) {?>disabled<?php }?>
>
    <?php $_smarty_tpl->_capture_stack[0][] = array("order_total", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_surcharge']&&!$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
            <?php $_smarty_tpl->tpl_vars['_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['total']+$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'], null, 0);?>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>(($tmp = @$_smarty_tpl->tpl_vars['_total']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['total'] : $tmp)), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if (!$_smarty_tpl->tpl_vars['but_text']->value) {?>
        <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable($_smarty_tpl->__("lite_checkout.place_an_order_for",array("[amount]"=>Smarty::$_smarty_vars['capture']['order_total'])), null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['but_text']->value;?>

<?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?><!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
--><?php }?></button>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/place_order.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/place_order.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><button class="litecheckout__submit-btn <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        type="submit"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['but_disabled']->value) {?>disabled<?php }?>
>
    <?php $_smarty_tpl->_capture_stack[0][] = array("order_total", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_surcharge']&&!$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
            <?php $_smarty_tpl->tpl_vars['_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['total']+$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'], null, 0);?>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>(($tmp = @$_smarty_tpl->tpl_vars['_total']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['total'] : $tmp)), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if (!$_smarty_tpl->tpl_vars['but_text']->value) {?>
        <?php $_smarty_tpl->tpl_vars['but_text'] = new Smarty_variable($_smarty_tpl->__("lite_checkout.place_an_order_for",array("[amount]"=>Smarty::$_smarty_vars['capture']['order_total'])), null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['but_text']->value;?>

<?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?><!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
--><?php }?></button>
<?php }?><?php }} ?>
