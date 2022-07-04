<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 14:24:25
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/subject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1387436711629ee1094d6998-66060362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e585926a7cd0d3f08293826463282e11e14f768c' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/subject.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1387436711629ee1094d6998-66060362',
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
  'unifunc' => 'content_629ee1094e3c17_95745259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629ee1094e3c17_95745259')) {function content_629ee1094e3c17_95745259($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.truncate.php';
?>

<?php $_smarty_tpl->tpl_vars['object_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['thread']->value['object_type'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['object'] = new Smarty_variable($_smarty_tpl->tpl_vars['thread']->value['object'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['thread']->value['subject']) {?>
    <small class="muted" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['subject'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['thread']->value['subject'],30,"...",true), ENT_QUOTES, 'UTF-8');?>

        <?php if ($_smarty_tpl->tpl_vars['object_type']->value) {?>
            —
        <?php }?>
    </small>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['object_type']->value===(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/product_subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['object']->value), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['object_type']->value===(defined('VC_OBJECT_TYPE_ORDER') ? constant('VC_OBJECT_TYPE_ORDER') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/order_subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('order'=>$_smarty_tpl->tpl_vars['object']->value), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['object_type']->value===(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/company_subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company'=>$_smarty_tpl->tpl_vars['object']->value), 0);?>

<?php }?>
<?php }} ?>
