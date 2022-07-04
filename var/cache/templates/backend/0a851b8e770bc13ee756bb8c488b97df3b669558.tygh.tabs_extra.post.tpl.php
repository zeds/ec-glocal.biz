<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:15:12
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/vendor_communication/hooks/orders/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1718580429629541f083e204-22572256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a851b8e770bc13ee756bb8c488b97df3b669558' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/vendor_communication/hooks/orders/tabs_extra.post.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1718580429629541f083e204-22572256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_vendor_to_customer_thread' => 0,
    'is_user_can_manage_customer_order_thread' => 0,
    'config' => 0,
    'order_vendor_to_admin_thread' => 0,
    'is_user_can_manage_vendor_order_thread' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629541f0856189_58920816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629541f0856189_58920816')) {function content_629541f0856189_58920816($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['order_vendor_to_customer_thread']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/thread_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('thread'=>$_smarty_tpl->tpl_vars['order_vendor_to_customer_thread']->value,'is_user_can_manage_order_thread'=>$_smarty_tpl->tpl_vars['is_user_can_manage_customer_order_thread']->value,'refresh_href'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['order_vendor_to_admin_thread']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/thread_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('thread'=>$_smarty_tpl->tpl_vars['order_vendor_to_admin_thread']->value,'is_user_can_manage_order_thread'=>$_smarty_tpl->tpl_vars['is_user_can_manage_vendor_order_thread']->value,'refresh_href'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0);?>

<?php }?>
<?php }} ?>
