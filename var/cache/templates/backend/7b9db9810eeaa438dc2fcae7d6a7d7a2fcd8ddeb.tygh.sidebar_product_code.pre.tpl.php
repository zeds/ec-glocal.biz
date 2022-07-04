<?php /* Smarty version Smarty-3.1.21, created on 2022-06-10 04:03:48
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/product_variations/hooks/common/sidebar_product_code.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173690036562a2441432b098-27635431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b9db9810eeaa438dc2fcae7d6a7d7a2fcd8ddeb' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/product_variations/hooks/common/sidebar_product_code.pre.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '173690036562a2441432b098-27635431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62a2441432f665_22627558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62a2441432f665_22627558')) {function content_62a2441432f665_22627558($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['product_data']->value['variation_features'],'features_split'=>true,'features_inline'=>true,'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>
