<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 06:18:23
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/checkout/components/profile_fields/s_city.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12180391316295349f177a73-16549039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78a5fcf44454a89b71f27f9c8fd5ac551a29b260' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/checkout/components/profile_fields/s_city.tpl',
      1 => 1653909591,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12180391316295349f177a73-16549039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'user_data' => 0,
    'wrapper_class' => 0,
    'city' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295349f18e687_33686028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295349f18e687_33686028')) {function content_6295349f18e687_33686028($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('city','city'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['city'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_city'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['state_descr'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['state'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_state'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['zipcode'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['country'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_country'], null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:location_city")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:location_city"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <div class="litecheckout__field <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-field-container"
         data-ca-error-message-target-method="append">

    <input type="text"
           data-ca-lite-checkout-field="user_data.s_city"
           id="litecheckout_city"
           data-ca-lite-checkout-element="city"
           data-ca-lite-checkout-last-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
           placeholder=" "
           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="litecheckout__input"
            
           name="litecheckout_city"
            
    />
    <label class="litecheckout__label cm-required" for="litecheckout_city"><?php echo $_smarty_tpl->__("city");?>
 </label>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:location_city"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/profile_fields/s_city.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/profile_fields/s_city.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars['city'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_city'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['state_descr'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['state'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_state'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['zipcode'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['country'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_country'], null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:location_city")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:location_city"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    <div class="litecheckout__field <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-field-container"
         data-ca-error-message-target-method="append">

    <input type="text"
           data-ca-lite-checkout-field="user_data.s_city"
           id="litecheckout_city"
           data-ca-lite-checkout-element="city"
           data-ca-lite-checkout-last-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
           placeholder=" "
           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="litecheckout__input"
            
           name="litecheckout_city"
            
    />
    <label class="litecheckout__label cm-required" for="litecheckout_city"><?php echo $_smarty_tpl->__("city");?>
 </label>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:location_city"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
