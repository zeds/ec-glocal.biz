<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 21:40:45
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/shippings/calculate_cost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:602773655629b52cdb97675-02901954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54ea77d9945628aae48bda314234f4ef38093264' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/shippings/calculate_cost.tpl',
      1 => 1625041142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '602773655629b52cdb97675-02901954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rates' => 0,
    'settings' => 0,
    'weights' => 0,
    'weight' => 0,
    'primary_currency' => 0,
    'app' => 0,
    'countries' => 0,
    'code' => 0,
    'recipient' => 0,
    'country' => 0,
    'states' => 0,
    'state' => 0,
    'sender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b52cdbe51d1_01894313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b52cdbe51d1_01894313')) {function content_629b52cdbe51d1_01894313($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_block_inline_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('calculated_rate','delivery_time','NA','cost','error','recalculate_rates','weight','rates_calculated_info','recipient','country','select_country','state','select_state','city','zip_postal_code','address','sender','country','select_country','state','select_state','city','zip_postal_code','address'));
?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/shippings.js"),$_smarty_tpl);?>

<div class="row-fluid">
    <div class="span6 pull-right">
        <div class="well well-small" id="rates">
            <input type="hidden" name="result_ids" value="rates">
            <h3><?php echo $_smarty_tpl->__("calculated_rate");?>
</h3>
            <table class="table">
                
                <?php if ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)!='ja') {?>
                <tr>
                    <td><p><?php echo $_smarty_tpl->__("delivery_time");?>
:</p></td>
                    <td><p><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['rates']->value['service_delivery_time'])===null||$tmp==='' ? $_smarty_tpl->__("NA") : $tmp), ENT_QUOTES, 'UTF-8');?>
</p></td>
                </tr>
                <?php }?>
                
                <tr>
                    <td><b><?php echo $_smarty_tpl->__("cost");?>
</b>:</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['rates']->value['price']) {?>
                            <b><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['rates']->value['price']), 0);?>
</b>
                        <?php }?>
                    </td>
                </tr>
                <tr <?php if (!$_smarty_tpl->tpl_vars['rates']->value['error']) {?>class="hidden"<?php }?>>
                    <td class="error" colspan="2">
                        <b><?php echo $_smarty_tpl->__("error");?>
</b>
                        <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rates']->value['error'], ENT_QUOTES, 'UTF-8');?>
</b>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"action",'but_name'=>"dispatch[shippings.test]",'but_text'=>$_smarty_tpl->__("recalculate_rates"),'but_meta'=>"cm-submit cm-ajax cm-rates-calculate",'but_icon'=>"icon-refresh"), 0);?>

                    </td>
                </tr>
            </table>
            <!--rates--></div>
        </div>
    <div class="span6">
        <div class="control-group">
            <label for="elm_weight_cost" class="control-label"><?php echo $_smarty_tpl->__("weight");?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
)</label>
            <div class="controls">
                <input id="elm_weight_cost" type="text" class="input-medium cm-rate-calculation" name="shipping_data[test_weight]" value="1" />
                <div>
                    <?php $_smarty_tpl->tpl_vars['weights'] = new Smarty_variable(array(1,5,10,50,100), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['weight'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['weight']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weights']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['weight']->key => $_smarty_tpl->tpl_vars['weight']->value) {
$_smarty_tpl->tpl_vars['weight']->_loop = true;
?>
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['weight']->value,'but_meta'=>"label cm-btn-weight",'but_role'=>"button-icon",'but_external_click_id'=>"elm_weight_cost",'but_id'=>"btn_weight_".((string)$_smarty_tpl->tpl_vars['weight']->value)), 0);?>

                    <?php } ?>
                    <p class="muted description"><?php echo $_smarty_tpl->__("rates_calculated_info",array(1,"[price]"=>$_smarty_tpl->tpl_vars['app']->value["formatter"]->asPrice(100,$_smarty_tpl->tpl_vars['primary_currency']->value)));?>
</p>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"shippings:calculate_cost")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"shippings:calculate_cost"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("recipient"),'target'=>"#recipient_info"), 0);?>

        <fieldset id="recipient_info" class="collapse-visible collapse in">
            <div id="container_field__company_country" class="control-group">
                <label for="field__company_country" class="control-label"><?php echo $_smarty_tpl->__("country");?>
</label>
                <div class="controls">
                    <select id="field__recipient_country" class="cm-country cm-rate-calculation cm-location-recipient" name="recipient[country]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value===$_smarty_tpl->tpl_vars['recipient']->value['country']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div id="container_field__company_state" class="control-group">
                <label for="field__company_state" class="control-label"><?php echo $_smarty_tpl->__("state");?>
</label>
                <div class="controls">
                    <select class="cm-state cm-rate-calculation cm-location-recipient" name="recipient[state]" id="field__recipient_state">
                        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                        <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['recipient']->value['country']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['state']->value['code']===$_smarty_tpl->tpl_vars['recipient']->value['state']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                    <input type="text" id="field__recipient_state_d" name="recipient[state]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['recipient']->value['state'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" class="cm-state cm-location-recipient hidden" />
                </div>
            </div>
            <div id="container_field__company_city" class="control-group">
                <label for="field__company_city" class="control-label"><?php echo $_smarty_tpl->__("city");?>
</label>
                <div class="controls">
                    <input type="text" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['recipient']->value['city'], ENT_QUOTES, 'UTF-8');?>
" name="recipient[city]" id="field__company_city" class="cm-rate-calculation"/>
                </div>
            </div>
            <div id="container_field__company_zipcode" class="control-group">
                <label for="field__company_zipcode" class="control-label"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
                <div class="controls">
                    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['recipient']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
" name="recipient[zipcode]" id="field__company_zipcode" class="cm-rate-calculation"/>
                </div>
            </div>
            <div id="container_field__company_address" class="control-group">
                <label for="field__company_address" class="control-label"><?php echo $_smarty_tpl->__("address");?>
</label>
                <div class="controls">
                    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['recipient']->value['address'], ENT_QUOTES, 'UTF-8');?>
" name="recipient[address]" id="field__company_address" class="cm-rate-calculation"/>
                </div>
            </div>
        </fieldset>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("sender"),'target'=>"#sender_info"), 0);?>

        <fieldset id="sender_info" class="collapse-visible collapse in">
            <div id="container_field__company_country" class="control-group">
                <label for="field__sender_country" class="control-label"><?php echo $_smarty_tpl->__("country");?>
</label>
                <div class="controls">
                    <select id="field__sender_country" class="cm-country cm-rate-calculation cm-location-sender" name="sender[country]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value===$_smarty_tpl->tpl_vars['sender']->value['country']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div id="container_field__company_state" class="control-group">
                <label for="field__company_state" class="control-label"><?php echo $_smarty_tpl->__("state");?>
</label>
                <div class="controls">
                    <select class="cm-state cm-rate-calculation cm-location-sender" name="sender[state]" id="field__sender_state">
                        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                        <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['sender']->value['country']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['state']->value['code']===$_smarty_tpl->tpl_vars['sender']->value['state']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                    <input type="text" id="field__sender_state_d" name="sender[state]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sender']->value['state'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" class="cm-state cm-location-sender hidden" />
                </div>
            </div>
            <div id="container_field__company_city" class="control-group">
                <label for="field__company_city" class="control-label"><?php echo $_smarty_tpl->__("city");?>
</label>
                <div class="controls">
                    <input type="text" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sender']->value['city'], ENT_QUOTES, 'UTF-8');?>
" name="sender[city]" id="field__company_city" class="cm-rate-calculation"/>
                </div>
            </div>
            <div id="container_field__company_zipcode" class="control-group">
                <label for="field__company_zipcode" class="control-label"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
                <div class="controls">
                    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sender']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
" name="sender[zipcode]" id="field__company_zipcode" class="cm-rate-calculation"/>
                </div>
            </div>
            <div id="container_field__company_address" class="control-group">
                <label for="field__company_address" class="control-label"><?php echo $_smarty_tpl->__("address");?>
</label>
                <div class="controls">
                    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sender']->value['address'], ENT_QUOTES, 'UTF-8');?>
" name="sender[address]" id="field__company_address" class="cm-rate-calculation"/>
                </div>
            </div>
        </fieldset>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"shippings:calculate_cost"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function (_, $) {
        $.ceEvent('one', 'ce.commoninit', function (context) {
            $.ceRebuildStates('init', {
                default_country: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
                states: <?php echo json_encode($_smarty_tpl->tpl_vars['states']->value);?>

            });
            $('.cm-country.cm-location-recipient').ceRebuildStates();
            $('.cm-country.cm-location-sender').ceRebuildStates();
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
