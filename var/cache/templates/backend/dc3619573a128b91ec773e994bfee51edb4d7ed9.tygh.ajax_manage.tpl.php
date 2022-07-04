<?php /* Smarty version Smarty-3.1.21, created on 2022-06-08 00:34:08
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/localization_jp/views/shipping_rates_jp/ajax_manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1052506088629f6ff0c21fd2-53957738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc3619573a128b91ec773e994bfee51edb4d7ed9' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/localization_jp/views/shipping_rates_jp/ajax_manage.tpl',
      1 => 1529677450,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1052506088629f6ff0c21fd2-53957738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_info' => 0,
    'config' => 0,
    'jp_carrier_rates' => 0,
    'current_zones_count' => 0,
    'jp_carrier_name' => 0,
    'jp_carrier_services_name' => 0,
    'jp_carrier_zone_name' => 0,
    'default_carrier' => 0,
    'default_service' => 0,
    'default_zone' => 0,
    'current_zones' => 0,
    'item' => 0,
    'zone_rates' => 0,
    'rates_table' => 0,
    'weight' => 0,
    'rkey' => 0,
    'rate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629f6ff0c428b5_04591605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629f6ff0c428b5_04591605')) {function content_629f6ff0c428b5_04591605($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/xb870157/ec-glocal.biz/public_html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('jp_shipping_select_service_and_origin','jp_shipping_carrier','jp_shipping_service_name','jp_shipping_origination','jp_shipping_size','jp_shipping_weight'));
?>


<div id="ajax_service_zone_rate" class="table-wrapper">
	<form name="rate_form" action="<?php if ($_smarty_tpl->tpl_vars['user_info']->value['user_type']=='V') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['vendor_index'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['admin_index'], ENT_QUOTES, 'UTF-8');
}?>" method="POST" class="cm-form-highlight cm-ajax">
        <table class="table" width="100%">
        <?php if (empty($_smarty_tpl->tpl_vars['jp_carrier_rates']->value)) {?>
            <tr>
                <th class="center"><?php echo $_smarty_tpl->__("jp_shipping_select_service_and_origin");?>
</th>
            </tr>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['jp_carrier_rates']->value)) {?>
            <tr>
                <th class="left" colspan="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_zones_count']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("jp_shipping_carrier");?>
：［<span style="color:#A74401"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jp_carrier_name']->value, ENT_QUOTES, 'UTF-8');?>
</span>］　<?php echo $_smarty_tpl->__("jp_shipping_service_name");?>
：［<span style="color:#A74401"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jp_carrier_services_name']->value, ENT_QUOTES, 'UTF-8');?>
</span>］　<?php echo $_smarty_tpl->__("jp_shipping_origination");?>
：［<span style="color:#A74401"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jp_carrier_zone_name']->value, ENT_QUOTES, 'UTF-8');?>
</span>］
                    <input type="hidden" name="carrier" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['default_carrier']->value, ENT_QUOTES, 'UTF-8');?>
" />
                    <input type="hidden" name="service" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['default_service']->value, ENT_QUOTES, 'UTF-8');?>
" />
                    <input type="hidden" name="zone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['default_zone']->value, ENT_QUOTES, 'UTF-8');?>
" />
                </th>
            </tr>
            <tr>
                
                <?php if ($_smarty_tpl->tpl_vars['default_carrier']->value!='jpems') {?>
                <th class="center"><?php echo $_smarty_tpl->__("jp_shipping_size");?>
</th>
                <?php }?>
                <th class="center">
                <?php echo $_smarty_tpl->__("jp_shipping_weight");?>

                </th>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['current_zones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <th class="center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['zone_name'], ENT_QUOTES, 'UTF-8');?>
</th>
                <?php } ?>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['rates_table'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rates_table']->_loop = false;
 $_smarty_tpl->tpl_vars["rkey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['zone_rates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rates_table']->key => $_smarty_tpl->tpl_vars['rates_table']->value) {
$_smarty_tpl->tpl_vars['rates_table']->_loop = true;
 $_smarty_tpl->tpl_vars["rkey"]->value = $_smarty_tpl->tpl_vars['rates_table']->key;
?>
            <tr>
                
                <?php if ($_smarty_tpl->tpl_vars['default_carrier']->value!='jpems') {?>
                <td class="right jp_shipping_size"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rates_table']->value['size'], ENT_QUOTES, 'UTF-8');?>
</td>
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['default_carrier']->value=='jpems') {?>
                <?php echo smarty_function_math(array('equation'=>$_smarty_tpl->tpl_vars['rates_table']->value['weight']/100,'assign'=>'weight'),$_smarty_tpl);?>

                <!--<?php echo htmlspecialchars(number_format(htmlspecialchars($_smarty_tpl->tpl_vars['weight']->value, ENT_QUOTES, 'UTF-8', true),2), ENT_QUOTES, 'UTF-8');?>
-->
                <td class="center jp_shipping_weight"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['weight']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                <?php } else { ?>
                <td class="right jp_shipping_weight"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rates_table']->value['weight'], ENT_QUOTES, 'UTF-8');?>
</td>
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars['rate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rate']->_loop = false;
 $_smarty_tpl->tpl_vars["rkey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rates_table']->value['rates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rate']->key => $_smarty_tpl->tpl_vars['rate']->value) {
$_smarty_tpl->tpl_vars['rate']->_loop = true;
 $_smarty_tpl->tpl_vars["rkey"]->value = $_smarty_tpl->tpl_vars['rate']->key;
?>
                <td class="center"><input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rates_table']->value['size'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rates_table']->value['weight'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rkey']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rates_table']->value['size'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rates_table']->value['weight'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rkey']->value, ENT_QUOTES, 'UTF-8');?>
" class="jp_input_shipping_rate" size="5" maxlength="5" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value, ENT_QUOTES, 'UTF-8');?>
" /></td>
                <?php } ?>
            </tr>
            <?php } ?>
        <?php }?>
        </table>
    </form>
</div>
<?php }} ?>
