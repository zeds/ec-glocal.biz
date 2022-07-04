<?php /* Smarty version Smarty-3.1.21, created on 2022-06-08 14:51:42
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/wishlist/hooks/cart/cart_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119407156162a038ee7a36b4-11903977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c65f5f21cb8bd6a098e98903a0a60c8cc263893' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/wishlist/hooks/cart/cart_content.pre.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '119407156162a038ee7a36b4-11903977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a038ee7a7566_00635209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a038ee7a7566_00635209')) {function content_62a038ee7a7566_00635209($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('wishlist_short'));
?>
<?php if ($_smarty_tpl->tpl_vars['customer']->value['wishlist_products']) {?>
    <div class="muted"><?php echo $_smarty_tpl->__("wishlist_short");?>
: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['customer']->value['wishlist_products'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
</div>
<?php }?><?php }} ?>
