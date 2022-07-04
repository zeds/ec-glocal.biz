<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 21:40:45
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/shippings/components/rates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1427306635629b52cdae1f95-74638744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b046875768eed953e981ff0328807efac50159f' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/shippings/components/rates.tpl',
      1 => 1626227638,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1427306635629b52cdae1f95-74638744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'settings' => 0,
    'ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b52cdb01ec2_76584138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b52cdb01ec2_76584138')) {function content_629b52cdb01ec2_76584138($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('shipping_price_condition','shipping_weight_condition','shipping_items_condition','shipping_surcharge_discount','shipping_per','shipping_item','text_are_you_sure_to_proceed','shipping_from_value','shipping_to_value','shipping_and_up','shipping_rate_range_overlap_error_message','shipping_rate_range_limit_error_message'));
?>
<input type="hidden" name="shipping_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="shipping_data[rates][]" value="" />

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    Tygh.tr({
        'C_condition_name': '<?php echo strtr($_smarty_tpl->__("shipping_price_condition"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        'W_condition_name': '<?php echo strtr($_smarty_tpl->__("shipping_weight_condition"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        'I_condition_name': '<?php echo strtr($_smarty_tpl->__("shipping_items_condition"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        'surcharge_discount_name': '<?php echo strtr($_smarty_tpl->__("shipping_surcharge_discount"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        'per': '<?php echo strtr($_smarty_tpl->__("shipping_per"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
 ',
        'C_unit': '<?php echo htmlspecialchars(strtr(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol']), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
        'W_unit': '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
        'I_unit': '<?php echo strtr($_smarty_tpl->__("shipping_item"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        'text_are_you_sure_to_proceed': '<?php echo strtr($_smarty_tpl->__("text_are_you_sure_to_proceed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        'from': '<?php echo strtr($_smarty_tpl->__("shipping_from_value"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        'to': '<?php echo strtr($_smarty_tpl->__("shipping_to_value"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        'shipping_and_up': '<?php echo strtr($_smarty_tpl->__("shipping_and_up"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        'currencies_after': '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
        'rate_range_overlap_error_message': '<?php echo strtr($_smarty_tpl->__("shipping_rate_range_overlap_error_message"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        'rate_range_limit_error_message': '<?php echo strtr($_smarty_tpl->__("shipping_rate_range_limit_error_message"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    });
    Tygh.currencies_after = <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after']=='Y') {?> true <?php } else { ?> false <?php }?>;
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/shipping_rates.js"),$_smarty_tpl);?>


<div class="dashboard-shipping" id="dashboard_shipping_rate">

    <?php echo $_smarty_tpl->getSubTemplate ("views/shippings/components/picker/rates/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('multiple'=>true,'view_mode'=>"external",'item_ids'=>$_smarty_tpl->tpl_vars['ids']->value,'shipping_id'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>


    <template id="template_table_row">
        <?php echo $_smarty_tpl->getSubTemplate ("views/shippings/components/condition_row.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </template>
<!--dashboard_shipping_rate--></div>
<?php }} ?>
