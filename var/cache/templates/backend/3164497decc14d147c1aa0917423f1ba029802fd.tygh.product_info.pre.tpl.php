<?php /* Smarty version Smarty-3.1.21, created on 2022-05-31 07:15:12
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/product_variations/hooks/orders/product_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1766158899629541f069d589-47272516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3164497decc14d147c1aa0917423f1ba029802fd' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/product_variations/hooks/orders/product_info.pre.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1766158899629541f069d589-47272516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629541f06bc054_65025556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629541f06bc054_65025556')) {function content_629541f06bc054_65025556($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['cp']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['cp']->value['variation_features'],'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>
