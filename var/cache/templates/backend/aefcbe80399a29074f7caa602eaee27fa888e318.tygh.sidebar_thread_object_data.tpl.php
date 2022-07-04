<?php /* Smarty version Smarty-3.1.21, created on 2022-06-10 04:03:47
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/sidebar_thread_object_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:548650062a24413e0c156-37785399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aefcbe80399a29074f7caa602eaee27fa888e318' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/sidebar_thread_object_data.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '548650062a24413e0c156-37785399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'object' => 0,
    'object_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a24413e122d0_53004206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a24413e122d0_53004206')) {function content_62a24413e122d0_53004206($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['object']->value['object_type']==(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/sidebar/sidebar_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_data'=>$_smarty_tpl->tpl_vars['object']->value), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['object']->value['object_type']===(defined('VC_OBJECT_TYPE_ORDER') ? constant('VC_OBJECT_TYPE_ORDER') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/sidebar_thread_order_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['object']->value,'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value), 0);?>

<?php }?><?php }} ?>
