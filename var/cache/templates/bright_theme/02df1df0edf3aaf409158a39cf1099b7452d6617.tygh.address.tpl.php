<?php /* Smarty version Smarty-3.1.21, created on 2022-06-01 11:12:48
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/checkout/components/customer/address.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16099699756296cb20461fc6-98681303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02df1df0edf3aaf409158a39cf1099b7452d6617' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/themes/responsive/templates/views/checkout/components/customer/address.tpl',
      1 => 1653909591,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16099699756296cb20461fc6-98681303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_profiles_on_checkout' => 0,
    'group_meta' => 0,
    'element_identifier' => 0,
    'settings' => 0,
    'profile_fields' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6296cb2047fb10_94265540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6296cb2047fb10_94265540')) {function content_6296cb2047fb10_94265540($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['element_identifier'] = new Smarty_variable("address-group", null, 0);?>
<?php $_smarty_tpl->tpl_vars['group_meta'] = new Smarty_variable("hidden", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
    <?php $_smarty_tpl->tpl_vars['element_identifier'] = new Smarty_variable("user-profiles", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['group_meta'] = new Smarty_variable('', null, 0);?>
<?php }?>

<div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_meta']->value, ENT_QUOTES, 'UTF-8');?>
 litecheckout__group" data-ca-lite-checkout-element="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element_identifier']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-address-position="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/user_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS"),'exclude'=>array("s_city","s_country","s_state","customer_notes")), 0);?>

    <?php }?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/address.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer/address.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['element_identifier'] = new Smarty_variable("address-group", null, 0);?>
<?php $_smarty_tpl->tpl_vars['group_meta'] = new Smarty_variable("hidden", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
    <?php $_smarty_tpl->tpl_vars['element_identifier'] = new Smarty_variable("user-profiles", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['group_meta'] = new Smarty_variable('', null, 0);?>
<?php }?>

<div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_meta']->value, ENT_QUOTES, 'UTF-8');?>
 litecheckout__group" data-ca-lite-checkout-element="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element_identifier']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-address-position="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/user_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS"),'exclude'=>array("s_city","s_country","s_state","customer_notes")), 0);?>

    <?php }?>
</div>
<?php }?><?php }} ?>
