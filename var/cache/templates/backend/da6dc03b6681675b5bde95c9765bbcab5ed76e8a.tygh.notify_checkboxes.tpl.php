<?php /* Smarty version Smarty-3.1.21, created on 2022-06-04 10:13:27
         compiled from "/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1994912700629ab1b75b22b1-61410542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da6dc03b6681675b5bde95c9765bbcab5ed76e8a' => 
    array (
      0 => '/home/xb870157/ec-glocal.biz/public_html/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1994912700629ab1b75b22b1-61410542',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_629ab1b75bed37_13878864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_629ab1b75bed37_13878864')) {function content_629ab1b75bed37_13878864($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notify_user'));
?>


<?php echo $_smarty_tpl->getSubTemplate ("common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"multiple",'id'=>"select",'notify'=>true,'notify_customer_status'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'name_prefix'=>"notify"), 0);?>
<?php }} ?>
