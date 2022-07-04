<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 14:24:25
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/subject_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:379591840629ee10936f9b0-44988559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eab9c8f7f6f5864678121b07b98b6b075995515' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/subject_image.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '379591840629ee10936f9b0-44988559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thread' => 0,
    'object_type' => 0,
    'object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629ee109376ab3_43752376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629ee109376ab3_43752376')) {function content_629ee109376ab3_43752376($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['object_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['thread']->value['object_type'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['object'] = new Smarty_variable($_smarty_tpl->tpl_vars['thread']->value['object'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['object_type']->value===(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/product_subject_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['object']->value), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['object_type']->value===(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/company_subject_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company'=>$_smarty_tpl->tpl_vars['object']->value), 0);?>

<?php }?>
<?php }} ?>
