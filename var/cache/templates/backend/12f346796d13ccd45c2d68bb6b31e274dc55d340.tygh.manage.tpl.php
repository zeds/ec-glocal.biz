<?php /* Smarty version Smarty-3.1.21, created on 2022-06-11 13:30:18
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/currencies/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85788463662a41a5a722059-49462887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12f346796d13ccd45c2d68bb6b31e274dc55d340' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/currencies/manage.tpl',
      1 => 1625815526,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '85788463662a41a5a722059-49462887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'is_allow_update_currencies' => 0,
    'currencies_data' => 0,
    'currency' => 0,
    'currency_details' => 0,
    '_href_delete' => 0,
    'runtime' => 0,
    'primary_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a41a5a7bc271_30804418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a41a5a7bc271_30804418')) {function content_62a41a5a7bc271_30804418($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_block_inline_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('currency_rate','currency_sign','no_data','new_currency','add_currency','exchange_rate','error_exchange_rate','currencies'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
    <div class="items-container <?php if ($_smarty_tpl->tpl_vars['is_allow_update_currencies']->value) {?>cm-sortable<?php }?> <?php if (!fn_allow_save_object('','',true)) {?> cm-hide-inputs<?php }?>"
         data-ca-sortable-table="currencies" data-ca-sortable-id-name="currency_id" id="manage_currencies_list">
        <?php if ($_smarty_tpl->tpl_vars['currencies_data']->value) {?>
        <div class="table-responsive-wrapper">
            <table class="table table-middle table--relative table-objects table-striped table-responsive table-responsive-w-titles">
                <tbody>
                <?php  $_smarty_tpl->tpl_vars["currency"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["currency"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["currency"]->key => $_smarty_tpl->tpl_vars["currency"]->value) {
$_smarty_tpl->tpl_vars["currency"]->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['currency']->value['is_primary']=="Y") {?>
                        <?php $_smarty_tpl->tpl_vars["_href_delete"] = new Smarty_variable('', null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["_href_delete"] = new Smarty_variable("currencies.delete?currency_id=".((string)$_smarty_tpl->tpl_vars['currency']->value['currency_id']), null, 0);?>
                    <?php }?>
                    <?php ob_start();
echo $_smarty_tpl->__("currency_rate");
$_tmp1=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("currency_sign");
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["currency_details"] = new Smarty_variable("<span>".((string)$_smarty_tpl->tpl_vars['currency']->value['currency_code'])."</span>, ".$_tmp1.": <span>".((string)$_smarty_tpl->tpl_vars['currency']->value['coefficient'])."</span>, ".$_tmp2.": <span>".((string)$_smarty_tpl->tpl_vars['currency']->value['symbol'])."</span>", null, 0);?>

                    <?php $_smarty_tpl->_capture_stack[0][] = array("tool_items", null, null); ob_start(); ?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"currencies:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"currencies:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"currencies:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                    <?php $_smarty_tpl->_capture_stack[0][] = array("extra_data", null, null); ob_start(); ?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"currencies:extra_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"currencies:extra_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"currencies:extra_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                    <?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['currency']->value['currency_id'],'text'=>$_smarty_tpl->tpl_vars['currency']->value['description'],'details'=>$_smarty_tpl->tpl_vars['currency_details']->value,'href'=>"currencies.update?currency_id=".((string)$_smarty_tpl->tpl_vars['currency']->value['currency_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'href_delete'=>$_smarty_tpl->tpl_vars['_href_delete']->value,'delete_data'=>$_smarty_tpl->tpl_vars['currency']->value['currency_code'],'delete_target_id'=>"manage_currencies_list",'header_text'=>$_smarty_tpl->tpl_vars['currency']->value['description'],'table'=>"currencies",'object_id_name'=>"currency_id",'status'=>$_smarty_tpl->tpl_vars['currency']->value['status'],'additional_class'=>$_smarty_tpl->tpl_vars['is_allow_update_currencies']->value ? "cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['currency']->value['currency_id']) : '','no_table'=>true,'non_editable'=>$_smarty_tpl->tpl_vars['runtime']->value['company_id'],'is_view_link'=>true,'draggable'=>$_smarty_tpl->tpl_vars['is_allow_update_currencies']->value,'hidden'=>true,'update_controller'=>"currencies",'st_result_ids'=>"manage_currencies_list",'tool_items'=>Smarty::$_smarty_vars['capture']['tool_items'],'extra_data'=>Smarty::$_smarty_vars['capture']['extra_data']), 0);?>

                <?php } ?>
                </tbody>
            </table>
        </div>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <!--manage_currencies_list--></div>

    <div class="buttons-container">
        <?php $_smarty_tpl->_capture_stack[0][] = array("extra_tools", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"currencies:import_rates")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"currencies:import_rates"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"currencies:import_rates"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['is_allow_update_currencies']->value&&fn_allow_save_object('','',true)) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/currencies/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('currency'=>array()), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_currency",'text'=>$_smarty_tpl->__("new_currency"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>$_smarty_tpl->__("add_currency"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"currencies:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"currencies:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="sidebar-row exchange-rates">
        <h6 class="hidden exchange-rates__header"><?php echo $_smarty_tpl->__("exchange_rate");?>
</h6>
        <ul class="unstyled currencies-rate" id="currencies_stock_exchange">
        </ul>
        <span class="hidden exchange-rates__error"><?php echo $_smarty_tpl->__("error_exchange_rate");?>
</span>
    </div>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>

        var exchangeRate = {

            primary_currency: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['primary_currency']->value, ENT_QUOTES, 'UTF-8');?>
",

            api_key: 'X24PW1QRZI0I3UAO',

            init: function() {

                // Check if primary_currency is valid else use USD as default value
                exchangeRate.getRate(exchangeRate.primary_currency, 'USD', exchangeRate.getAllCurrency);

                $.ceEvent('on', 'ce.form_confirm', function(elm) {
                    var code = elm.data('caParams');

                    if(code !== 'EUR' && code !== 'GBP' && code !== 'CHF') {
                        $('li[data-ca-currency-code="' + code + '"]').remove();
                    }
                });
            },

            getAllCurrency: function(data){
                var currencies = ['USD', 'EUR', 'GBP', 'CHF'];

                if (data.RealtimeCurrencyExchangeRate !== undefined) {
                    var default_rate = data.RealtimeCurrencyExchangeRate.ExchangeRate !== undefined
                        ? parseFloat(data.RealtimeCurrencyExchangeRate.ExchangeRate)
                        : 0
                } else {
                    $('.exchange-rates__header, .exchange-rates__error').removeClass('hidden');
                }

                if (typeof(default_rate) !== "number" || default_rate === 0) {
                    exchangeRate.primary_currency = 'USD';
                }

                <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['currency']->value['currency_code']!="EUR"&&$_smarty_tpl->tpl_vars['currency']->value['currency_code']!="GBP"&&$_smarty_tpl->tpl_vars['currency']->value['currency_code']!="CHF"&&$_smarty_tpl->tpl_vars['currency']->value['currency_code']!="USD") {?>
                        currencies.push("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['currency_code'], ENT_QUOTES, 'UTF-8');?>
");
                    <?php }?>
                <?php } ?>

                $.each(currencies, function(index, value) {
                    exchangeRate.getRate(value, exchangeRate.primary_currency);
                });
            },

            getRate: function (from, to, callback) {
                callback = callback || exchangeRate.parseExchangeRate;

                var url = 'https://www.alphavantage.co/query?function=CURRENCY_EXCHANGE_RATE' +
                    '&from_currency=' + from +
                    '&to_currency=' + to +
                    '&apikey=' + exchangeRate.api_key +
                    '&ts=<?php echo htmlspecialchars((defined('TIME') ? constant('TIME') : null), ENT_QUOTES, 'UTF-8');?>
';

                $.ajax({
                    type: "GET",
                    url: url,
                    success: function(data, textStatus, jqxhr) {
                        if (callback) {
                            data = exchangeRate.normalizeData(data);
                            callback(data, textStatus, jqxhr);
                        }
                    },
                    dataType: "json",
                    cache: false
                });
            },

            normalizeData: function(data) {
                var normalized_obj = new Object();

                for (var key in data) {
                    var property_value = data[key],
                        properety_name = key.replace(/[\s_]+/g, '').replace(/^\d+\./, '');

                    if (typeof(data[key]) === 'object') {
                        property_value = exchangeRate.normalizeData(data[key]);
                    }

                    normalized_obj[properety_name] = property_value;
                }

                return normalized_obj;
            },

            parseExchangeRate: function(data) {
                if (data.RealtimeCurrencyExchangeRate !== undefined) {
                    var name = data.RealtimeCurrencyExchangeRate.FromCurrencyCode !== undefined
                        ? data.RealtimeCurrencyExchangeRate.FromCurrencyCode
                        : null;
                    var rate = data.RealtimeCurrencyExchangeRate.ExchangeRate !== undefined
                        ? parseFloat(data.RealtimeCurrencyExchangeRate.ExchangeRate)
                        : null;
                }

                var container = Tygh.$('#currencies_stock_exchange');

                if (rate && name && name !== exchangeRate.primary_currency) {
                    function asc_sort(a, b){
                        return ($(b).text()) < ($(a).text()) ? 1 : -1;
                    }
                    container.append('<li data-ca-currency-code="' + name + '">' + name + '/' + exchangeRate.primary_currency + '<span class="pull-right muted">' + rate + '</span></li>');
                    container.find('li').sort(asc_sort).appendTo(container);
                    $('.exchange-rates__header').removeClass('hidden');
                }
            }
        };

        exchangeRate.init();
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"currencies:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"currencies:manage_tools_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"currencies:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"currencies:manage_tools_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("currencies"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>

<?php }} ?>
