<?php /* Smarty version Smarty-3.1.21, created on 2022-06-11 23:31:23
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/advanced_payment_settings_jp/hooks/payments/properties.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148635419062a4a73b838063-44096452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00a74311936e999fa3c07089c870ed0351535a3e' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/advanced_payment_settings_jp/hooks/payments/properties.pre.tpl',
      1 => 1654957811,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '148635419062a4a73b838063-44096452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'id' => 0,
    'payment_advanced_settings' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a4a73b845e67_11389905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a4a73b845e67_11389905')) {function content_62a4a73b845e67_11389905($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('jp_advpay_min_amount','jp_advpay_max_amount','jp_advpay_charges','jp_advpay_charges_instruction'));
?>


<?php if ($_smarty_tpl->tpl_vars['addons']->value['advanced_payment_settings_jp']['jp_enable_min_amount']=="Y") {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("jp_advpay_min_amount");?>
:</label>
        <div class="controls">
            <input id="elm_surcharge_min_amount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="payment_data[surcharge_min_amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_advanced_settings']->value['min_amount'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-medium"/> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'], ENT_QUOTES, 'UTF-8');?>

        </div>
    </div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['advanced_payment_settings_jp']['jp_enable_max_amount']=="Y") {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("jp_advpay_max_amount");?>
:</label>
        <div class="controls">
            <input id="elm_surcharge_max_amount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="payment_data[surcharge_max_amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_advanced_settings']->value['max_amount'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-medium"/> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'], ENT_QUOTES, 'UTF-8');?>

        </div>
    </div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['advanced_payment_settings_jp']['jp_enable_charge_by_subtotal']=="Y") {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("jp_advpay_charges");?>
:</label>
        <div class="controls">
            <input id="elm_paycharge_by_subtotal_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="payment_data[charges_by_subtotal]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_advanced_settings']->value['charges_by_subtotal'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large main-input" />
            <br /><?php echo $_smarty_tpl->__("jp_advpay_charges_instruction");?>

        </div>
    </div>
<?php }?>
<?php }} ?>
