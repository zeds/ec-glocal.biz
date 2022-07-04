<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 21:40:46
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/shippings/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1269383586629b52ceab3435-90937224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aeccc257f4f3d4edd1216d02b2e496e0042d68b' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/shippings/configure.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1269383586629b52ceab3435-90937224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'service_template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629b52ceab8797_38511186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629b52ceab8797_38511186')) {function content_629b52ceab8797_38511186($_smarty_tpl) {?><div id="content_configure">

<?php if ($_smarty_tpl->tpl_vars['service_template']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['service_template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<!--content_configure--></div><?php }} ?>
