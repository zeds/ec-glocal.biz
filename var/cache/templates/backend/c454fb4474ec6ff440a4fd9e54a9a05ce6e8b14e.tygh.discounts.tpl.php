<?php /* Smarty version Smarty-3.1.21, created on 2022-06-06 19:58:38
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/order_management/components/discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:236450919629dddde1acf34-30746248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c454fb4474ec6ff440a4fd9e54a9a05ce6e8b14e' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/order_management/components/discounts.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '236450919629dddde1acf34-30746248',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629dddde1af735_26457345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629dddde1af735_26457345')) {function content_629dddde1af735_26457345($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('discounts','discount_coupon_code'));
?>
<div class="orders-discounts">
	<h4><?php echo $_smarty_tpl->__("discounts");?>
</h4>
	<div class="orders-discount">
	    <input type="text" name="coupon_code" placeholder="<?php echo $_smarty_tpl->__("discount_coupon_code");?>
" id="coupon_code" class="input-text-large" size="30" value="" />
	</div>
</div><?php }} ?>
