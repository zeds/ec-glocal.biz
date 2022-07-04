<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 04:58:15
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/stripe/views/payments/components/cc_processors/stripe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1409730024629e5c5754f910-41909844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b0e5986314bcb6070fc5dbdfd06f1d405212320' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/stripe/views/payments/components/cc_processors/stripe.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1409730024629e5c5754f910-41909844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_id' => 0,
    'supported_country_codes' => 0,
    'processor_params' => 0,
    'suffix' => 0,
    'countries' => 0,
    'country' => 0,
    'currencies' => 0,
    'code' => 0,
    'currency' => 0,
    'payment_type' => 0,
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5c5758aa97_49304213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5c5758aa97_49304213')) {function content_629e5c5758aa97_49304213($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('stripe.publishable_key','stripe.secret_key','stripe.account_country','currency','stripe.payment_type','stripe.payment_type.','stripe.payment_type.buy_with_','stripe.payment_type.apple_pay.description','stripe.payment_type.apple_pay','stripe.payment_type.google_pay.description','stripe.payment_type.google_pay','stripe.show_payment_button','stripe.show_payment_button'));
?>


<?php $_smarty_tpl->tpl_vars['suffix'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['payment_id']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['supported_country_codes'] = new Smarty_variable(array("AE","AT","AU","BE","BG","BR","CA","CH","CY","DE","DK","EE","ES","FI","FR","GB","GR","HK","IE","IN","IT","JP","LT","LU","LV","MX","MY","NL","NO","NZ","PH","PL","PT","RO","SE","SG","SI","SK","US"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['countries'] = new Smarty_variable(fn_get_countries(array("country_codes"=>$_smarty_tpl->tpl_vars['supported_country_codes']->value)), null, 0);?>

<?php echo smarty_function_script(array('src'=>"js/addons/stripe/backend/config.js"),$_smarty_tpl);?>


<input type="hidden"
       name="payment_data[processor_params][is_stripe]"
       value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
/>

<input type="hidden"
       name="payment_data[processor_params][is_test]"
       value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['processor_params']->value['is_test'])===null||$tmp==='' ? (smarty_modifier_enum("YesNo::NO")) : $tmp), ENT_QUOTES, 'UTF-8');?>
"
/>

<div class="control-group">
    <label for="elm_publishable_key<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-required"
    ><?php echo $_smarty_tpl->__("stripe.publishable_key");?>
:</label>
    <div class="controls">
        <input type="text"
               name="payment_data[processor_params][publishable_key]"
               id="elm_publishable_key<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['publishable_key'], ENT_QUOTES, 'UTF-8');?>
"
        />
    </div>
</div>

<div class="control-group">
    <label for="elm_secret_key<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-required"
    ><?php echo $_smarty_tpl->__("stripe.secret_key");?>
:</label>
    <div class="controls">
        <input type="password"
               name="payment_data[processor_params][secret_key]"
               id="elm_secret_key<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['secret_key'], ENT_QUOTES, 'UTF-8');?>
"
               autocomplete="new-password"
        />
    </div>
</div>

<div class="control-group">
    <label for="elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    ><?php echo $_smarty_tpl->__("stripe.account_country");?>
</label>
    <div class="controls">
        <select name="payment_data[processor_params][country]"
                id="elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['code'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['country']===$_smarty_tpl->tpl_vars['country']->value['code']) {?>selected="selected"<?php }?>
                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['country'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="control-group">
    <label for="elm_currency<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    ><?php echo $_smarty_tpl->__("currency");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]"
                id="elm_currency<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['currency']->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']===$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>
                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="control-group">
    <label for="elm_currency<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    ><?php echo $_smarty_tpl->__("stripe.payment_type");?>
:</label>
    <div class="controls">
        <div class="row-fluid">
            <div class="span4">
                <ul class="unstyled">
                    <?php  $_smarty_tpl->tpl_vars['payment_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_type']->_loop = false;
 $_from = array("card","apple_pay","google_pay"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment_type']->key => $_smarty_tpl->tpl_vars['payment_type']->value) {
$_smarty_tpl->tpl_vars['payment_type']->_loop = true;
?>
                        <li>
                            <label class="radio inline"
                                   for="elm_payment_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_type']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                            >
                                <?php echo $_smarty_tpl->__("stripe.payment_type.".((string)$_smarty_tpl->tpl_vars['payment_type']->value));?>

                                <input type="radio"
                                       id="elm_payment_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_type']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                                       data-ca-stripe-description-element-id="elm_payment_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_type']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_description"
                                       data-ca-stripe-payment-button-name="<?php echo $_smarty_tpl->__("stripe.payment_type.buy_with_".((string)$_smarty_tpl->tpl_vars['payment_type']->value));?>
"
                                       data-ca-stripe-show-payment-button-label-id="lbl_show_payment_button<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                                       name="payment_data[processor_params][payment_type]"
                                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_type']->value, ENT_QUOTES, 'UTF-8');?>
"
                                       <?php if ((($tmp = @$_smarty_tpl->tpl_vars['processor_params']->value['payment_type'])===null||$tmp==='' ? "card" : $tmp)==$_smarty_tpl->tpl_vars['payment_type']->value) {?>
                                           checked="checked"
                                       <?php }?>
                                />
                            </label>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="span6">
                <div id="elm_payment_type_apple_pay<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_description"
                     class="stripe-description hidden"
                >
                    <small>
                        <?php echo $_smarty_tpl->__("stripe.payment_type.apple_pay.description",array("[guidelines_url]"=>"https://developer.apple.com/design/human-interface-guidelines/apple-pay/overview/introduction/"));?>

                        <p>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/stripe/payments/apple_pay.png"
                               target="_blank"
                            >
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/stripe/payments/apple_pay.png"
                                     height="60"
                                     style="height: 60px;"
                                     alt="<?php echo $_smarty_tpl->__("stripe.payment_type.apple_pay");?>
"
                                />
                            </a>
                        </p>
                    </small>
                </div>
                <div id="elm_payment_type_google_pay<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_description"
                     class="stripe-description hidden"
                >
                    <small>
                        <?php echo $_smarty_tpl->__("stripe.payment_type.google_pay.description",array("[guidelines_url]"=>"https://developers.google.com/pay/api/web/guides/brand-guidelines"));?>

                        <p>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/stripe/payments/google_pay.png"
                               target="_blank"
                            >
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addons/stripe/payments/google_pay.png"
                                     height="60"
                                     style="height: 60px;"
                                     alt="<?php echo $_smarty_tpl->__("stripe.payment_type.google_pay");?>
"
                                />
                            </a>
                        </p>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="control-group">
    <label for="elm_show_payment_button<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
           id="lbl_show_payment_button<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           data-ca-stripe-show-payment-button-template="<?php echo htmlspecialchars($_smarty_tpl->__("stripe.show_payment_button"), ENT_QUOTES, 'UTF-8', true);?>
"
    ><?php echo $_smarty_tpl->__("stripe.show_payment_button");?>
</label>
    <div class="controls">
        <input type="hidden"
               name="payment_data[processor_params][show_payment_button]"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
        />
        <input type="checkbox"
               id="elm_show_payment_button<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
               name="payment_data[processor_params][show_payment_button]"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['processor_params']->value['show_payment_button'])===null||$tmp==='' ? (smarty_modifier_enum("YesNo::NO")) : $tmp)==smarty_modifier_enum("YesNo::YES")) {?>
                    checked="checked"
                <?php }?>
        />
    </div>
</div>
<?php }} ?>
