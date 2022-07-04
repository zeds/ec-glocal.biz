<?php /* Smarty version Smarty-3.1.21, created on 2022-06-11 15:10:51
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/product_subject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59435501262a431ebc1a9f8-37622058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47a33c8b9742f5c18e83a88eef0449d87b5f492d' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/product_subject.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '59435501262a431ebc1a9f8-37622058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a431ebc1f678_42330084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a431ebc1f678_42330084')) {function content_62a431ebc1f678_42330084($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.truncate.php';
?>

<a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
">
    <small>
        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product'],50,"...",true), ENT_QUOTES, 'UTF-8');?>

    </small>
</a>
<?php }} ?>
