<?php /* Smarty version Smarty-3.1.21, created on 2022-06-07 04:56:47
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/stripe/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2112906616629e5bff128a19-68293107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e01aa1422bbfdacaebdfa995ae19a151e1698e3' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/addons/stripe/hooks/index/scripts.post.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2112906616629e5bff128a19-68293107',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629e5bff12ab03_80939699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629e5bff12ab03_80939699')) {function content_629e5bff12ab03_80939699($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/xb870157/ec-glocal.biz/public_html/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/stripe/checkout.js"),$_smarty_tpl);?>

<?php }} ?>
