<?php /* Smarty version Smarty-3.1.21, created on 2022-06-08 04:58:24
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/payment_dependencies/hooks/shippings/update.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:769468693629fade0c35291-90040219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a298106b28a36efe7641f4a6e70d20ff4c969a6' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/payment_dependencies/hooks/shippings/update.post.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '769468693629fade0c35291-90040219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payments' => 0,
    'payment' => 0,
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629fade0c51eb0_65093125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629fade0c51eb0_65093125')) {function content_629fade0c51eb0_65093125($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/modifier.in_array.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('pd_allowed_payment_methods','pd_allowed_payment_methods_text'));
?>
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("pd_allowed_payment_methods");?>
:</label>
    <div class="controls">
        <input type="hidden" name="shipping_data[enable_payment_ids]" value="" />
        <?php  $_smarty_tpl->tpl_vars["payment"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["payment"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["payment"]->key => $_smarty_tpl->tpl_vars["payment"]->value) {
$_smarty_tpl->tpl_vars["payment"]->_loop = true;
?>
            <label class="checkbox inline" for="elm_shippings_payments_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="checkbox" name="shipping_data[enable_payment_ids][]" id="elm_shippings_payments_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if (!smarty_modifier_in_array($_smarty_tpl->tpl_vars['payment']->value['payment_id'],$_smarty_tpl->tpl_vars['shipping']->value['disable_payment_ids'])) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value['payment'], ENT_QUOTES, 'UTF-8');?>
</label>
        <?php }
if (!$_smarty_tpl->tpl_vars["payment"]->_loop) {
?>
            &ndash;
        <?php } ?>
        <p class="muted description"><?php echo $_smarty_tpl->__("pd_allowed_payment_methods_text");?>
</p>
    </div>
</div><?php }} ?>
