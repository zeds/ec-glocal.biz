<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 06:18:23
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/checkout/components/profile_fields/s_state.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6399762456295349f14cb27-30500840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ef3e525102a8c7c4d02682509b29f3108f06e97' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/checkout/components/profile_fields/s_state.tpl',
      1 => 1653909591,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6399762456295349f14cb27-30500840',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'user_data' => 0,
    'wrapper_class' => 0,
    'state' => 0,
    'country' => 0,
    'states' => 0,
    'country_state' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6295349f16c110_30122660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6295349f16c110_30122660')) {function content_6295349f16c110_30122660($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('select_state','state','select_state','state'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['state_descr'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['state'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_state'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['country'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_country'], null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:location_state")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:location_state"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<div class="litecheckout__field <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-field-container"
    data-ca-error-message-target-method="append">

    <select data-ca-lite-checkout-field="user_data.s_state"
            class="cm-state cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
            data-ca-lite-checkout-element="state"
            data-ca-lite-checkout-is-state-code-container="true"
            data-ca-lite-checkout-last-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
            id="litecheckout_state"
            
            name="litecheckout_state"
            
    >
        <option disabled data-ca-rebuild-states="skip" <?php if (!$_smarty_tpl->tpl_vars['state']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->__("select_state");?>
</option>
        <?php  $_smarty_tpl->tpl_vars['country_state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country_state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country_state']->key => $_smarty_tpl->tpl_vars['country_state']->value) {
$_smarty_tpl->tpl_vars['country_state']->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['country_state']->value['code']===$_smarty_tpl->tpl_vars['state']->value) {?>selected<?php }?>
            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>

    <input type="text"
           data-ca-lite-checkout-field="user_data.s_state"
           id="litecheckout_state_d"
           data-ca-lite-checkout-element="state"
           data-ca-lite-checkout-is-state-code-container="false"
           data-ca-lite-checkout-last-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
           placeholder=" "
           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="cm-state cm-location-shipping litecheckout__input hidden"
           disabled
    />

    <label class="litecheckout__label cm-required" for="litecheckout_state"><?php echo $_smarty_tpl->__("state");?>
 </label>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:location_state"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/profile_fields/s_state.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/profile_fields/s_state.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars['state_descr'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['state'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_state'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['country'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_data']->value['s_country'], null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:location_state")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:location_state"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<div class="litecheckout__field <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-field-container"
    data-ca-error-message-target-method="append">

    <select data-ca-lite-checkout-field="user_data.s_state"
            class="cm-state cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
            data-ca-lite-checkout-element="state"
            data-ca-lite-checkout-is-state-code-container="true"
            data-ca-lite-checkout-last-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
            id="litecheckout_state"
            
            name="litecheckout_state"
            
    >
        <option disabled data-ca-rebuild-states="skip" <?php if (!$_smarty_tpl->tpl_vars['state']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->__("select_state");?>
</option>
        <?php  $_smarty_tpl->tpl_vars['country_state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country_state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country_state']->key => $_smarty_tpl->tpl_vars['country_state']->value) {
$_smarty_tpl->tpl_vars['country_state']->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['country_state']->value['code']===$_smarty_tpl->tpl_vars['state']->value) {?>selected<?php }?>
            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>

    <input type="text"
           data-ca-lite-checkout-field="user_data.s_state"
           id="litecheckout_state_d"
           data-ca-lite-checkout-element="state"
           data-ca-lite-checkout-is-state-code-container="false"
           data-ca-lite-checkout-last-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
           placeholder=" "
           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="cm-state cm-location-shipping litecheckout__input hidden"
           disabled
    />

    <label class="litecheckout__label cm-required" for="litecheckout_state"><?php echo $_smarty_tpl->__("state");?>
 </label>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:location_state"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
