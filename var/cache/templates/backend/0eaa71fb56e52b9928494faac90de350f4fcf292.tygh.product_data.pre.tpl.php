<?php /* Smarty version Smarty-3.1.21, created on 2022-06-08 17:32:51
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/product_variations/hooks/product_list/product_data.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162739729162a05eb3023e44-50828124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eaa71fb56e52b9928494faac90de350f4fcf292' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/product_variations/hooks/product_list/product_data.pre.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '162739729162a05eb3023e44-50828124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a05eb3026f07_58897771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a05eb3026f07_58897771')) {function content_62a05eb3026f07_58897771($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['variation_name']) {?>
    <input type="hidden" id="product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_alt" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['variation_name'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php }} ?>
