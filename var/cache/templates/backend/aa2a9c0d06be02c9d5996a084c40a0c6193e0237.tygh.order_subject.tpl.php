<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 14:24:25
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/order_subject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:809485706629ee1094f8cb1-51168298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa2a9c0d06be02c9d5996a084c40a0c6193e0237' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/order_subject.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '809485706629ee1094f8cb1-51168298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629ee1095166d5_20706105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629ee1095166d5_20706105')) {function content_629ee1095166d5_20706105($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('order'));
?>


<a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
">
    <small>
        <?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
, <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order']->value['total']), 0);?>

    </small>
</a>
<?php }} ?>
