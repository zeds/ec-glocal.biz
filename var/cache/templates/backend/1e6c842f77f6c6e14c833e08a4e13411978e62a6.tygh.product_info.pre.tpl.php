<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:15:12
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/product_variations/hooks/shipments/product_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112679308629541f05c3412-69640992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e6c842f77f6c6e14c833e08a4e13411978e62a6' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/product_variations/hooks/shipments/product_info.pre.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '112679308629541f05c3412-69640992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oi' => 0,
    'product' => 0,
    'variation_features' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629541f0616ba2_76042248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629541f0616ba2_76042248')) {function content_629541f0616ba2_76042248($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oi']->value['variation_features']||$_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>

    <?php if ($_smarty_tpl->tpl_vars['oi']->value['variation_features']) {?>
        
        <?php $_smarty_tpl->tpl_vars['variation_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['oi']->value['variation_features'], null, 0);?>
    <?php } else { ?>
        
        <?php $_smarty_tpl->tpl_vars['variation_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['variation_features'], null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['variation_features']->value,'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>
